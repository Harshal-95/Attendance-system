<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["user"])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}

// Redirect the user to the login page (index.php in this case)
header("Location: index.php");
exit;
?>
