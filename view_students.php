<!DOCTYPE html>
<html>
<head>
    <title>View Registered Students</title>
</head>
<body>
    <h2>Registered Students</h2>

    <?php
    // Connect to the SQLite database
    $db = new SQLite3("students.db");

    // Query to retrieve all registered students
    $query = $db->query("SELECT * FROM students");

    if ($query) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Enrollment Number</th><th>Department</th><th>Year of Diploma</th><th>Date of Birth</th><th>Contact Number</th><th>Address</th></tr>";

        while ($row = $query->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["enrollment_number"] . "</td>";
            echo "<td>" . $row["department"] . "</td>";
            echo "<td>" . $row["year_of_diploma"] . "</td>";
            echo "<td>" . $row["date_of_birth"] . "</td>";
            echo "<td>" . $row["contact_number"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error: " . $db->lastErrorMsg();
    }

    // Close the database connection
    $db->close();
    ?>

</body>
</html>
