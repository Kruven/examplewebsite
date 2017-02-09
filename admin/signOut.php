<?php
// Start the session
session_start();     

// If there is a user logged in
if (isset($_SESSION['userId'])) {
    // Destroy the session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Destroy the cookie
    setcookie (session_name(), '', time()-300, '/', '', 0);
    // Redirect the user
    include('../redirect.php');
    redirect("../index.php");
}
// Else; If no one is logged in, redirect the user
else {
    include('../redirect.php');
    redirect("../index.php");
}
?>