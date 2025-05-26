<?php
require_once('../model/eventModel.php');

if (isset($_POST['submit'])) {
    $ename = trim($_POST['ename']);
    $edate = trim($_POST['edate']);
    $ecat = trim($_POST['ecat']);
    $hasError = false;


    if ($ename === "") {
        echo "Please enter event name!<br>";
        $hasError = true;
    } 

    else if ($edate === "") {
        echo "Please select a date!<br>";
        $hasError = true;
    } 

    else if ($ecat === "") {
        echo "Please select a category!<br>";
        $hasError = true;
    }


    if (!$hasError) {
        $result = addEvent($ename, $edate, $ecat);
        if ($result) {
            echo "Event created successfully!<br>";
        } 
        else {
            echo "Failed to create event!<br>";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
