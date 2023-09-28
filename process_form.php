<?php
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

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to format phone number (replace with your own formatting logic)
function format_phone_number($phone_number) {
    $phone_number = preg_replace('/[^0-9]/', '', $phone_number);
    return $phone_number;
}
// Retrieve form data
$first_name = sanitize_input($_POST['first_name']);
$last_name = sanitize_input($_POST['last_name']);
$phone_number = sanitize_input($_POST['phone_number']);
$email_address = sanitize_input($_POST['email_address']);
$username = sanitize_input($_POST['username']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];  // New variable to hold confirm password

// Check if password and confirm password match
if ($password !== $confirm_password) {
    echo "password_mismatch";  // Passwords do not match
} else {
    // Sanitize and format the phone number with the country code
    $phone_number = format_phone_number($phone_number);

    // Validate phone number length
    if (strlen($phone_number) < 10) {
        echo "invalid_phone_number"; // Phone number length is insufficient
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Check if email and username are already in use
        $email_check_query = "SELECT * FROM users WHERE email_address='$email_address'";
        $email_check_result = $conn->query($email_check_query);

        $username_check_query = "SELECT * FROM users WHERE username='$username'";
        $username_check_result = $conn->query($username_check_query);

        if ($email_check_result->num_rows > 0 && $username_check_result->num_rows > 0) {
            // Both email and username are already in use
            echo "both_in_use";
        } elseif ($email_check_result->num_rows > 0) {
            // Email is already in use
            echo "email_in_use";
        } elseif ($username_check_result->num_rows > 0) {
            // Username is already in use
            echo "username_in_use";
        } else {
            // Prepare SQL query for inserting new user
            $insert_query = "INSERT INTO users (first_name, last_name, phone_number, email_address, username, password)
                             VALUES ('$first_name', '$last_name', '$phone_number', '$email_address', '$username', '$hashed_password')";

            // Execute the SQL query to insert new user
            if ($conn->query($insert_query) === TRUE) {
                echo "success"; // Return success message
            } else {
                echo "Error: " . $insert_query . "<br>" . $conn->error;
            }
        }
    }
}

// Close the database connection
$conn->close();
?>
