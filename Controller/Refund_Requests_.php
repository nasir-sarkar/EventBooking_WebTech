<?php
session_start();
require_once('../Model/paymentModel.php');

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $eventid = trim($_POST['eventid']);
    $action = $_POST['submit'];
    $hasError = false;


    if ($username == "") {
        echo "Username cannot be empty!";
        $hasError = true;
    } 

    else if ($eventid == "") {
        echo "Event ID cannot be empty!";
        $hasError = true;
    } 

    else {
        if ($action == "Approve") {

            $status = refundRequests($username, $eventid, 'approved');
            if ($status) {
                header("Location: ../View/Refund_Requests.php");
                exit;
            } 
            else {
                echo "Failed to approve refund!";
            }
        } 
        else if ($action == "Reject") {
            $status = refundRequests($username, $eventid, 'rejected');
            if ($status) {
                header("Location: ../View/Refund_Requests.php");
                exit;
            } 
            else {
                echo "Failed to reject refund!";
            }
        } 
        else {
            echo "Invalid action!";
        }
    }
} 
else {
    echo "Invalid request! Please submit form!";
}
?>
