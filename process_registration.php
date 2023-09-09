<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection code (similar to previous examples)

    $name = $_POST["name"];
    // Add other registration fields here
    
    // Check if the enrollment number already exists
    $checkQuery = $db->prepare("SELECT COUNT(*) FROM students WHERE enrollment_number = :enrollment_number");
    $checkQuery->bindValue(":enrollment_number", $enrollment_number, SQLITE3_TEXT);
    $result = $checkQuery->execute();

    $row = $result->fetchArray(SQLITE3_NUM);
    $count = $row[0];

    if ($count > 0) {
        echo "User details already exist with this enrollment number.";
    } else {
        // Insert the new record into the database (similar to previous examples)
    }

    // Close the database connection
    $db->close();
}
?>
