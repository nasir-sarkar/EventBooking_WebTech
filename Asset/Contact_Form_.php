<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $captcha = trim($_POST['captcha']);
    $hasError = false;

    if ($name == "") {
        echo "Name cannot be empty!<br>";
        $hasError = true;
    } 
    else if ($email == "") {
        echo "Email cannot be empty!<br>";
        $hasError = true;
    } 
    else if (!strpos($email, "@") || !strpos($email, ".")) {
        echo "Enter a valid email!<br>";
        $hasError = true;
    } 
    else if ($message == "") {
        echo "Message cannot be empty!<br>";
        $hasError = true;
    } 
    else if ($captcha !== "7") {
        echo "CAPTCHA answer is incorrect!<br>";
        $hasError = true;
    }

    if (!$hasError) {
        header("Location: ../View/Submission_Confirmation.php");
        exit;
    }
    
} else {
    echo "Invalid request! Please submit form!";
}
?>

