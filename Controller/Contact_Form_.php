<?php
session_start();
require_once('../model/contactModel.php');

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $hasError = false;


    if (!isset($_SESSION['name']) || $name !== $_SESSION['name']) {
        echo "Wrong full name detected!<br>";
        $hasError = true;
    } 

    else if ($email == "") {
        echo "Email cannot be empty!<br>";
        $hasError = true;
    } 

    else if (!strpos($email, "@") || !strpos($email, ".")) {
        echo "Enter a valid email!<br>";
        $hasError = true;
    } 

    else if ($message == "") {
        echo "Message cannot be empty!<br>";
        $hasError = true;
    } 


    if (!$hasError) {
        $status = contactForm($name, $email, $message);
        if ($status) {
            header("Location: ../View/Submission_Confirmation.php");
            exit;
        } 
        else {
            echo "Failed to save inquiry. Please try again.";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>