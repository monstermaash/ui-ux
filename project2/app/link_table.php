<?php
// Include your database connection code here
require_once './db_includes/db_connect.php';

// Specify student name and class name
$studentName = "";
$className = "";

// Define SQL query to fetch student and class IDs
$query = "SELECT s.studentID, c.classID
          FROM students s
          JOIN classes c ON s.programID = c.programID
          WHERE s.studentName = ? AND c.className = ?";

if ($stmt = mysqli_prepare($link, $query)) {
    mysqli_stmt_bind_param($stmt, 'ss', $studentName, $className);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $studentID, $classID);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        // Insert the data into the enrollments table
        $insertQuery = "INSERT INTO enrollments (studentID, classID)
                        VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $insertQuery)) {
            // You can specify the grade or other details as needed
            $grade = "";
            mysqli_stmt_bind_param($stmt, 'ss', $studentID, $classID);
            if (mysqli_stmt_execute($stmt)) {
                echo "Enrollment successful!";
            } else {
                echo "Error inserting enrollment: " . mysqli_error($link);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($link);
        }
    } else {
        echo "Error executing query: " . mysqli_error($link);
    }
} else {
    echo "Error preparing statement: " . mysqli_error($link);
}

// Close the database connection
mysqli_close($link);
