<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $old = trim($_POST['old']);
    $new = trim($_POST['new']);
    $confirm = trim($_POST['confirm']);
    $hasError = false;

    if ($old == "") {
        echo "Old password is required!";
        $hasError = true;
    } 
    else if (strlen($new) < 6) {
        echo "Password must be at least 6 characters!";
        $hasError = true;
    } 
    else if ($confirm !== $new) {
        echo "Passwords do not match!";
        $hasError = true;
    } 
    else {
        echo "Password updated successfully!<br>";
    }

} 
else {
    echo "Invalid request! Please submit form!";
}
?>
