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
    <title>Seat Zoom</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>SEAT ZOOM</b></legend>
         <form method="post" action="../Asset/Seat_Zoom_.php" onsubmit="return validate()">

            <img src="seat.jpg" id="seatImage"><br><br>

            <label for="seat">Select Seat:</label><br>
            <select id="seat" name="seat">
                <option value="">Select Seat</option>
                <option value="A1">A1 - Left</option>
                <option value="A2">A2 - Middle</option>
                <option value="A3">A3 - Right</option>
            </select><br>
            <p id="selecterror"></p>

            <input type="submit" name="submit" value="Go Next" onclick="validate()">
            <a href="Event_Cards.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Seat_Zoom.css">
    <script src="../Asset/Seat_Zoom.js"></script>
</body>
</html>