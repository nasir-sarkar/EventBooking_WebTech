<?php
    session_start();
    if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
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
    <form method="post" action="../Controller/Terms_Display_.php" onsubmit="return validate()">
           
        <p><b>General Terms:</b></p>
        <p>• Refund available up to 7 days before event.</p>
        <p>• No refunds after event starts.</p>
        <p>• Processing fee may apply.</p><br>

        <a href="Cancellation_Request.php"><input type="button" class="green" value="Cancellation Request"></a> <br><br>
        <a href="Status_Tracker.php"><input type="button" class="green" value="Status Tracker"></a><br><br>
        <a href="View_Profile.php"><input type="button" class="blue" value="Back"></a>

    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Terms_Display.css">
    <script src="../Asset/Terms_Display.js"></script>
</body>
</html>