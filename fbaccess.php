<?php
	
	require "src/facebook.php";
	
	$app_id = "355103704654059";
	$app_secret = "d5583237092ef1fb6f5167494fb5cd39";
	$site_url = "http://ec2-54-68-127-215.us-west-2.compute.amazonaws.com/";

    // creating our facebook instance

    $facebook = new Facebook(array(
                    appId => $app_id
                    secret => $app_secret));

    $user = $facebook->getUser();
    
    if($user) {
        try {
            $user_profile = facebook->api('/me');
            $fb_id = $user_profile['id'];
            $fb_name = $user_profile['name'];

            // Session Variables 

            $_SESSION['FBID'] = $fb_id;
            $_SESSION['NAME'] = $fb_name;

        } catch(FacebookApiException $e) {
            error_log($e);
            $user = NULL;
        }
    }


   /* if($user) {
        
        $requests = array(
		array('method' => 'GET', 'relative_url' => '/'.$user),
		array('method' => 'GET', 'relative_url' => '/'.$user.'/friends'),
		array('method' => 'GET', 'relative_url' => '/'.$user.'/photos?limit=6'),
		);
    }

    try {
        $batch_response = facebook->api('?batch='.json_encode($requests), 'POST');
    } catch (Exception $e) {
        error_log($e);
    } */


    if($user) {
        header("Location: index.php");
    } else {
        $login_url = facebook->getLoginUrl(array(
                        'scope' => 'email, user_photos'));
        header('Location: '.$login_url);
    }
     
?>