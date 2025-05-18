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
    <title>Terms Display</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>TERMS DISPLAY</b></legend>
         <form method="post" action="../Asset/Terms_Display_.php" onsubmit="return validate()">
            <a href="Cancellation_Request.php"><input type="button" class="green" value="Cancellation Request"></a>
            <a href="Status_Tracker.php"><input type="button" class="green" value="Status Tracker"></a><br><br>

            <p><b>General Terms:</b></p>
            <p>• Refund available up to 7 days before event.</p>
            <p>• No refunds after event starts.</p>
            <p>• Processing fee may apply.</p><br>

            <p><b>Deadline Checker:</b></p>
            <label for="eventDate">Event Date:</label><br>
            <input type="date" id="eventDate" name="eventDate"><br>
            <p id="eventDateError"></p>

            <input type="button" class="blue" value="Check Eligibility" onclick="validate()">
            <a href="View_Profile.php"><input type="button" class="blue" value="Back"></a>

        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Terms_Display.css">
    <script src="../Asset/Terms_Display.js"></script>
</body>
</html>