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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Discount</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>ADD DISCOUNT</b></legend>
        <form method="post" action="../Asset/Add_Discount_.php" onsubmit="return validate()" novalidate>

            <label for="eventid">Event ID:</label><br>
            <input type="text" id="eventid" name="eventid"><br>
            <p id="eventiderror"></p>

            <label for="sponsor">Sponsor Name:</label><br>
            <input type="text" id="sponsor" name="sponsor"><br>
            <p id="sponsorerror"></p>

            <label for="discount">Discount (%):</label><br>
            <input type="number" id="discount" name="discount"><br>
            <p id="discounterror"></p>

            <label for="promo1">Promo Code 1:</label><br>
            <input type="text" id="promo1" name="promo1"><br>
            <p id="promo1error"></p>

            <label for="promo2">Promo Code 2:</label><br>
            <input type="text" id="promo2" name="promo2"><br>
            <p id="promo2error"></p>

            <label for="promo3">Promo Code 3:</label><br>
            <input type="text" id="promo3" name="promo3"><br>
            <p id="promo3error"></p>

            <label for="promo4">Promo Code 4:</label><br>
            <input type="text" id="promo4" name="promo4"><br>
            <p id="promo4error"></p>

            <label for="promo5">Promo Code 5:</label><br>
            <input type="text" id="promo5" name="promo5"><br>
            <p id="promo5error"></p>

            <input type="submit" name="submit" value="Add Discount">
            <a href="Content_Moderation.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Contact_Form.css" />
    <script src="../Asset/Add_Discount.js"></script>
</body>
</html>
