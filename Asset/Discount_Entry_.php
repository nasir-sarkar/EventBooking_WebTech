<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
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
        echo "Promo code applied successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Checkout_Flow.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
