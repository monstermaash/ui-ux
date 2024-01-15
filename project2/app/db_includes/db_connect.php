<!-- connect with db -->
<?php
// Database configuration
$host = "localhost:3306";
$username = "skillforge_user";
$password = "6C8*5c1vy";
$dbname = "skillforge";

$link = mysqli_connect($host, $username, $password, $dbname);

$db_response = [];
$db_response['success'] = 'not set';

if (!$link) {
  $db_response['success'] = false;
} else {
  $db_response['success'] = true;
}
//echo out when live
//echo json_encode($db_response););
