<?php

$ufbid = $_GET['ufbid'];
$afbid = $_GET['afbid'];
$review_text = $_GET['reviewtext'];
$rating = $_GET['rating'];


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

//Getting the reviews
$sql_query = sprintf("INSERT INTO `reviews`(`UCRID`, `AUTHOR_CRID`, `REVIEW`, `UPVOTES`, `DOWNVOTES`, `RATING`, `ANONYMITY`, `FUNNY`) VALUES (%d,%d,%s,0,0,%d,0,0)", $user_crid, $author_crid, $review_text, $rating);
$result = mysqli_query($dbcon,$sql_query);



echo "{'status':'success'}";
mysqli_close($dbcon);

?>