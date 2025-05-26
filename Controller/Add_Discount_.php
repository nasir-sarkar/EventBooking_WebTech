<?php
require_once('../model/eventModel.php');

if (isset($_POST['submit'])) 
{
    $eventid = trim($_POST['eventid']);
    $sponsor = trim($_POST['sponsor']);
    $discount = trim($_POST['discount']);
    $promo1 = trim($_POST['promo1']);
    $promo2 = trim($_POST['promo2']);
    $promo3 = trim($_POST['promo3']);
    $promo4 = trim($_POST['promo4']);
    $promo5 = trim($_POST['promo5']);
    $hasError = false;

    if ($eventid === "") {
        echo "Please select an event ID!<br>";
        $hasError = true;
    } 

    else if ($sponsor === "") {
        echo "Please enter sponsor name!<br>";
        $hasError = true;
    } 

    else if ($discount === "") {
        echo "Please enter discount!<br>";
        $hasError = true;
    } 

    else if (!is_numeric($discount) || $discount < 0 || $discount > 100) {
        echo "Discount must be a number between 0 and 100!<br>";
        $hasError = true;
    } 

    else if ($promo1 === "") {
        echo "Promo Code 1 is required!<br>";
        $hasError = true;
    }

    else if (!ctype_digit($promo1) || strlen($promo1) !== 5) {
        echo "Promo Code 1 must be exactly 5 digits!<br>";
        $hasError = true;
    }

    else if ($promo2 === "") {
        echo "Promo Code 2 is required!<br>";
        $hasError = true;
    }

    else if (!ctype_digit($promo2) || strlen($promo2) !== 5) {
        echo "Promo Code 2 must be exactly 5 digits!<br>";
        $hasError = true;
    }

    else if ($promo3 === "") {
        echo "Promo Code 3 is required!<br>";
        $hasError = true;
    }

    else if (!ctype_digit($promo3) || strlen($promo3) !== 5) {
        echo "Promo Code 3 must be exactly 5 digits!<br>";
        $hasError = true;
    }

    else if ($promo4 === "") {
        echo "Promo Code 4 is required!<br>";
        $hasError = true;
    }

    else if (!ctype_digit($promo4) || strlen($promo4) !== 5) {
        echo "Promo Code 4 must be exactly 5 digits!<br>";
        $hasError = true;
    }

    else if ($promo5 === "") {
        echo "Promo Code 5 is required!<br>";
        $hasError = true;
    }

    else if (!ctype_digit($promo5) || strlen($promo5) !== 5) {
        echo "Promo Code 5 must be exactly 5 digits!<br>";
        $hasError = true;
    }


    if (!$hasError) {
        $result = addDiscountToEvent($eventid, $sponsor, $discount, $promo1, $promo2, $promo3, $promo4, $promo5);
        if ($result) {
            echo "Discount added successfully!<br>";
        } 
        else {
            echo "Failed to add discount!<br>";
        }
    }
    
} 
else {
    echo "Invalid request! Please submit form!";  
}
?>
