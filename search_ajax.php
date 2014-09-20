<?php

//Get Variables
$user = $_GET['user'];

$query = $_GET['query'];

//Database Init
// Create connection
$dbcon=mysqli_connect("localhost","root","root","creepl");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Databse Query
$result = mysqli_query($con,"SELECT FNAME, LNAME FROM users");

while($row = mysqli_fetch_array($result)) {
  echo $row;
  echo "<br>";
}

mysqli_close($con);

?>
