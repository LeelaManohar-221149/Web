<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $donor_name = $_POST['donor_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $reason = $_POST['reason'] ?? '';
    $amount = $_POST['amount'] ?? 0;
    $payment_mode = $_POST['payment_mode'] ?? '';
    $comments = $_POST['comments'] ?? '';

    // Validate essential donation fields
    if (empty($donor_name) || empty($email) || empty($amount) || empty($payment_mode)) {
        die("Please fill out all required donation fields.");
    }

    // Connect user account to donation if logged in
    $associated_user_email = $_SESSION['user_email'] ?? null;

    // Securely pack and push into MongoDB
    $insertResult = $donationCollection->insertOne([
        'donor_name' => $donor_name,
        'email' => $email,
        'phone' => $phone,
        'reason' => $reason,
        'amount' => (float)$amount,
        'payment_mode' => $payment_mode,
        'comments' => $comments,
        'associated_account' => $associated_user_email,
        'donated_at' => new MongoDB\BSON\UTCDateTime(),
        'status' => 'Completed'
    ]);

    if ($insertResult->getInsertedCount() === 1) {
        // Successful donation! If logged in, go back to dashboard. Else homepage.
        if (isset($_SESSION['user_email'])) {
            header("Location: dashboard.php?msg=donation_success");
        } else {
            header("Location: index.php?msg=donation_success");
        }
        exit();
    } else {
        die("We couldn't process your donation to the database. Please try again.");
    }
}
?>
