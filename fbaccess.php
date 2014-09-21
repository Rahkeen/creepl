<?php

    require_once("Facebook/FacebookSession.php");
    require_once("Facebook/FacebookRedirectLoginHelper.php");
    require_once("Facebook/FacebookRequest.php");
    require_once("Facebook/FacebookResponse.php");
    require_once("Facebook/FacebookSDKException.php");
    require_once("Facebook/FacebookRequestException.php");
    require_once("Facebook/FacebookAuthorizationException.php");
    require_once("Facebook/GraphObject.php");
    require_once("Facebook/GraphUser.php");
    require_once("Facebook/GraphSessionInfo.php");

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
    // $site_url = 'http://localhost:8080/creepl/';
	$site_url = 'http://ec2-54-68-127-215.us-west-2.compute.amazonaws.com/';

    // creating our facebook instance
    session_start();
    FacebookSession::setDefaultApplication($app_id, $app_secret);

    $helper = new FacebookRedirectLoginHelper($site_url . 'fbaccess.php');
    $fblogin_url = $helper->getLoginUrl(array('user_photos'));


    try {
        $session = $helper->getSessionFromRedirect();
    } catch(FacebookRequestException $e) {
        error_log($e);
    } catch(Exception $e) {
        error_log($e);
    }

    if(isset($session)) {
        $request = new FacebookRequest($session, 'GET', '/me');
        $response = $request->execute();
        $graph_object = $response->getGraphObject();

        var_dump($graph_object);
    } else {
        header('Location: ' . $fblogin_url);
    }
     
?>