<?php
//connect to db - $link
require_once "./db_includes/db_connect.php";

//prepare the statement passing the db $link and the SQL
/* ADDED "'ORDER BY' timestamp DESC" at the end of the query for reverse, chronological order */
$query = "SELECT 
  classes.className,
  classes.instructorID,
  GROUP_CONCAT(
      FROM classes 
      JOIN enrollments ON enrollments.classID = classes.className
      GROUP BY classes.className, classes.instructorID";


$stmt = mysqli_prepare($link, $query);

//execute the statement / query from abobe
mysqli_stmt_execute($stmt);

//get results
$result = mysqli_stmt_get_result($stmt);

//loop through
while ($row = mysqli_fetch_assoc($result)) {
  $row['className'] = json_decode('[' . $row['className'] . ']');
  $results[] = $row;
}

//encode & display json
echo json_encode($results);

//close the link to the db
mysqli_close($link);
