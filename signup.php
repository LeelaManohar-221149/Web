<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['mail'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_pwd = $_POST['confirm_password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // Server-side validation
    if (empty($username) || empty($email) || empty($password) || empty($gender) || empty($phone)) {
        die("All fields are required!");
    }
    
    if ($password !== $confirm_pwd) {
        die("Passwords do not match!");
    }

    // Check existing email
    $existingUser = $userCollection->findOne(['email' => $email]);
    if ($existingUser) {
        die("Email already exists!");
    }

    // Handle file upload (ID proof) safely
    $uploadPath = null;
    if (isset($_FILES['upload_proof']) && $_FILES['upload_proof']['error'] === UPLOAD_ERR_OK) {
        // Ensure uploads directory exists
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        // Simple security: Rename file randomly to avoid overwrites and execution
        $fileExt = pathinfo($_FILES['upload_proof']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid('proof_') . '.' . $fileExt;
        $targetFile = $uploadDir . $fileName;
        
        if (move_uploaded_file($_FILES['upload_proof']['tmp_name'], $targetFile)) {
            $uploadPath = 'uploads/' . $fileName;
        }
    }

    // Insert to MongoDB
    $insertResult = $userCollection->insertOne([
        'name' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'gender' => $gender,
        'phone' => $phone,
        'id_proof_path' => $uploadPath,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ]);

    if ($insertResult->getInsertedCount() === 1) {
        // Redirect to login upon success
        header("Location: login.php?msg=registered");
        exit();
    } else {
        die("Failed to register. Please try again.");
    }
}
?>