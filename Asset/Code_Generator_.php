<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $sponsor = trim($_POST['sponsor']);
    $discount = trim($_POST['discount']);
    $validity = trim($_POST['validity']);
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
    else if ($validity == "") {
        echo "Please select a valid date!<br>";
        $hasError = true;
    }

    if (!$hasError) {
        header("Location: ../View/Abc.php");
        exit;
    }

} else {
    echo "Invalid request! Please submit form!";
}
?>
