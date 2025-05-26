<?php
session_start();
require_once('../Controller/Calculation.php');
require_once('../Model/paymentModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $method = trim($_POST['method']);
    $cardnum = trim($_POST['cardnum']);
    $hasError = false;

    if ($method == "") {
        echo "Please select a payment method!";
        $hasError = true;
    }

    if ($cardnum == "") {
        echo "Please enter card number or phone!";
        $hasError = true;
    }

    if (!$hasError) {
        $username = $_SESSION['username'] ?? null;
        $eventId = $_SESSION['event_id'] ?? null;
        $eventDate = $_SESSION['event_date'] ?? null;
        $seat = $_SESSION['selected_seat'] ?? null;
        $seatType = $_SESSION['selected_access'] ?? null;
        $ticketType = $_SESSION['selected_ticket_type'] ?? null;
        $promoCode = $_SESSION['selected_promo'] ?? "Not applied";
        $promoDiscount = isset($_SESSION['promo_discount']) ? floatval($_SESSION['promo_discount']) : 0;

        if (!$username || !$eventId || !$eventDate || !$seat || !$seatType || !$ticketType) {
            echo "Missing necessary session data!";
            $hasError = true;
        }
    }

    if (!$hasError) {
        $calculationResult = calculateAmount($ticketType, $promoCode, $promoDiscount);

        if (!$calculationResult['success']) {
            echo $calculationResult['message'];
            $hasError = true;
        }
    }

    if (!$hasError) {
        $amount = $calculationResult['amount'];

        $inserted = insertPayment($username, $eventId, $seat, $seatType, $ticketType, $amount, 'paid', $cardnum, $method, $eventDate);

        if ($inserted) {
            echo "Payment successful!<br>";
        } else {
            echo "Failed to save payment record.";
        }
    }
} else {
    echo "Invalid request!";
}
