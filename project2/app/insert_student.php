<?php
require_once "./db_includes/db_connect.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Ensure that studentName, program, and class are set in the request
    if (!isset($_REQUEST["studentName"]) || !isset($_REQUEST["program"])) {
        throw new Exception("Required data is missing.");
    }

    // Extract studentName, program from the request
    $studentName = $_REQUEST["studentName"];
    $program = $_REQUEST["program"];

    // Debugging: Add these lines to check if the script is executing
    // echo "Student Name: " . $studentName . "<br>";
    // echo "Program: " . $program . "<br>";

    // Check if the student already exists
    $stmt = mysqli_prepare($link, "SELECT studentID FROM students WHERE studentName = ?");
    mysqli_stmt_bind_param($stmt, "s", $studentName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Student already exists, no need to insert again
        $studentID = $row["studentID"];
    } else {
        // Insert the new student
        $stmt = mysqli_prepare($link, "INSERT INTO students (studentName, programID) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "si", $studentName, $program);
        mysqli_stmt_execute($stmt);
        $studentID = mysqli_insert_id($link);
    }

    $programID = $_REQUEST["program"];
    $classNames = [];

    if ($programID === "1") {
        $classNames = [
            "Web Interface Programming",
            "Website Creation & Design",
            "Digital Media Processing",
            "Applied UX/UI Design",
            "Dynamic Web Programming"
        ];
    } elseif ($programID === "2") {
        $classNames = [
            "Web Development Environment",
            "Advanced Web Programming",
            "Content Management System"
        ];
    } elseif ($programID === "3") {
        $classNames = [
            "Web Interface Programming",
            "Website Creation & Design",
            "Digital Media Processing",
            "Applied UX/UI Design",
            "Dynamic Web Programming",
            "Web Development Environment",
            "Advanced Web Programming",
            "Content Management System"
        ];
    } else {
        throw new Exception("Invalid program selected.");
    }

    // Initialize an array to store class IDs
    $classIDs = [];

    // Insert or retrieve class IDs for each class name
    foreach ($classNames as $className) {
        $stmt = mysqli_prepare($link, "SELECT classID FROM classes WHERE className = ? AND programID = ?");
        mysqli_stmt_bind_param($stmt, "si", $className, $programID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Class already exists, use its classID
            $classIDs[] = $row["classID"];
        } else {
            // Class doesn't exist, insert a new class and get its classID
            $stmt = mysqli_prepare($link, "INSERT INTO classes (className, instructorID, programID) VALUES (?, '', ?)");
            mysqli_stmt_bind_param($stmt, "si", $className, $programID);
            mysqli_stmt_execute($stmt);
            $classIDs[] = mysqli_insert_id($link);
        }
    }

    header('Content-Type: application/json');

    // Insert enrollments for each class
    foreach ($classIDs as $classID) {
        $stmt = mysqli_prepare($link, "INSERT INTO enrollments (studentID, classID) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ii", $studentID, $classID);
        mysqli_stmt_execute($stmt);
    }

    // Check if the enrollment already exists
    $stmt = mysqli_prepare($link, "SELECT enrollmentID FROM enrollments WHERE studentID = ? AND classID = ?");
    mysqli_stmt_bind_param($stmt, "ii", $studentID, $classID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Enrollment already exists, no need to insert again
        $enrollmentID = $row["enrollmentID"];
        // echo json_encode(["success" => true, "studentID" => $studentID, "classID" => $classID]);
    } else {
        // Error inserting enrollment
        echo json_encode(["error" => "Error inserting enrollment."]);
    }

    // Respond with a success message
    echo json_encode(["success" => true, "message" => "Student registration and enrollment successful"]);
} catch (Exception $e) {
    // Handle errors and respond with an error message
    echo json_encode(["error" => $e->getMessage()]);
}
