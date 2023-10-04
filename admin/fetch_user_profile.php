<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(array('error' => 'User not logged in'));
    exit();  // Stop script execution if the user is not logged in
}

// Include your database connection code here
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "house"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Fetch user data based on user ID
$sql = "SELECT * FROM users WHERE id = $user_id";

$result = $conn->query($sql);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
   // Fetch the user data as an associative array
   $user_data = $result->fetch_assoc();
   // Return user data as JSON
   echo json_encode($user_data);
} else {
   echo json_encode(array('error' => 'User not found'));
}

$conn->close();
?>
