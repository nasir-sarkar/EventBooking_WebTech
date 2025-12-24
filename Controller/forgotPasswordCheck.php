<?php
session_start();
require_once('../Model/userModel.php');

$email = trim($_POST['email'] ?? '');
$newPassword = $_POST['newPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

// Basic validation
if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if ($newPassword !== $confirmPassword) {
    die("Passwords do not match.");
}

// Check if user exists
$user = getUserByEmail($email);

if (!$user) {
    die("Email does not exist.");
}

// Prevent using the same password again
if ($newPassword === $user['password']) {
    die("New password cannot be the same as the old password.");
}

// Update password
$status = updatePasswordByEmail($email, $newPassword);

if ($status) {
    echo "Password changed successfully.";
} else {
    echo "Password update failed.";
}
