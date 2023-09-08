
<!DOCTYPE html>

<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="POST" action="process_registration.php">
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Enrollment Number:</label>
        <input type="text" name="enrollment_number" required><br>

        <label>Department:</label>
        <input type="text" name="department" required><br>

        <label>Year of Diploma:</label>
        <input type="number" name="year_of_diploma" required><br>

        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" required><br>

        <label>Contact Number:</label>
        <input type="text" name="contact_number" required><br>

        <label>Address:</label>
        <textarea name="address" required></textarea><br>

        <input type="submit" value="Register">
     

    </form>
</body>
</html>
