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
    <title>Accessibility Filter</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>ACCESSIBILITY FILTER</b></legend>
         <form method="post" action="../Asset/Accessibility_Filter_.php" onsubmit="return validate()">
            <label for="access">Select Accessibility Option:</label><br>
            <select id="access" name="access">
                <option value="">Select Accessibility</option>
                <option value="normal">Normal Seats</option>
                <option value="wheelchair">Wheelchair Accessible</option>
                <option value="hearing">Hearing Aid Support</option>
            </select><br><br>
            <p id="accesserror"></p>

            <input type="submit" name="submit" value="Next"  onclick="validate()">
            <a href="Seat_Zoom.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Accessibility_Filter.css">
    <script src="../Asset/Accessibility_Filter.js"></script>
</body>
</html>