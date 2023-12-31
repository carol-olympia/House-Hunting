<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house_sell"; // Change the database name to "house_sell"

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo json_encode(['success' => true]);
    exit();
}

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();  // Create a response array

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username_email']) && isset($_POST['password']) && isset($_POST['login_type'])) {
        // This is a login request
        $usernameEmail = $_POST['username_email'];
        $password = $_POST['password'];
        $loginType = $_POST['login_type'];

        // Prepare SQL query using prepared statements
        $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE (username = ? OR email = ?)");
        $stmt->bind_param("ss", $usernameEmail, $usernameEmail);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // Bind the result variables
            $stmt->bind_result($user_id, $username, $hashedPassword, $role);
            $stmt->fetch();

            // Verify hashed password
            if (password_verify($password, $hashedPassword)) {
                // Check if the login is for 'admin'
                if ($loginType === 'admin' && $role === 'Admin') {
                    $_SESSION['user_id'] = $user_id; // Store user ID in session
                    $_SESSION['username'] = $username; // Store username in session
                    $_SESSION['user_type'] = 'admin'; // Store user type in session
                    $response['success'] = true;
                    $response['message'] = "Login successful as admin.";
                    $response['user_type'] = 'admin';
                } else {
                    $_SESSION['user_id'] = $user_id; // Store user ID in session
                    $_SESSION['username'] = $username; // Store username in session
                    $_SESSION['user_type'] = 'user'; // Store user type in session
                    $response['success'] = true;
                    $response['message'] = "Login successful as user.";
                    $response['user_type'] = 'user';
                }
            } else {
                // Login failed
                $response['success'] = false;
                $response['message'] = "Incorrect username/email or password.";
                $response['user_type'] = '';
            }
        } else {
            // User not found
            $response['success'] = false;
            $response['message'] = "Username or email not found.";
            $response['user_type'] = '';
        }

        $stmt->close();
    } else {
        // Invalid request
        $response['success'] = false;
        $response['message'] = "Invalid request.";
        $response['user_type'] = '';
    }
}

// Close the database connection
$conn->close();

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
