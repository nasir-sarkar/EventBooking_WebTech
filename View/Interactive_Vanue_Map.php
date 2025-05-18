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
    <title>Interactive Vanue Map</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>INTERACTIVE VENUE MAP</b></legend>
         <form method="post" action="../Asset/Interactive_Venue_Map_.php" onsubmit="return validate()">

            <img src="event_map.jpg" id="venueImage">

            <label for="section">Select Section:</label><br>
            <select id="section" name="section">
                <option value="">Select Section</option>
                <option value="a">Section A</option>
                <option value="b">Section B</option>
                <option value="c">Section C</option>
            </select><br><br>
            <p id="selecterror"></p>

            <input type="submit" name="submit" value="Parking Map" onclick="validate()">
            <a href="Event_Cards.php"><input type="button" value="Back"></a><br>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Interactive_Venue_Map.css">
    <script src="../Asset/Interactive_Venue_Map.js"></script>
</body>
</html>