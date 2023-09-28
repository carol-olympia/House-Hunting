<?php
// Include your database connection and other necessary setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if the email exists in the database
    $check_email_query = "SELECT * FROM your_table_name WHERE email_address='$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        // Email exists, redirect to the reset password form
        header("Location: reset-password-form.php?email=$email");
    } else {
        // Email does not exist
        echo "Email not found in our records.";
    }
}
?>
