<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /house-hunting/login.php");
    exit();
}
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');                                                                                   
?>


<?php
include('includes/footer.php')
?>