<?php
	
	include "src/facebook.php";
	
	$app_id = "355103704654059";
	$app_secret = "d5583237092ef1fb6f5167494fb5cd39";
	$site_url = "http://ec2-54-68-127-215.us-west-2.compute.amazonaws.com/"

    // Doing the facebook shit

    $facebook = new Facebook(array(
                    appId => $app_id
                    secret => $app_secret));

?>