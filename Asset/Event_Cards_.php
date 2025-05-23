<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $view = trim($_POST['view']);
    $category = trim($_POST['category']);
    $hasError = false;

    if ($view == "") {
        echo "Please select a view option!";
        $hasError = true;
    } 
    else if ($category == "") {
        echo "Please select a category!";
        $hasError = true;
    } 
    else {
        $_SESSION['view'] = $view;
        $_SESSION['category'] = $category;

        header("Location: ../Controller/filterEvents.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>

