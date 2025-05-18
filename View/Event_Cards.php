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
    <title>Event Cards</title>
</head>
<body>
    <div class="header">Event Booking</div>

    
    <fieldset>
        <legend><b>FILTER EVENTS</b></legend>
        <form method="post" action="../Asset/Event_Cards_.php" onsubmit="return validate()">
            <label for="view">Select View:</label><br>
            <select id="view" name="view">
                <option value="">Select View</option>
                <option value="month">Month</option>
                <option value="week">Week</option>
                <option value="day">Day</option>
            </select><br>
            <p id="viewerror"></p>

            <label for="category">Select Category:</label><br>
            <select id="category" name="category">
                <option value="all">All</option>
                <option value="entertainment">Entertainment</option>
                <option value="technology">Technology</option>
                <option value="education">Education</option>
            </select><br>
            <p id="categoryerror"></p>

            <label for="dateFrom">From:</label><br>
            <input type="date" id="dateFrom" name="dateFrom"><br>
            <p id="dateerror1"></p>

            <label for="dateTo">To:</label><br>
            <input type="date" id="dateTo" name="dateTo"><br>
            <p id="dateerror2"></p>

            <input type="submit" value="Apply Filters">
        </form>
    </fieldset>

    
    <fieldset>
        <legend><b>EVENT CARDS</b></legend>
        <form>
            <h3>Event: Music Fest</h3>
            <p>Date: 15-04-2015</p>
            <p>Category: Entertainment</p>
            <a href="Interactive_Vanue_Map.php"><input type="button" class="green-button" value="View Details"></a>
            <a href="regdashboard.html"><input type="button" class="green-button" value="Registration"></a>
             <a href="joinwaitlist.html"><input type="button" class="green-button" value="Join Wait List"></a>
            <a href="Seat_Zoom.php"><input type="button" class="green-button" value="Book"></a>

            <h3>Event: Tech Conference</h3>
            <p>Date: 20-04-2025</p>
            <p>Category: Technology</p>
            <a href="Interactive_Vanue_Map.php"><input type="button" class="green-button" value="View Details"></a>
            <a href="regdashboard.html"><input type="button" class="green-button" value="Registration"></a>
            <a href="joinwaitlist.html"><input type="button" class="green-button" value="Join Wait List"></a>
            <a href="Seat_Zoom.php"><input type="button" class="green-button" value="Book"></a>

            <br><br><br>
            <a href="View_Profile.php"><input type="button" class="blue-button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Event_Cards.css">
    <script src="../Asset/Event_Cards.js"></script>
</body>
</html>
