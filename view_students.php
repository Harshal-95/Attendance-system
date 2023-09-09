<?php
session_start();

if (!isset($_SESSION["user"])) {
    // User is not logged in, redirect to login page
    header("Location: index.php");
    exit;
}

// Database connection code (similar to previous examples)

// Retrieve and display student details
$query = $db->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h2>Student Details</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <!-- Add other table headers here -->
        </tr>
        <?php while ($row = $query->fetchArray(SQLITE3_ASSOC)) { ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <!-- Add other table cells here -->
            </tr>
        <?php } ?>
    </table>
    <a href="profile.php">Back to Profile</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
