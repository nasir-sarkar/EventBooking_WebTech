<?php
require_once('../Model/db.php');

function calculateAmount($ticketType, $promoCode, $promoDiscount) {
    $ticketTypeLower = strtolower($ticketType);

    $prices = [
        'standard' => 2500,
        'premium' => 4000,
        'vip' => 6000
    ];

    if (!isset($prices[$ticketTypeLower])) {
        return ['success' => false, 'message' => 'Invalid ticket type!'];
    }

    $baseAmount = $prices[$ticketTypeLower];

    $discountPercent = 0;
    if (strtolower($promoCode) != "not applied" && $promoDiscount > 0) {
        $discountPercent = $promoDiscount;
    }

    $finalAmount = $baseAmount - ($baseAmount * $discountPercent / 100);

    return [
        'success' => true,
        'amount' => $finalAmount
    ];
}
