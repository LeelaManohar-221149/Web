<?php
session_start();
require_once 'config/database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = $collection->findOne(['email' => $email]);

if (!$user || !password_verify($password, $user['password'])) {
    die("Invalid Email or Password!");
}

$_SESSION['user_name'] = $user['name'];
$_SESSION['user_email'] = $user['email'];

header("Location: index.php");
exit;
?>