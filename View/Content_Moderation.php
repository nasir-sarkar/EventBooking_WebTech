<?php
    session_start();
    if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
        header('location: login.php');
        exit;
    }

    require_once('../model/eventModel.php');
    $events = getAllEvents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Moderation</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>CREATE EVENT</b></legend>
        <form method="post" action="../Asset/Content_Moderation_.php" onsubmit="return validate()">

            <label for="ename">Event Name:</label><br>
            <input type="text" id="ename" name="ename"><br>
            <p id="enameerror"></p>

            <label for="edate">Event Date:</label><br>
            <input type="date" id="edate" name="edate"><br>
            <p id="edateerror"></p>

            <label for="ecat">Category:</label><br>
            <select id="ecat" name="ecat">
                <option value="">Select Category</option>
                <option value="Music">Music</option>
                <option value="Tech">Tech</option>
                <option value="Festival">Festival</option>
            </select><br>
            <p id="ecaterror"></p>

            <input type="submit" name="submit" value="Create Event">
            <a href="Add_discount.php"><input type="button" value="Add Discount"></a>
        </form>
    </fieldset>

    <fieldset>
        <legend><b>EVENT LIST</b></legend>
        <form>
            <?php foreach ($events as $event): ?>
                <h3>Event: <?= $event['event'] ?></h3>
                <p>Event ID: <?= $event['id'] ?></p>
                <p>Date: <?= date('d-m-Y', strtotime($event['date'])) ?></p>
                <p>Category: <?= $event['category'] ?></p>
                <p>Sponsor: <?= $event['sponsor'] ?></p>
                <p>Discount: <?= $event['discount'] ?>%</p>
                <hr>
            <?php endforeach; ?>

            <a href="Delete_Event.php"><input type="button" value="Delete Event"></a>
            <a href="Refund_Requests.php"><input type="button" value="Refund Requests"></a>
            <a href="Admin_Panel.php"><input type="button" class="blue" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Content_Moderation.css">
    <script src="../Asset/Content_Moderation.js"></script>
</body>
</html>
