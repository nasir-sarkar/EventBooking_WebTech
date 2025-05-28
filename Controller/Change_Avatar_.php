<?php
session_start();
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $username = $_SESSION['username'] ?? '';
    $hasError = false;

    if (!isset($_FILES['avatar']) || $_FILES['avatar']['error'] != 0) {
        echo "Please select a valid image!";
        $hasError = true;
    } 
    
    else {
        $imageData = file_get_contents($_FILES['avatar']['tmp_name']);
        $imageData = base64_encode($imageData);
        
        $updated = updateUserAvatar($username, $imageData);

        if ($updated) {
            $_SESSION['avatar'] = $imageData;
            echo "Avatar uploaded successfully!";
        } 
        else {
            echo "Failed to upload avatar. Please try again.";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>