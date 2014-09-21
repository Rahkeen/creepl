<?php

$ufbid = $_GET['ufbid'];
$afbid = $_GET['afbid'];
$vote_type = $_GET['vote'];
$vfbid = $_GET['vfbid'];


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

//Checking if first vote for review
$sql_query = sprintf("SELECT COUNT(*) FROM votes WHERE UFBID = '%s' and AFBID = '%s' and VFBID = '%s'",$ufbid, $afbid, $vfbid);
$result = mysqli_query($dbcon,$sql_query);
$count_row = mysqli_fetch_array($result);

if($count_row['COUNT(*)'] == '0'){

//Inserting the votes
$sql_query = sprintf("UPDATE reviews SET %s = %s + 1 WHERE UFBID = '%s' AND AFBID = '%s';", $vote_type, $vote_type, $user_crid, $author_crid);
$result = mysqli_query($dbcon,$sql_query);


//Insert into votes table
$sql_query = sprintf("INSERT INTO `votes`(`UFBID`, `AFBID`, `VFBID`, `VOTETYPE`) VALUES ('%s','%s','%s','%s')", $ufbid, $afbid, $vfbid, $vote_type);
$result = mysqli_query($dbcon,$sql_query);



echo "{'status':'success'}";
}

else {
echo "{'status':'failed', 'reason':'You already voted!'}";
}

mysqli_close($dbcon);

?>