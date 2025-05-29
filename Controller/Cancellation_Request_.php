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
        
        if (!hasUserPurchasedEvent($username, $eventId)) {
            echo "You have not booked this event!<br>";
            $hasError = true;
        }
        else if (!isRefundEligible($eventId)) {
            echo "Refund not available less than 7 days before the event.<br>";
            $hasError = true;
        }
    }


    if (!$hasError) {
        $status = submitCancellationRequest($username, $eventId, $reason);
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