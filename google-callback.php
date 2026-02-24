<?php
require_once 'google-config.php';

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $user = $oauth->userinfo->get();

    $_SESSION['user_name'] = $user->name;
    $_SESSION['user_email'] = $user->email;

    header('Location:index.php'); // change if needed
    exit();
}
?>
