<!-- Handles user registration, authentication, and profile updates. -->

<?php
require_once "./db_includes/db_connect.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
  // Check if either program or studentName is present
  if (isset($_POST["program"])) {
    // Data from choose-program.html
    $programID = $_POST["program"];
    $studentName = $_POST["studentName"] ?? null;
    $email = $_POST["email"] ?? null;
    $password = $_POST["password"] ?? null;

    // Rest of your code for handling program selection and enrollment
  } elseif (isset($_POST["studentName"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    // Data from register.html
    $studentName = $_POST["studentName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $programID = $_POST["program"] ?? null; // Assuming programID is passed from choose-program.html

    // Check if the student already exists
    $stmt = mysqli_prepare($link, "SELECT studentID FROM students WHERE studentName = ?");
    mysqli_stmt_bind_param($stmt, "s", $studentName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
      $studentID = $row["studentID"];
    } else {
      // Insert the student into the students table
      $stmt = mysqli_prepare($link, "INSERT INTO students (studentName, email, password, programID) VALUES (?, ?, ?, ?)");
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
      mysqli_stmt_bind_param($stmt, "sssi", $studentName, $email, $hashedPassword, $programID);
      mysqli_stmt_execute($stmt);
      $studentID = mysqli_insert_id($link);
    }

    $programID = $_REQUEST["program"];
    $classNames = [];

    // Adjust class names based on the programID as needed
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

    $classIDs = [];

    foreach ($classNames as $className) {
      $stmt = mysqli_prepare($link, "SELECT classID FROM classes WHERE className = ? AND programID = ?");
      mysqli_stmt_bind_param($stmt, "si", $className, $programID);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $classIDs[] = $row["classID"];
      } else {
        $stmt = mysqli_prepare($link, "INSERT INTO classes (className, instructorID, programID) VALUES (?, '', ?)");
        mysqli_stmt_bind_param($stmt, "si", $className, $programID);
        mysqli_stmt_execute($stmt);
        $classIDs[] = mysqli_insert_id($link);
      }
    }

    // Include programID in the JSON response
    $response = [
      "success" => true,
      "message" => "Student registration and enrollment successful",
      "programID" => $programID,
      "studentName" => $studentName,
      "email" => $email
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
  } else {
    throw new Exception("Required data is missing.");
  }
} catch (Exception $e) {
  echo json_encode(["error" => $e->getMessage()]);
}

mysqli_close($link);
?>