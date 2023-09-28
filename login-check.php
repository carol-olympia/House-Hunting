<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();  // Create a response array

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username_email']) && isset($_POST['password'])) {
        // This is a login request
        $usernameEmail = $_POST['username_email'];
        $password = $_POST['password'];

        // Prepare SQL query using prepared statements
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE (username = ? OR email_address = ?)");
        $stmt->bind_param("ss", $usernameEmail, $usernameEmail);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // Bind the result variables
            $stmt->bind_result($user_id, $username, $hashedPassword);
            $stmt->fetch();

            // Verify hashed password
            if (password_verify($password, $hashedPassword)) {
                // Login successful
                $_SESSION['user_id'] = $user_id; // Store user ID in session
                $_SESSION['username'] = $username; // Store username in session
                $response['success'] = true;
                $response['message'] = "Login successful.";
            } else {
                // Login failed
                $response['success'] = false;
                $response['message'] = "Incorrect username/email or password.";
            }
        } else {
            // User not found
            $response['success'] = false;
            $response['message'] = "User not found.";
        }

        $stmt->close();
    } else {
        // Invalid request
        $response['success'] = false;
        $response['message'] = "Invalid request.";
    }
}

// Close the database connection
$conn->close();

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
