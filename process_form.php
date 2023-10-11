<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house_sell";

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

// Retrieve form data
$name = sanitize_input($_POST['name']);
$username = sanitize_input($_POST['username']);
$email_address = sanitize_input($_POST['email_address']);
$phone_number = sanitize_input($_POST['phone_number']);
$role = sanitize_input($_POST['role']);
$status = sanitize_input($_POST['status']);

// Hash the password (assuming there's only one password field)
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Validate phone number length
if (strlen($phone_number) < 10) {
    echo "invalid_phone_number"; // Phone number length is insufficient
} else {
    // Check if email already exists
    $email_check_query = "SELECT * FROM users WHERE email='$email_address'";
    $email_check_result = $conn->query($email_check_query);

    if ($email_check_result->num_rows > 0) {
        // Email is already in use
        echo "email_in_use";
    } else {
        // Email is not in use, proceed to insert the new user
       // Prepare SQL query for inserting new user
$insert_query = "INSERT INTO users (name, username, email, phone, role, status, password)
VALUES ('$name', '$username', '$email_address', '$phone_number', '$role', '$status', '$password')";


        // Execute the SQL query to insert new user
        if ($conn->query($insert_query) === TRUE) {
            echo "success"; // Return success message
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
