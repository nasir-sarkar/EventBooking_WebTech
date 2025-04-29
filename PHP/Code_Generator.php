<?php

if (isset($_POST['submit'])) {
    $sponsor = trim($_POST['sponsor']);
    $discount = trim($_POST['discount']);
    $validity = trim($_POST['validity']);

    if ($sponsor == "") {
        echo "Sponsor name cannot be empty!";
    } else if ($discount == "") {
        echo "Discount cannot be empty!";
    } else if (!is_numeric($discount) || $discount <= 0 || $discount > 100) {
        echo "Discount must be between 1 and 100!";
    } else if ($validity == "") {
        echo "Please select a valid date!";
    } else {
        echo "Promo code generated successfully!";
    }
} else {
    echo "Invalid request! Please submit form!";
}

?>
