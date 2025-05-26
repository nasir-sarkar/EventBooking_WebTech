<?php
require_once('../model/eventModel.php');

if (isset($_POST['submit'])) {
    $eventid = trim($_POST['eventid']);


    if ($eventid === "") {
        echo "Please enter event ID!<br>";
    } 

    else {
        $deleted = deleteEventById($eventid);
        if ($deleted) {
            echo "Event deleted successfully.<br>";
        } 
        else {
            echo "Event not found or could not be deleted.<br>";
        }
    }

} 
else {
    echo "Invalid request! Please submit the form.";
}
?>
