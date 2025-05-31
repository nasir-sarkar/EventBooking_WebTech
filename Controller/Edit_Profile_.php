<?php
session_start();
require_once('../model/userModel.php');
header('Content-Type: application/json');


if (isset($_POST['json'])) {
    $data = json_decode($_POST['json'], true);

    $name = trim($data['name'] ?? '');
    $email = trim($data['email'] ?? '');
    $phone = trim($data['phone'] ?? '');
    $username = $_SESSION['username'] ?? '';
    $hasError = false;
    $response = [];

    if ($name == "") {
        $response['message'] = "Name cannot be empty!";
        $hasError = true;
    } 
    
    else if ($email == "" || strpos($email, "@") === false) {
        $response['message'] = "Enter a valid email!";
        $hasError = true;
    } 
    
    else if ($phone == "" || strlen($phone) < 11) {
        $response['message'] = "Enter a valid phone number!";
        $hasError = true;
    } 
    
    else {
        $updated = editProfile($username, $name, $email, $phone);
        if ($updated) {
            $response['message'] = "Profile updated successfully!";
        } 
        else {
            $response['message'] = "Failed to update profile. Please try again.";
        }
    }

    echo json_encode($response);
} 
else {
    echo json_encode(['message' => 'Invalid request!']);
}
