<?php
session_start();
require_once('../model/eventModel.php');

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

        $filteredEvents = getFilteredEvents($view, $category);
        $_SESSION['filteredEvents'] = $filteredEvents;

        header("Location: ../View/Event_Cards.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
