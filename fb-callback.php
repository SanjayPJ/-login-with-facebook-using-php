<?php

    require_once "config.php";
    try{
        $accessToken = $helper->getAccessToken();
    }catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    $oAuth2Client = $fb->getOAuth2Client();
    if($accessToken->isLongLived()){
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    }
    $response = $fb->get("/me?fields=id,name,email",$accessToken);
    $user_data = $response->getGraphNode()->asArray();

    echo "<pre>";

    var_dump($user_data);


?>