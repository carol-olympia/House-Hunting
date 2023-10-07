<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "house_sell";

// Connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    header("location: errors/db.php");

    die();

}
    
// } else {
//     echo "Database Connected";
// }

?>
