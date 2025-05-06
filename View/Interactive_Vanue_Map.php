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
        <form onsubmit="return validate()">

            <img src="../Image/event_map.jpg" id="venueImage">

            <label for="section">Select Section:</label><br>
            <select id="section" name="section">
                <option value="">Select Section</option>
                <option value="a">Section A</option>
                <option value="b">Section B</option>
                <option value="c">Section C</option>
            </select><br><br>
            <p id="selecterror"></p>

            <input type="button" value="View Seats" onclick="validate()">
            <input type="button" value="Back">
        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/Interactive_Venue_Map.css">
    <script src="../JS/Interactive_Venue_Map.js"></script>
</body>
</html>