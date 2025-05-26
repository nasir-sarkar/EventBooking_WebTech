<?php
session_start();
require_once('../Model/eventModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $promo = trim($_POST['promo']);
    $hasError = false;

    if ($promo == "") {
        echo "Promo code cannot be empty!";
        $hasError = true;
    } else if (strlen($promo) != 5) {
        echo "Promo code must be exactly 5 characters!";
        $hasError = true;
    } else {
        $discount = getDiscountByPromoCode($promo);
        if ($discount === false) {
            echo "Invalid promo code!";
            $hasError = true;
        } else {
            $_SESSION['temp_promo'] = $promo;
            $_SESSION['temp_discount'] = $discount;
        }
    }

    if (!$hasError) {
        header("Location: ../Controller/passInfo.php");
        exit;
    }
} else {
    echo "Invalid request! Please submit the form properly.";
}
