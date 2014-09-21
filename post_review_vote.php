<?php

$ufbid = $_GET['ufbid'];
$afbid = $_GET['afbid'];
$vote_type = $_GET['vote'];


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
$sql_query = sprintf("SELECT * FROM user WHERE FBID = '%s';", $ufbid);

$result = mysqli_query($dbcon,$sql_query);

while($row = mysqli_fetch_array($result)) {
  $user_crid = $row['CRID'];     
}

//Author CRID ID
$sql_query = sprintf("SELECT * FROM user WHERE FBID = '%s';", $afbid);

$result = mysqli_query($dbcon,$sql_query);

while($row = mysqli_fetch_array($result)) {
  $author_crid = $row['CRID'];     
}

//Inserting the votes
$sql_query = sprintf("UPDATE reviews SET %s = %s + 1 WHERE UCRID = %d AND AUTHOR_CRID = %d ;", $vote_type, $vote_type, $user_crid, $author_crid);
echo $sql_query;
$result = mysqli_query($dbcon,$sql_query);



echo "{'status':'success'}";
mysqli_close($dbcon);

?>