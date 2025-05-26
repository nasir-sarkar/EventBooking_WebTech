<?php
session_start();
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $old = trim($_POST['old']);
    $new = trim($_POST['new']);
    $confirm = trim($_POST['confirm']);
    $username = $_SESSION['username'] ?? '';
    $hasError = false;


    if ($old == "" || $new == "" || $confirm == "") {
        echo "All fields are required!";
        $hasError = true;
    } 
    
    else if (strlen($new) < 6) {
        echo "Password must be at least 6 characters!";
        $hasError = true;
    } 
    
    else if ($confirm !== $new) {
        echo "Passwords do not match!";
        $hasError = true;
    } 
    
    else {
        $storedPassword = getPasswordByUsername($username);

        if ($storedPassword !== $old) {
            echo "Old password is incorrect!";
            $hasError = true;
        } 
        else {
            $updated = updatePassword($username, $new);
            if ($updated) {
                echo "Password updated successfully!";
            } 
            else {
                echo "Failed to update password. Please try again.";
            }
        }
    }
} 
else {
    echo "Invalid request!";
}
?>
