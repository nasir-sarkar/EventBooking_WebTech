<?php
session_start();
if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cancellation Request</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>CANCELLATION REQUEST</b></legend>
        <form method="post" action="../Asset/Cancellation_Request_.php" onsubmit="return validate()">

            <label for="username">Username:</label><br />
            <input type="text" id="username" name="username" value="<?= $username ?>" readonly /><br />
            <p id="usernameerror"></p>

            <label for="eventId">Event ID:</label><br />
            <input type="text" id="eventId" name="eventId" /><br />
            <p id="eventIderror"></p>

            <label for="reason">Reason for Cancellation:</label><br />
            <textarea id="reason" name="reason" rows="4" cols="30"></textarea><br />
            <p id="reasonerror"></p>

            <input type="submit" name="submit" value="Submit Request" />
            <a href="Terms_Display.php"><input type="button" value="Back" /></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Cancellation_Request.css" />
    <script src="../Asset/Cancellation_Request.js"></script>
</body>
</html>
