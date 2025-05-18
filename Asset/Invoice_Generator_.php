<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $hasError = false;

    if ($email == "") {
        echo "Email cannot be empty!";
        $hasError = true;
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address!";
        $hasError = true;
    } 
    else {
        echo "Invoice sent successfully!<br>";
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
