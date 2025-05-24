<?php
require_once('../model/eventModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $code = trim($_POST['code']);
    $hasError = false;

    if ($code == "") {
        echo "Promo code cannot be empty!";
        $hasError = true;
    } 
    else if (strlen($code) != 5) {
        echo "Promo code must be exactly 5 characters!";
        $hasError = true;
    } 
    else {
        $discount = getDiscountByPromoCode($code);
        if ($discount !== false) {
            echo "Promo code: <b>$code</b><br>";
            echo "Associated discount: <b>$discount%</b>";
        } else {
            echo "Promo code not found!";
        }
    }

} else {
    echo "Invalid request! Please submit form!";
}
?>
