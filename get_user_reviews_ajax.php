<?php

$fbid = $_GET['fbid'];

//Database Init
// Create connection
$dbcon=mysqli_connect("localhost","root","root","creepl");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$response  = array();
$user_crid = 0;

//Primary user Query
$sql_query = sprintf("SELECT * FROM user WHERE FBID = '%s';", $fbid);

$result = mysqli_query($dbcon,$sql_query);

while($row = mysqli_fetch_array($result)) {
  $response['prim_user'] = $row;
  $user_crid = $row['CRID'];     
}

//Getting the reviews
$sql_query = sprintf("SELECT * FROM (SELECT * FROM reviews INNER JOIN user WHERE revies.CRID = user.CRID ;) WHERE user.CRID = %i", $user_crid);

$result = mysqli_query($dbcon,$sql_query);

$response['reviews'] = array();

while($row = mysqli_fetch_array($result)) {
  array_push($response['reviews'],$row);
}

echo json_encode($response);
mysqli_close($dbcon);
?>