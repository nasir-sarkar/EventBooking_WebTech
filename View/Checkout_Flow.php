<?php
session_start();

if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Unknown";
$selected_event_id = isset($_SESSION['event_id']) ? $_SESSION['event_id'] : "Not selected";
$selected_event_date = isset($_SESSION['event_date']) ? $_SESSION['event_date'] : "Not selected";

$selected_seat = isset($_SESSION['selected_seat']) ? $_SESSION['selected_seat'] : "Not selected";
$selected_access = isset($_SESSION['selected_access']) ? $_SESSION['selected_access'] : "Not selected";
$selected_ticket_type = isset($_SESSION['selected_ticket_type']) ? $_SESSION['selected_ticket_type'] : "Not selected";
$selected_promo = isset($_SESSION['selected_promo']) ? $_SESSION['selected_promo'] : "Not applied";
$promo_discount = isset($_SESSION['promo_discount']) ? $_SESSION['promo_discount'] : "0%";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Flow</title>
    <link rel="stylesheet" href="../Asset/Checkout_Flow.css">
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
        <p><b>Discount:</b> <?= htmlspecialchars($promo_discount) . "%" ?></p>

        <form method="post" action="../Asset/Checkout_Flow_.php" onsubmit="return validate()">
            <br><br>
            <label for="method">Payment Method:</label><br>
            <select id="method" name="method">
                <option value="">Select Payment Method</option>
                <option value="card">Credit/Debit Card</option>
                <option value="apple">Apple Pay</option>
                <option value="google">Google Pay</option>
            </select><br>
            <p id="methoderror"></p>

            <input type="submit" name="submit" value="Confirm Payment">
            <a href="Discount_Entry.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <script src="../Asset/Checkout_Flow.js"></script>
</body>
</html>
