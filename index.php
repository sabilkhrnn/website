<?php

error_reporting(0);
session_start();

include_once 'dbconection.php';

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // User is logged in, include the main content
    include_once 'ar_menu.php';
    include_once 'header.php';
    include_once 'menu.php';
    include_once 'sidebar.php';
    include_once 'main.php';
    include_once 'footer.php';
} else {
    // User is not logged in, redirect to the login page or display a message
    header('Location: login.php');
    exit();
}

?>
