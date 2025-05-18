<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $view = trim($_POST['view']);
    $category = trim($_POST['category']);
    $dateFrom = trim($_POST['dateFrom']);
    $dateTo = trim($_POST['dateTo']);
    $hasError = false;

    if ($view == "") {
        echo "Please select a view option!";
        $hasError = true;
    } 
    else if ($category == "") {
        echo "Please select a category!";
        $hasError = true;
    } 
    else if ($dateFrom == "") {
        echo "Please select a starting date!";
        $hasError = true;
    } 
    else if ($dateTo == "") {
        echo "Please select an end date!";
        $hasError = true;
    } 
    else {
        echo "Filters applied successfully!<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Abc.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
