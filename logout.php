<?php
include "config.php";
session_start(); // Start the session

$_SESSION = []; // Clear all session variables
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

header("Location: login.php"); // Redirect to the login page
?>
