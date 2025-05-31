<?php
require_once('../Model/eventModel.php');

if (isset($_POST['submit'])) {
    $sponsor = trim($_POST['sponsor']);
    $discount = trim($_POST['discount']);
    $hasError = false;


    if ($sponsor == "") {
        echo "Sponsor name cannot be empty!<br>";
        $hasError = true;
    } 

    else if ($discount == "") {
        echo "Discount cannot be empty!<br>";
        $hasError = true;
    } 

    else if (!is_numeric($discount) || $discount <= 0 || $discount > 100) {
        echo "Discount must be between 1 and 100!<br>";
        $hasError = true;
    }


    if (!$hasError) {
        $promoCode = codeGenerator($sponsor, $discount);

        if ($promoCode === "ALL_TAKEN") {
            echo "All promo codes are taken for this sponsor and discount.<br>";
        } 
        else if ($promoCode === "NOT_FOUND") {
            echo "No matching event found with this sponsor and discount.<br>";
        } 
        else {
            echo "Your Promo Code: <span>$promoCode</span>";
        }
    }
} 
else {
    echo "Invalid request! Please submit the form!";
}
?>
