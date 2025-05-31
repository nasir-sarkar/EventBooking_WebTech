<?php
session_start();
require_once('../Controller/Calculation.php');
require_once('../Model/paymentModel.php');
require_once('../Model/eventModel.php');

if (isset($_POST['submit'])) {
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
        $calculationResult = calculation($ticketType, $promoCode, $promoDiscount);

        if (!$calculationResult['success']) {
            echo $calculationResult['message'];
            $hasError = true;
        }
    }

    if (!$hasError) {
        $amount = $calculationResult['amount'];

        $inserted = updatePayment(
            $username,
            $eventId,
            $seat,
            $seatType,
            $ticketType,
            $amount,
            'paid',
            $eventDate
        );

        if ($inserted) {

            if ($promoCode !== "Not applied") {
                $promoUpdated = updatePromoStatus($eventId, $promoCode);
            }

            echo "Payment successful!<br>";

            unset($_SESSION['event_id']);
            unset($_SESSION['event_date']);
            unset($_SESSION['event_name']);
            unset($_SESSION['selected_seat']);
            unset($_SESSION['selected_access']);
            unset($_SESSION['selected_ticket_type']);
            unset($_SESSION['selected_promo']);
            unset($_SESSION['promo_discount']);

        } else {
            echo "Failed to save payment record.";
        }
    }
} else {
    echo "Invalid request!";
}
?>
