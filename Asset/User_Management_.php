<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $filter = trim($_POST['filter']);
    $hasError = false;

    if ($filter == "") {
        echo "Please select a role!";
        $hasError = true;
    } 
    else {
        $_SESSION['role'] = $filter;

        header("Location: ../Controller/filterUsers.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
