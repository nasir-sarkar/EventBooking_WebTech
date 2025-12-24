<?php
session_start();
require_once('../Model/userModel.php');

$email = trim($_POST['email'] ?? '');
$newPassword = $_POST['newPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';


if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if ($newPassword !== $confirmPassword) {
    die("Passwords do not match.");
}


$user = getUserByEmail($email);

if (!$user) {
    die("Email does not exist.");
}


if ($newPassword === $user['password']) {
    die("New password cannot be the same as the old password.");
}


$status = updatePasswordByEmail($email, $newPassword);

if ($status) {
    echo "Password changed successfully.";
} else {
    echo "Password update failed.";
}
