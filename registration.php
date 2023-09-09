<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection code (similar to previous examples)

    $enrollment_number = $_POST["enrollment_number"];
    // Add other login fields here

    // Check if the user exists in the database
    $loginQuery = $db->prepare("SELECT * FROM students WHERE enrollment_number = :enrollment_number");
    $loginQuery->bindValue(":enrollment_number", $enrollment_number, SQLITE3_TEXT);
    $result = $loginQuery->execute();

    $row = $result->fetchArray(SQLITE3_ASSOC);

    if ($row) {
        // User exists, set a session variable to indicate login
        $_SESSION["user"] = $row;
        header("Location: profile.php"); // Redirect to the user's profile page
    } else {
        echo "Login failed. User not found.";
    }

    // Close the database connection
    $db->close();
}
?>
