<?php
session_start();

if (!isset($_SESSION["user"])) {
    // User is not logged in, redirect to login page
    header("Location: index.php");
    exit;
}

// Display the user's profile and options for viewing student details
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome, <?php echo $user["name"]; ?></title>
</head>
<body>
    <h2>Welcome, <?php echo $user["name"]; ?></h2>
    <!-- Add options for viewing student details or other user-specific features here -->
    <a href="view_students.php">View Student Details</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
