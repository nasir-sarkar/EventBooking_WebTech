<?php
session_start();

if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

require_once('../Controller/Calculation.php');

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Unknown";
$selected_event_id = isset($_SESSION['event_id']) ? $_SESSION['event_id'] : "Not selected";
$selected_event_date = isset($_SESSION['event_date']) ? $_SESSION['event_date'] : "Not selected";
$selected_event_name = isset($_SESSION['event_name']) ? $_SESSION['event_name'] : "Not selected";


$selected_seat = isset($_SESSION['selected_seat']) ? $_SESSION['selected_seat'] : "Not selected";
$selected_access = isset($_SESSION['selected_access']) ? $_SESSION['selected_access'] : "Not selected";
$selected_ticket_type = isset($_SESSION['selected_ticket_type']) ? $_SESSION['selected_ticket_type'] : "Not selected";
$selected_promo = isset($_SESSION['selected_promo']) ? $_SESSION['selected_promo'] : "Not applied";
$promo_discount = isset($_SESSION['promo_discount']) ? floatval($_SESSION['promo_discount']) : 0;

$amount = 0;
if ($selected_ticket_type !== "Not selected") {
    $calcResult = calculateAmount($selected_ticket_type, $selected_promo, $promo_discount);
    if ($calcResult['success']) {
        $amount = $calcResult['amount'];
    } 
    else {
        $amount = "Calculation error: " . htmlspecialchars($calcResult['message']);
    }
} 
else {
    $amount = "Not available";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Checkout Flow</title>
    <link rel="stylesheet" href="../Asset/Checkout_Flow.css" />
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
    <legend><b>CHECKOUT FLOW</b></legend>

        <p><b>Username:</b> <?= htmlspecialchars($username) ?></p>
        <p><b>Event ID:</b> <?= htmlspecialchars($selected_event_id) ?></p>
        <p><b>Event Date:</b> <?= htmlspecialchars(date('d-m-Y', strtotime($selected_event_date))) ?></p>
        <p><b>Seat Selected:</b> <?= htmlspecialchars($selected_seat) ?></p>
        <p><b>Access Type:</b> <?= htmlspecialchars($selected_access) ?></p>
        <p><b>Ticket Type:</b> <?= htmlspecialchars($selected_ticket_type) ?></p>
        <p><b>Promo Code:</b> <?= htmlspecialchars($selected_promo) ?></p>
        <p><b>Discount:</b> <?= htmlspecialchars($promo_discount) ?>%</p>
        <p><b>Total Amount:</b> <?= is_numeric($amount) ? number_format($amount, 2) . " TK" : $amount ?></p>

        <form method="post" action="../Controller/Checkout_Flow_.php" onsubmit="return validate()">
            <br /><br />
            <label for="method">Payment Method:</label><br />
            <select id="method" name="method">
                <option value="">Select Payment Method</option>
                <option value="card">Credit/Debit Card</option>
                <option value="bkash">Bkash</option>
                <option value="nagad">Nagad</option>
            </select><br />
            <p id="methoderror"></p>

            <label for="cardnum">Card No / Phone:</label><br />
            <input type="text" id="cardnum" name="cardnum" /><br />
            <p id="cardnumerror"></p>
            <input type="submit" name="submit" class="green-button" value="Pay Now" />

            <a href="Discount_Entry.php"><input type="button" class="blue-button" value="Back" /></a>
    </form>
    </fieldset>

    <script src="../Asset/Checkout_Flow.js"></script>
</body>
</html>
