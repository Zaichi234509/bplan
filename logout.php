<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    // If logged in, unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to a logged-out page or homepage
    header("Location: logout.php");
    exit();
} else {
    // If the user is not logged in, redirect to a login page or homepage
    header("Location: index.php");
    exit();
}
?>
