<?php
session_start();

require_once('../Controller/Calculation.php');
require_once('../Model/paymentModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $method = trim($_POST['method']);

    $errors = [];

    if ($method == "") {
        $errors[] = "Please select a payment method!";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit;
    }

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
        exit;
    }

    // Call Calculation function to get final amount
    $calculationResult = calculateAmount($ticketType, $promoCode, $promoDiscount);

    if (!$calculationResult['success']) {
        echo $calculationResult['message'];
        exit;
    }

    $amount = $calculationResult['amount'];

    // Call paymentModel to insert payment
    $inserted = insertPayment($username, $eventId, $seat, $seatType, $ticketType, $amount, 'paid', '', '', $eventDate);

    if ($inserted) {
        header("Location: ../View/Saved_Cards.php");
        exit;
    } else {
        echo "Failed to save payment record.";
    }
} else {
    echo "Invalid request!";
}
