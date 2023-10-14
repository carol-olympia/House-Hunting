<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['delete_user_btn'])) {
    $user_id = $_POST['delete_user_id'];

    $query = "DELETE FROM users WHERE id = '$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "User deleted successfully";
        $_SESSION['alert'] = "success";  // Add an alert type for success
    } else {
        $_SESSION['status'] = "Failed to delete user";
        $_SESSION['alert'] = "error";  // Add an alert type for error
    }
    header("Location: registered.php"); // Redirect to registered.php
}
?>
