<?php
require_once('../Model/eventModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
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
        $promoCode = getAvailablePromoCode($sponsor, $discount);

        if ($promoCode === "ALL_TAKEN") {
            echo "<h3 style='color:red;'>All promo codes are taken for this sponsor and discount.</h3>";
        } else if ($promoCode === "NOT_FOUND") {
            echo "<h3 style='color:red;'>No matching event found with this sponsor and discount.</h3>";
        } else {
            echo "<h3>Your Promo Code: <span style='color:green;'>$promoCode</span></h3>";
        }
    }
} else {
    echo "Invalid request! Please submit the form!";
}
?>
