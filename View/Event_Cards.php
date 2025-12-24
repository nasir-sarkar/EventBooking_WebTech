<?php
session_start();

if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../Model/eventModel.php');

if (isset($_SESSION['filteredEvent'])) {
    $events = $_SESSION['filteredEvent'];
    unset($_SESSION['filteredEvent']);
} else {
    $events = allEvents();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Cards</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>FILTER EVENTS</b></legend>
    <form method="post" action="../Controller/Event_Cards_.php" onsubmit="return validate()">

        <label for="view">Select View:</label><br>
        <select id="view" name="view">
            <option value="">Select View</option>
            <option value="month">Current Month</option>
            <option value="week">Current Week (Mon-Sun)</option>
            <option value="day">Today</option>
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
        <a href="View_Profile.php"><input type="button" class="blue-button" value="Back"></a>
    </form>
    </fieldset>

    <fieldset>
    <legend><b>EVENT CARDS</b></legend>
    <?php foreach ($events as $event): ?>
        
        <h3>Event: <?= htmlspecialchars($event['event']) ?></h3>
        <p>Event ID: <?= htmlspecialchars($event['id']) ?></p>
        <p>Date: <?= date('d-m-Y', strtotime($event['date'])) ?></p>
        <p>Category: <?= htmlspecialchars($event['category']) ?></p>
        <p>Sponsor: <?= !empty($event['sponsor']) ? htmlspecialchars($event['sponsor']) : '' ?></p>
        <p>Discount: <?= !empty($event['discount']) ? htmlspecialchars($event['discount']) . '%' : '' ?></p>
        <p>[Note: Only 5 people can get the promo code for a discount]</p>

            
        <a href="Interactive_Vanue_Map.php"><input type="button" class="green-button" value="Venue Details"></a>
        

        <form method="post" action="../Controller/Event_Cards_.php">
        <input type="hidden" name="event_id" value="<?= htmlspecialchars($event['id']) ?>">
        <input type="hidden" name="event_name" value="<?= htmlspecialchars($event['event']) ?>">
        <input type="hidden" name="event_date" value="<?= htmlspecialchars($event['date']) ?>">
        <input type="hidden" name="sponsor" value="<?= htmlspecialchars($event['sponsor'] ?? '') ?>">
        <input type="hidden" name="discount" value="<?= htmlspecialchars($event['discount'] ?? '') ?>">
        <br><input type="submit" name="book_now" value="Book Now">
        </form>

        <br><br>

    <?php endforeach; ?>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Event_Cards.css">
    <script src="../Asset/Event_Cards.js"></script>
</body>
</html>