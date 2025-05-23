<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $eventid = trim($_POST['eventid']);
    $action = $_POST['submit'];
    $hasError = false;

    if ($username == "") {
        echo "Username cannot be empty!<br>";
        $hasError = true;
    } 
    else if ($eventid == "") {
        echo "Event ID cannot be empty!<br>";
        $hasError = true;
    } 
    else {
        if ($action == "Approve") {
            echo "Refund approved for user: $username on Event ID: $eventid<br>";
        } 
        else if ($action == "Reject") {
            echo "Refund rejected for user: $username on Event ID: $eventid<br>";
        } 
        else {
            echo "Invalid action!<br>";
        }
    }

} else {
    echo "Invalid request! Please submit form!";
}
?>
