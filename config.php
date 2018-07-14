<?php

    require_once "Facebook/autoload.php";
    $fb = new \Facebook\Facebook([
        'app_id' => 'appid',
        'app_secret' => 'appsecret',
        'default_graph_version' => 'v2.10',
        //'default_access_token' => '{access-token}', // optional
    ]);
    $helper = $fb->getRedirectLoginHelper();
    if (isset($_GET['state'])) {
        $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    }


?>

