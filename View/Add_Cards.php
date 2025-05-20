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
    <title>Add Card</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>ADD CARD</b></legend>
        <form method="post" action="../Asset/Add_Cards_.php" onsubmit="return validate()">

            <label for="cardtype">Card Type:</label><br>
            <select id="cardtype" name="cardtype">
                <option value="">Select Card Type</option>
                <option value="credit">Credit Card</option>
                <option value="debit">Debit Card</option>
                <option value="prepaid">Prepaid Card</option>
            </select><br>
            <p id="cardtypeerror"></p>

            <label for="cardid">Card ID:</label><br>
            <input type="text" id="cardid" name="cardid"><br>
            <p id="cardiderror"></p>

            <input type="submit" name="submit" value="Add Card">
            <a href="Saved_Cards.php"><input type="button" value="Back"></a><br>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Add_Cards.css">
    <script src="../Asset/Add_Cards.js"></script>
</body>
</html>
