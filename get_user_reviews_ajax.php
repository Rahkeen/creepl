<?php

$fbid = $_GET['ufbid'];

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
$sql_query = sprintf("SELECT * FROM (SELECT * FROM reviews INNER JOIN user ON reviews.UCRID = user.CRID) tab  WHERE CRID = %d;", $user_crid);
$result = mysqli_query($dbcon,$sql_query);

$response['reviews'] = array();

while($row = mysqli_fetch_array($result)) {
    
  $sql_q2 = sprintf("SELECT * FROM user WHERE CRID = %d;", $row['AUTHOR_CRID']);
  $result2 = mysqli_query($dbcon,$sql_q2);
  $row2 = mysqli_fetch_array($result2);
  $row['AFBID'] = $row2['FBID'];
  array_push($response['reviews'], $row);
}

echo json_encode($response);
mysqli_close($dbcon);

?>