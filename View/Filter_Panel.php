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
    <title>Filter Panel</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>FILTER PANEL</b></legend>
        <form onsubmit="return validate()">
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
            <a href="Event_Cards.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/Filter_Panel.css">
    <script src="../JS/Filter_Panel.js"></script>
</body>
</html>