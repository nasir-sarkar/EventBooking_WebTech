<?php
session_start();
require_once('../model/paymentModel.php');

if (isset($_POST['submit'])) {
    $username = $_SESSION['username'];
    $eventId = trim($_POST['eventId']);
    $reason = trim($_POST['reason']);
    $hasError = false;

    
    if ($eventId == "") {
        echo "Event ID cannot be empty!<br>";
        $hasError = true;
    }

    if ($reason == "") {
        echo "Reason cannot be empty!<br>";
        $hasError = true;
    }


    if (!$hasError) {
        
        if (!purchasedEligibility($username, $eventId)) {
            echo "You have not booked this event!<br>";
            $hasError = true;
        }
        else if (!refundEligibility($eventId)) {
            echo "Refund not available if the event is less than 7 days away.<br>";
            $hasError = true;
        }
    }


    if (!$hasError) {
        $status = cancellationRequest($username, $eventId, $reason);
        if ($status) {
            echo "Refund requested.";
            exit;
        } 
        else {
            echo "Failed to submit cancellation request. Please try again.";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>