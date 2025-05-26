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
    <title>Saved Cards</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
    <legend><b>SAVED CARDS</b></legend>
    <form>
            
        <p>Card 1: **** **** **** 1234 (Visa)</p>
        <a href="Invoice_Generator.php"><input type="button" class="green-button" value="Use This"></a><br><br>

        <p>Card 2: **** **** **** 5678 (MasterCard)</p>
        <a href="Invoice_Generator.php"><input type="button" class="green-button" value="Use This"></a><br><br>

        <a href="Add_Cards.php"><input type="button" class="blue-button" value="Add New Cards"></a>
        <a href="Checkout_Flow.php"><input type="button" class="blue-button" value="Back"></a>

    </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Saved_Cards.css">
</body>
</html>