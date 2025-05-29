<?php
require_once('../model/eventModel.php');

if (isset($_POST['submit'])) {
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
        $result = discountEntry($code);

        if ($result['status'] === 'used') {
            echo "Promo code <b>$code</b> has already been used.<br>";
            echo "Discount was: <b>" . $result['discount'] . "%</b>";
        } 
        else if ($result['status'] === 'taken') {
            echo "Promo code <b>$code</b>";
            echo "Discount is: <b>" . $result['discount'] . "%</b>";
        } 
        else if ($result['status'] === 'invalid') {
            echo "Promo code not found or invalid!";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}

?>
