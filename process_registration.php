<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new SQLite3("students.db");

    $name = $_POST["name"];
    $enrollment_number = $_POST["enrollment_number"];
    $department = $_POST["department"];
    $year_of_diploma = $_POST["year_of_diploma"];
    $date_of_birth = $_POST["date_of_birth"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];

    // Check if the enrollment number already exists
    $checkQuery = $db->prepare("SELECT COUNT(*) FROM students WHERE enrollment_number = :enrollment_number");
    $checkQuery->bindValue(":enrollment_number", $enrollment_number, SQLITE3_TEXT);
    $result = $checkQuery->execute();

    $row = $result->fetchArray(SQLITE3_NUM);
    $count = $row[0];

    if ($count > 0) {
        echo "User details already exist with this enrollment number.";
    } else {
        // Insert the new record into the database
        $query = $db->prepare("INSERT INTO students (name, enrollment_number, department, year_of_diploma, date_of_birth, contact_number, address) VALUES (:name, :enrollment_number, :department, :year_of_diploma, :date_of_birth, :contact_number, :address)");
        $query->bindValue(":name", $name, SQLITE3_TEXT);
        $query->bindValue(":enrollment_number", $enrollment_number, SQLITE3_TEXT);
        $query->bindValue(":department", $department, SQLITE3_TEXT);
        $query->bindValue(":year_of_diploma", $year_of_diploma, SQLITE3_INTEGER);
        $query->bindValue(":date_of_birth", $date_of_birth, SQLITE3_TEXT);
        $query->bindValue(":contact_number", $contact_number, SQLITE3_TEXT);
        $query->bindValue(":address", $address, SQLITE3_TEXT);

        if ($query->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $db->lastErrorMsg();
        }
    }

    $db->close();
}
?>
