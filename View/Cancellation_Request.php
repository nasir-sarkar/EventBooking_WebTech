<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancellation Request</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>CANCELLATION REQUEST</b></legend>
         <form method="post" action="../Asset/Cancellation_Request_.php" onsubmit="return validate()">
            <label for="bookingId">Booking ID:</label><br>
            <input type="text" id="bookingId" name="bookingId"><br>
            <p id="bookingIderror"></p>

            <label for="reason">Reason for Cancellation:</label><br>
            <textarea id="reason" name="reason" rows="4" cols="30"></textarea><br>
            <p id="reasonerror"></p>

            <input type="submit" name="submit" value="Submit Request" onclick="validate()">
            <a href="Terms_Display.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Cancellation_Request.css">
    <script src="../Asset/Cancellation_Request.js"></script>
</body>
</html>
