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
    <title>Checkout Flow</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>CHECKOUT FLOW</b></legend>
        <form onsubmit="return validate()">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <p id="nameerror"></p>

            <label for="method">Payment Method:</label><br>
            <select id="method" name="method">
                <option value="">Select Payment Method</option>
                <option value="card">Credit/Debit Card</option>
                <option value="apple">Apple Pay</option>
                <option value="google">Google Pay</option>
            </select><br>
            <p id="methoderror"></p>

            <label for="split">Split Payment:</label><br>
            <input type="checkbox" id="split" name="split"> Enable Split Payment<br><br>

            <input type="button" value="Proceed to Pay"  onclick="validate()">
            <a href="Accessibility_Filter.php"><input type="button" value="Back"></a><br>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/Checkout_Flow.css">
    <script src="../JS/Checkout_Flow.js"></script>
</body>
</html>