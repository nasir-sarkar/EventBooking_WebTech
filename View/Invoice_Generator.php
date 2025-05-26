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
    <title>Invoice Generator</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>INVOICE GENERATOR</b></legend>
         <form method="post" action="../Controller/Invoice_Generator_.php" onsubmit="return validate()">
            <label for="email">Enter Email for Invoice:</label><br>
            <input type="email" id="email" name="email"><br>
            <p id="emailerror"></p>

            <input type="submit" name="submit" value="Generate Invoice">
            <a href="Saved_Cards.php"><input type="button" value="Back"></a> 

            <br><br><p><b>Note:</b> Your e-ticket will be sent instantly after payment.</p>        
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Invoice_Generator.css">
    <script src="../Asset/Invoice_Generator.js"></script>
</body>
</html>