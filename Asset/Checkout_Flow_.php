<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $method = trim($_POST['method']);
    $hasError = false;

    if ($name == "") {
        echo "Full name cannot be empty!";
        $hasError = true;
    } 
    else if ($method == "") {
        echo "Please select a payment method!";
        $hasError = true;
    } 
    else {
        echo "Checkout details submitted successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Saved_Cards.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>

