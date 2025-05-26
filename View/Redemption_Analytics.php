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
    <title>Redemption Analytics</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>PROMO CODE ANALYTICS</b></legend>
        <form method="post" action="../Controller/Redemption_Analytics_.php" onsubmit="return validate()">
            <label for="code">Enter Code to Track:</label><br>
            <input type="text" id="code" name="code"><br>
            <p id="codeerror"></p>

            <input type="submit" name="submit" value="View Analytics">
            <a href="Discount_Entry.php"><input type="button" value="Back"></a>
            
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Redemption_Analytics.css">
    <script src="../Asset/Redemption_Analytics.js"></script>
    
</body>
</html>