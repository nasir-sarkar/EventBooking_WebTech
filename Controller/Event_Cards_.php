<?php
session_start();
require_once('../model/eventModel.php');


if (isset($_POST['submit'])) {
    $view = trim($_POST['view']);
    $category = trim($_POST['category']);
    $hasError = false;

    if ($view == "") {
        echo "Please select a view option!";
        $hasError = true;
    } 
    
    elseif ($category == "") {
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

elseif (isset($_POST['book_now'])) {

    $event_date = strtotime($_POST['event_date']);
    $today = strtotime(date('Y-m-d'));

    if ($event_date < $today) {
        echo "Event date has already passed!";
        exit;
    }
    else {
        $_SESSION['event_id'] = $_POST['event_id'];
        $_SESSION['event_name'] = $_POST['event_name'];
        $_SESSION['event_date'] = $_POST['event_date'];
        $_SESSION['sponsor'] = $_POST['sponsor'] ?? '';
        $_SESSION['discount'] = $_POST['discount'] ?? '';

        header("Location: ../View/Seat_Zoom.php"); 
        exit;
    }
}


else {
    echo "Invalid request! Please submit form!";
}
?>
