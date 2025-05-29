<?php
session_start();
require_once('../Model/eventModel.php');

if (isset($_POST['submit'])) {
    $promo = trim($_POST['promo']);
    $hasError = false;

    if ($promo == "") {
        echo "Promo code cannot be empty!";
        $hasError = true;
    } 
    else if (strlen($promo) != 5) {
        echo "Promo code must be exactly 5 characters!";
        $hasError = true;
    } 
    else {
        $result = discountEntry($promo);
        $status = $result['status'];
        $discount = $result['discount'];

        if ($status === 'used') {
            echo "Promo code has already been used!";
            $hasError = true;
        } 
        else if ($status === 'taken') {
            $_SESSION['temp_promo'] = $promo;
            $_SESSION['temp_discount'] = $discount;
        } 

    }

    if (!$hasError) {
        header("Location: ../Controller/passInfo.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit the form properly.";
}
?>
