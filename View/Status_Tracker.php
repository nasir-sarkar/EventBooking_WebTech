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
    <title>Status Tracker</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>REQUEST STATUS TRACKER</b></legend>
         <form method="post" action="../Asset/Status_Tracker_.php" onsubmit="return validate()">
            <label for="trackId">Enter Request ID:</label><br>
            <input type="text" id="trackId" name="trackId"><br>
            <p id="trackIderror"></p>

            <input type="submit" name="submit" value="Track Status">
            <a href="Terms_Display.php"><input type="button" value="Back"></a>

            <br><br><p><b>Status:</b> [Pending / Approved / Rejected]</p>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Status_Tracker.css">
    <script src="../Asset/Status_Tracker.js"></script>
</body>
</html>