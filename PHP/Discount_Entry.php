<?php

if (isset($_POST['promo'])) {
    $promo = trim($_POST['promo']);

    if ($promo == "") {
        echo "Promo code cannot be empty!";
    } else if (strlen($promo) != 5) {
        echo "Promo code must be exactly 5 characters!";
    } else {
        echo "Promo code applied successfully!";
    }
} else {
    echo "Invalid request! Please submit form!";
}

?>
