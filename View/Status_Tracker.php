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
         <form method="post" action="../Controller/Status_Tracker_.php" onsubmit="return validate()">
            <label for="eventId">Enter event ID:</label><br>
            <input type="text" id="eventId" name="eventId"><br>
            <p id="eventIderror"></p>

            <input type="submit" name="submit" value="Track Status">
            <a href="Terms_Display.php"><input type="button" value="Back"></a>

            <br><br>
            <p><b>Status:</b> 
                <?php 
                    if (isset($_SESSION['refund_status'])) {
                        echo htmlspecialchars($_SESSION['refund_status']);
                        unset($_SESSION['refund_status']);
                    } else {
                        echo "[Pending / Approved / Rejected]";
                    }
                ?>
            </p>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Status_Tracker.css">
    <script src="../Asset/Status_Tracker.js"></script>
</body>
</html>
