<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $setting = trim($_POST['setting']);
    $adminpass = trim($_POST['adminpass']);
    $hasError = false;

    if ($setting === "") {
        echo "Please select a system setting!";
        $hasError = true;
    } 
    elseif ($adminpass === "") {
        echo "Please enter the admin password!";
        $hasError = true;
    } 
    else {
        echo "Setting applied successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/System_Settings.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
