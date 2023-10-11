<?php
// Start or resume the session
session_start();

// Include your database connection and other necessary setup
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $response = array("success" => false, "message" => "Passwords do not match. Please try again.");
        echo json_encode($response);
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if the user has gone through the password reset process
    if (isset($_SESSION['password_reset_email']) && $_SESSION['password_reset_email'] === $email) {
        // Update the user's password in the database
        $sql = "UPDATE users SET password='$hashedPassword' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            // Password reset successful, reset the session
            unset($_SESSION['password_reset_email']);
            $_SESSION["password_changed"] = true;

            $response = array("success" => true, "message" => "Password reset successful!");
            echo json_encode($response);
        } else {
            $response = array("success" => false, "message" => "Error updating password: " . $conn->error);
            echo json_encode($response);
        }
    } else {
        $response = array("success" => false, "message" => "Access denied. Please follow the password reset process.");
        echo json_encode($response);
    }
}

// Close the database connection
$conn->close();
?>
