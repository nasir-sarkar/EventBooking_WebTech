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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Delete Event</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>DELETE EVENT</b></legend>
    <form method="post" action="../Controller/Delete_Event_.php" onsubmit="return validate()">
        
        <label for="eventid">Event ID:</label><br>
        <input type="text" id="eventid" name="eventid"><br>
        <p id="eventiderror"></p>

        <input type="submit" name="submit" value="Delete Event">
        <a href="Content_Moderation.php"><input type="button" value="Back"></a>
    
    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Delete_event.css" />
    <script src="../Asset/Delete_Event.js"></script>
</body>
</html>
