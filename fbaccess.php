<?php
    session_start();

    require_once __DIR__ . "/facebook-php-sdk-v4-4.0-dev/autoload.php"; 

    use Facebook\FacebookSession;
    use Facebook\FacebookRedirectLoginHelper;
    use Facebook\FacebookRequest;
    use Facebook\FacebookResponse;
    use Facebook\FacebookSDKException;
    use Facebook\FacebookRequestException;
    use Facebook\FacebookAuthorizationException;
    use Facebook\GraphObject;
    use Facebook\GraphUser;
    use Facebook\GraphSessionInfo;
	
	$app_id = '355103704654059';
	$app_secret = 'd5583237092ef1fb6f5167494fb5cd39';
    $required_scope = 'public_profile, user_photos, user_friends';
    $site_url = 'http://localhost:8080/creepl/';
	//$site_url = 'http://ec2-54-68-127-215.us-west-2.compute.amazonaws.com/';

    // creating facebook session instance

    FacebookSession::setDefaultApplication($app_id, $app_secret);

    $helper = new FacebookRedirectLoginHelper($site_url);
    
    try {
	   $session = $helper->getSessionFromRedirect();
    } catch (FacebookRequestException $e) {
	   error_log($e);
    } catch (Exception $e) {
	   error_log($e);
    }
    
    // remembers session tokens so you don't need to log in every time (until it expires)

    if(isset($_SESSION['token'])) {
	   $session = new FacebookSession($_SESSION['token']);

       try {
            $session->validate($app_id, $app_secret);
       } catch (FacebookAuthorizationException $e) {
            $session = '';
       }
    }

    // stores token if session is not null

    if(isset($session)) {
	    $_SESSION['token'] = $session->getToken();
        $request = new FacebookRequest($session, 'GET', '/me');
        $response = $request->execute();
        $user_info = $response->getGraphObject(GraphUser::className());

        echo 'Welcome ' . $graph_object->getName();
    } else {
        echo '<a href = ' . $helper->getLoginUrl() . '>Login to Facebook</a>';
    }
     
?>