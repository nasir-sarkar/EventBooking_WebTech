<?php

if (isset($_POST['code'])) {
    $code = trim($_POST['code']);

    if ($code == "") {
        echo "Promo code cannot be empty!";
    } else if (strlen($code) != 5) {
        echo "Promo code must be exactly 5 characters!";
    } else {
        echo "Analytics data shown successfully!";
    }
} else {
    echo "Invalid request! Please submit form!";
}

?>
