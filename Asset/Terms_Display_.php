<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $eventDate = trim($_POST['eventDate']);
    $hasError = false;

    if ($eventDate == "") {
        echo "Please select an event date to check refund eligibility.";
        $hasError = true;
    } 
    else {
        echo "Event date submitted. Proceed to Cancellation Request.<br>";
    }

    if (!$hasError) {
        header("Location: ../View/Cancellation_Request.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
