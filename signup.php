<?php
session_start();
require_once 'config/database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name) || empty($email) || empty($password)) {
    die("All fields are required!");
}

$existingUser = $collection->findOne(['email' => $email]);

if ($existingUser) {
    die("Email already exists!");
}

$collection->insertOne([
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
]);

echo "Signup successful!";
?>