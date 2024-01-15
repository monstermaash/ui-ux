<?php
// connect to the database - $link
require_once "./db_includes/db_connect.php";

$stmt = mysqli_prepare(
  $link,
  "SELECT classes.programID, classes.className, classes.instructorID, COUNT(enrollments.classID) AS countedEnrolled  
  FROM enrollments
  RIGHT JOIN classes ON classes.classID = enrollments.classID 
  GROUP BY classes.classID, classes.programID 
  ORDER BY countedEnrolled DESC"
);

// execute the statement / query from above
mysqli_stmt_execute($stmt);

// get results
$result = mysqli_stmt_get_result($stmt);

// loop through results
while ($row = mysqli_fetch_assoc($result)) {
  $results[] = $row;
}

// encode and display JSON
echo json_encode($results);

// close the database connection
mysqli_close($link);
