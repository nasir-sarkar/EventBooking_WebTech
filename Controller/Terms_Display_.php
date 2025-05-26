<?php
if (isset($_POST['submit'])) {
    $eventDate = trim($_POST['eventDate']);
    $hasError = false;


    if ($eventDate == "") {
        echo "Please select an event date to check refund eligibility.";
        $hasError = true;
    } 

    else {
        echo "Successful!<br>";
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
