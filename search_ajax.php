<?php

//Get Variables
$query = $_GET['query'];

    
//Database Init
// Create connection
$dbcon=mysqli_connect("localhost","root","root","creepl");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Databse Query
$sql_query = sprintf("SELECT FNAME, LNAME FROM user WHERE FNAME LIKE '%%%s%%' OR LNAME LIKE '%%%s%%';", $query, $query);

$result = mysqli_query($dbcon,$sql_query);

$response  = array();

while($row = mysqli_fetch_array($result)) {
  array_push($response, $row);
}

mysqli_close($dbcon);

echo json_encode($response);
?>
