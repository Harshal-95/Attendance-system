-- Create a new SQLite database named students.db
ATTACH DATABASE "students.db" AS students;

-- Create the students table
CREATE TABLE students.students (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    enrollment_number TEXT NOT NULL UNIQUE,
    name TEXT NOT NULL,
    department TEXT NOT NULL,
    year_of_diploma INTEGER NOT NULL,
    date_of_birth DATE NOT NULL,
    contact_number TEXT NOT NULL,
    address TEXT NOT NULL
);
