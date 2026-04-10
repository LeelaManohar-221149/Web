<?php
session_start();
require_once __DIR__ . '/config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header('Location: login.php?error=missing_fields');
    exit;
}

$user = $userCollection->findOne(['email' => $email]);

if (!$user || !isset($user['password']) || !password_verify($password, $user['password'])) {
    header('Location: login.php?error=invalid_credentials');
    exit;
}

$_SESSION['user_name'] = $user['name'] ?? 'User';
$_SESSION['user_email'] = $user['email'];

header('Location: dashboard.php');
exit;
?>
