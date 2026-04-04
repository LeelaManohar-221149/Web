<?php
session_start();

// Include Composer autoloader for Google Client if not already loaded elsewhere
require_once __DIR__ . '/vendor/autoload.php';

require_once 'google-config.php';
require_once 'config/database.php'; // Gives us access to $userCollection

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    
    // Check if there was an error fetching the token
    if (isset($token['error'])) {
        die("Google OAuth Error: " . $token['error_description']);
    }

    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $google_user = $oauth->userinfo->get();
    $google_email = $google_user->email;

    // Check if this Google email exists in our MongoDB users collection
    $existingUser = $userCollection->findOne(['email' => $google_email]);

    if ($existingUser) {
        // User exists in db! Allow login.
        // We use the database name instead of the google name, or stick to google name
        $_SESSION['user_name'] = $existingUser['name'] ?? $google_user->name;
        $_SESSION['user_email'] = $google_email;

        header('Location: dashboard.php'); 
        exit();
    } else {
        // Email not found in our database! Deny login.
        // You could redirect back to login.php with an error message
        header('Location: login.php?error=not_registered');
        exit();
    }
} else {
    // If someone visits the callback page directly without Google OAuth
    header('Location: login.php');
    exit();
}
?>
