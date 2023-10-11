<?php
// Include your database connection and other necessary setup
session_start();  // Start or resume the session
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house_sell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();  // Create a response array
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in the database
    $check_email_query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        // Email exists
        $response['emailExists'] = true;
        $response['email'] = $email;

        // Set a session variable to indicate the user is in the password reset process
        $_SESSION['password_reset_email'] = $email;
    } else {
        // Email does not exist
        $response['emailExists'] = false;
    }
}



// Close the database connection
$conn->close();

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
