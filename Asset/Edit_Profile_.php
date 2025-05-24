<?php
session_start();
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $username = $_SESSION['username'] ?? '';
    $hasError = false;

    if ($name == "") {
        echo "Name cannot be empty!";
        $hasError = true;
    } else if ($email == "" || strpos($email, "@") === false) {
        echo "Enter a valid email!";
        $hasError = true;
    } else if ($phone == "" || strlen($phone) < 11) {
        echo "Enter a valid phone number!";
        $hasError = true;
    } else {
        $updated = updateUserProfile($username, $name, $email, $phone);
        if ($updated) {
            echo "Profile updated successfully!";
        } else {
            echo "Failed to update profile. Please try again.";
        }
    }
} else {
    echo "Invalid request! Please submit form!";
}
?>
