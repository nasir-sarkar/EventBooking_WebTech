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
    <title>Discount Entry</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>DISCOUNT ENTRY</b></legend>
        <form method="post" action="../Asset/Discount_Entry_.php" onsubmit="return validate()">
            <label for="promo">Enter Promo Code:</label><br>
            <input type="text" id="promo" name="promo"><br>
            <p id="promoerror"></p>

            <input type="button" class="blue-button" value="Apply" onclick="validate()">
            <a href="Code_Generator.php"><input type="button" class="blue-button" value="Generate"></a>
            <a href="redemption_Analytics.php"><input type="button" class="blue-button" value="Track"></a>
            <a href="Accessibility_Filter.php"><input type="button" class="blue-button" value="Back"></a>
            
        </form>
    </fieldset>  

    <form action="Checkout_Flow.php" style="margin-top: 10px;">
    <button type="submit" class="wide-button">Skip</button>
    </form>  

    <link rel="stylesheet" href="../Asset/Discount_Entry.css">
    <script src="../Asset/Discount_Entry.js"></script>
</body>
</html>