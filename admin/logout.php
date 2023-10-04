<?php
// logout.php

// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or wherever you need to after logout
header("Location:/House-Hunting/login.php");
exit();
?>
