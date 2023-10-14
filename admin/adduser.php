<?php
session_start();
include('config/dbcon.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $password = $_POST['password'];

    // Check if email is already in use
    $email_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['status'] = "Email is already in use";
        $_SESSION['alert'] = "error";
        header("location: registered.php");
        exit();
    }

    // Hash the password for secure storage
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Your SQL query, including the hashed password
    $query = "INSERT INTO users (name, username, email, phone, role, status, password) VALUES ('$name','$username','$email','$phone','$role','$status','$hashed_password')";

    $user_query_num = mysqli_query($conn, $query);

    if ($user_query_num) {
        $_SESSION['status'] = "User Added Successfully";
        $_SESSION['alert'] = "success";
        header("location: registered.php");
        exit();
    } else {
        $_SESSION['status'] = "Failed to add user: " . mysqli_error($conn);
        $_SESSION['alert'] = "error";
        header("location: registered.php");
        exit();
    }
}

if(isset($_POST['updateuser']))
{
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $password = $_POST['password'];

    // If a new password is provided, hash it
    $hashed_password = $password ? password_hash($password, PASSWORD_DEFAULT) : null;

    $query = "UPDATE users SET name='$name', username='$username', email='$email', phone='$phone', role='$role', status='$status'";

    if ($hashed_password) {
        $query .= ", password='$hashed_password'";
    }

    $query .= " WHERE id='$user_id' ";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "User Updated Successfully";
        $_SESSION['alert'] = "success";
        header("Location: registered.php");
        exit();
    }
    else
    {
        $_SESSION['status'] = "Failed to update user: " . mysqli_error($conn);
        $_SESSION['alert'] = "error";
        header("Location: registered.php");
        exit();
    }
}
?>
