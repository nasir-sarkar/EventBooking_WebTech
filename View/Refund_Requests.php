<?php
session_start();

if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../Model/paymentModel.php');
$refunds = getRefundRequests();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refund Requests</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>REFUND REQUESTS</b></legend>
    <form method="post" action="../Controller/Refund_Requests_.php" onsubmit="return validate()">

        <?php foreach ($refunds as $refund): ?>

            <p><b>Username: <?= htmlspecialchars($refund['username']) ?> </b></p>
            <p>Event ID: <?= htmlspecialchars($refund['eventid']) ?> </p>
            <p>Amount: <?= htmlspecialchars($refund['amount']) ?>TK</p>
            <hr>
            
        <?php endforeach; ?>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <p id="usernameerror"></p>

        <label for="eventid">Event ID:</label><br>
        <input type="text" id="eventid" name="eventid"><br>
        <p id="eventiderror"></p>

        <input type="submit" name="submit" value="Approve">
        <input type="submit" name="submit" value="Reject">
        <a href="Content_Moderation.php"><input type="button" value="Back"></a>

    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Refund_Requests.css">
    <script src="../Asset/Refund_Requests.js"></script>
</body>
</html>
