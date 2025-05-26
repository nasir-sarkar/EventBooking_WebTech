<?php
session_start();

if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../Model/eventModel.php');

if (isset($_SESSION['filteredEvents'])) {
    $events = $_SESSION['filteredEvents'];
    unset($_SESSION['filteredEvents']);
} else {
    $events = getAllEvents();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Cards</title>
    <link rel="stylesheet" href="../Asset/Event_Cards.css">
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>FILTER EVENTS</b></legend>
    <form method="post" action="../Controller/Event_Cards_.php" onsubmit="return validate()">

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
            <option value="">-Select-</option>
            <option value="all">All</option>
            <option value="entertainment">Entertainment</option>
            <option value="technology">Technology</option>
            <option value="education">Education</option>
            <option value="science">Science</option>
            <option value="music">Music</option>
        </select><br>
        <p id="categoryerror"></p>

        <input type="submit" name="submit" value="Apply Filters">
    </form>
    </fieldset>

    <fieldset>
    <legend><b>EVENT CARDS</b></legend>
    <form>
        <?php foreach ($events as $event): ?>
            
            <h3>Event: <?= htmlspecialchars($event['event']) ?></h3>
            <p>Event ID: <?= htmlspecialchars($event['id']) ?></p>
            <p>Date: <?= date('d-m-Y', strtotime($event['date'])) ?></p>
            <p>Category: <?= htmlspecialchars($event['category']) ?></p>
            <p>Sponsor: <?= htmlspecialchars($event['sponsor']) ?></p>
            <p>Discount: <?= htmlspecialchars($event['discount']) ?>%</p>
            <p>[Note: Only 5 people can get the promo code for a discount]</p>

                
            <a href="Interactive_Vanue_Map.php"><input type="button" class="green-button" value="Venue Details"></a>
            <a href="regdashboard.php"><input type="button" class="green-button" value="Registration"></a>
            <a href="joinwaitlist.php"><input type="button" class="green-button" value="Join Wait List"></a>
            <a href="Seat_Zoom.php?event_id=<?= urlencode($event['id']) ?>&event_date=<?= urlencode($event['date']) ?>">
            <input type="button" class="green-button" value="Book"></a>
            <br><br>

        <?php endforeach; ?>

        <br><br><br>
        <a href="View_Profile.php"><input type="button" class="blue-button" value="Back"></a>

    </form>
    </fieldset>

    <script src="../Asset/Event_Cards.js"></script>
</body>
</html>
