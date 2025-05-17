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
    <title>Code Generator</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>GENERATE PROMO CODE</b></legend>
        <form method="post" onsubmit="return validate()">

            <label for="sponsor">Sponsor Name:</label><br>
            <input type="text" id="sponsor" name="sponsor"><br>
            <p id="sponsorerror"></p>

            <label for="discount">Discount (%):</label><br>
            <input type="number" id="discount" name="discount"><br>
            <p id="discounterror"></p>

            <label for="validity">Valid Until:</label><br>
            <input type="date" id="validity" name="validity"><br>
            <p id="validityerror"></p>

            <input type="button" value="Generate Code" onclick="validate()">
            <a href="Discount_Entry.php"><input type="button" value="Back"></a><br>
            
        </form>
    </fieldset>
    
    <link rel="stylesheet" href="../CSS/Code_Generator.css">
    <script src="../JS/Code_Generator.js"></script>
</body>
</html>