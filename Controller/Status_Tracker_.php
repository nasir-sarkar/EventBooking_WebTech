<?php
session_start();
require_once('../model/paymentModel.php');

header('Content-Type: application/json');

if (isset($_POST['json'])) {
    $data = json_decode($_POST['json'], true);

    $username = $_SESSION['username'] ?? "";
    $eventId = trim($data['eventId'] ?? '');
    $response = [];

    if ($eventId == "") {
        $response['message'] = "Event ID cannot be empty!";
    } 
    
    else {
        if (hasUserPurchasedEvent($username, $eventId)) {
            $status = getRefundStatus($username, $eventId);
            if ($status !== null) {
                $response['message'] = ucfirst($status);
            } 
            else {
                $response['message'] = "No refund request found";
            }
        } 
        else {
            $response['message'] = "You have not purchased this event";
        }
    }

    echo json_encode($response);
} 
else {
    echo json_encode(['message' => 'Invalid request!']);
}
