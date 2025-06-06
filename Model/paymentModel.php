<?php
require_once('db.php');

date_default_timezone_set('Asia/Dhaka');

function purchasedEligibility($username, $eventId) {
    $con = getConnection();
    $username = mysqli_real_escape_string($con, $username);
    $eventId = mysqli_real_escape_string($con, $eventId);

    $sql = "SELECT * FROM payments WHERE username='$username' AND eventid='$eventId'";
    $result = mysqli_query($con, $sql);

    return mysqli_num_rows($result) > 0;
}


function refundEligibility($eventId) {
    $con = getConnection();
    $eventId = mysqli_real_escape_string($con, $eventId);

    $sql = "SELECT date FROM events WHERE id='$eventId'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $eventDate = $row['date'];

        $today = date('Y-m-d');
        $diff = (strtotime($eventDate) - strtotime($today)) / (60 * 60 * 24);

        return $diff > 7;
    }

    return false;
}



function cancellationRequest($username, $eventId, $reason) {
    $con = getConnection();
    $username = mysqli_real_escape_string($con, $username);
    $eventId = mysqli_real_escape_string($con, $eventId);
    $reason = mysqli_real_escape_string($con, $reason);

    $sql = "UPDATE payments SET refund='pending', reason='$reason' 
            WHERE username='$username' AND eventid='$eventId'";

    $result = mysqli_query($con, $sql);
    return $result;
}

function statusTracker($username, $eventId) {
    $con = getConnection();
    $username = mysqli_real_escape_string($con, $username);
    $eventId = mysqli_real_escape_string($con, $eventId);

    $sql = "SELECT refund FROM payments WHERE username='$username' AND eventid='$eventId'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['refund'];
    }
    return null;
}

function updatePayment($username, $eventId, $seat, $seatType, $ticketType, $amount, $status, $date) {
    $con = getConnection();

    $usernameEsc = mysqli_real_escape_string($con, $username);
    $eventIdEsc = (int)$eventId;
    $seatEsc = mysqli_real_escape_string($con, $seat);
    $seatTypeEsc = mysqli_real_escape_string($con, $seatType);
    $ticketTypeEsc = mysqli_real_escape_string($con, $ticketType);
    $statusEsc = mysqli_real_escape_string($con, $status);
    $dateEsc = mysqli_real_escape_string($con, $date);

    $sql = "INSERT INTO payments 
            (username, eventid, seat, seattype, tickettype, amount, status, date) 
            VALUES
            ('$usernameEsc', $eventIdEsc, '$seatEsc', '$seatTypeEsc', '$ticketTypeEsc', $amount, '$statusEsc', '$dateEsc')";

    return mysqli_query($con, $sql);
}



function getRefundRequests() {
    $con = getConnection();
    $sql = "SELECT username, eventid, amount FROM payments WHERE refund='pending'";
    $result = mysqli_query($con, $sql);

    $refunds = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $refunds[] = $row;
    }

    return $refunds;
}


function updateRefundRequests($username, $eventid, $status) {
    $con = getConnection();
    $username = mysqli_real_escape_string($con, $username);
    $eventid = mysqli_real_escape_string($con, $eventid);
    $status = mysqli_real_escape_string($con, $status);

    $sql = "UPDATE payments SET refund='$status' WHERE username='$username' AND eventid='$eventid'";
    return mysqli_query($con, $sql);
}


?>
