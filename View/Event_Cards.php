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
    <title>Event Card</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>EVENT CARDS</b></legend>
        <form>
            <a href="Filter_Panel.html"><input type="button" id="filter" value="Apply Filter"></a>

            <h3>Event: Music Fest</h3>
            <p>Date: 15-04-2015</p>
            <p>Category: Entertainment</p>
            <input type="submit" value="View Details"><br><br>

            <h3>Event: Tech Conference</h3>
            <p>Date: 20-04-2025</p>
            <p>Category: Technology</p>

            <input type="submit" value="View Details"><br>
            <a href="M-W-D_Views.html"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/Event_Cards.css">
</body>
</html>