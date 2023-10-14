<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "house_sell";

// Connection
$conn = mysqli_connect($host, $username, $password, $database);

if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        echo "Email is already in use ";
    } else {
        echo "Email is available";
    }
}
?>
