<?php
session_start();
require_once('../model/paymentModel.php');

if (isset($_POST['submit'])) {
    $username = $_SESSION['username'] ?? "";
    $eventId = trim($_POST['eventId']);
    $hasError = false;


    if ($eventId == "") {
        echo "Event ID cannot be empty!";
        $hasError = true;
    } 

    else {
        if (hasUserPurchasedEvent($username, $eventId)) {
            $status = getRefundStatus($username, $eventId);
            if ($status !== null) {
                $_SESSION['refund_status'] = ucfirst($status);
            } 
            else {
                $_SESSION['refund_status'] = "No refund request found";
            }
        } 
        else {
            $_SESSION['refund_status'] = "You have not purchased this event";
        }

        header("Location: ../View/Status_Tracker.php");
        exit;
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
