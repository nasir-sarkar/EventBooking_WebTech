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
    <title>Ticket Tiers</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>TICKET TIERS</b></legend>
        <form method="post" action="../Controller/passInfo.php">

            <div class="filter-panel">
                <label><input type="radio" name="ticket_type" value="Standard" required> Standard - ৳2500</label><br><br>
                <label><input type="radio" name="ticket_type" value="Premium"> Premium - ৳4000</label><br><br>
                <label><input type="radio" name="ticket_type" value="VIP"> VIP - ৳6000</label>
            </div>

            <input type="submit" value="Go Next">
            <a href="Seat_Zoom.php"><input type="button" value="Back"></a>
            
            
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/ttgrid.css">
    <script src="../Asset/ttgrid.js"></script>
</body>
</html>