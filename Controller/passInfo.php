<?php
session_start();



// Store event_id and event_date must be present in session before continuing
if (!isset($_SESSION['event_id'])) {
    echo "Event ID missing. Please start from Event Cards.";
    exit;
}

if (!isset($_SESSION['event_date'])) {
    echo "Event date missing. Please start from Event Cards.";
    exit;
}



// Seat Zoom to TTGrid step
if (isset($_SESSION['temp_seat']) && isset($_SESSION['temp_access'])) {
    $_SESSION['selected_seat'] = $_SESSION['temp_seat'];
    $_SESSION['selected_access'] = $_SESSION['temp_access'];

    unset($_SESSION['temp_seat'], $_SESSION['temp_access']);

    header("Location: ../View/ttgrid.php");
    exit;
}



// TTGrid to Discount Entry step
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ticket_type'])) {
    $ticket_type = trim($_POST['ticket_type']);

    if ($ticket_type === "") {
        echo "Please select a ticket type!";
        echo '<br><a href="../View/ttgrid.php">Back to Ticket Selection</a>';
        exit;
    }

    $_SESSION['selected_ticket_type'] = $ticket_type;

    header("Location: ../View/Discount_Entry.php"); 
    exit;
}



// Discount Entry to Checkout Flow step
if (isset($_SESSION['temp_promo'])) {
    $_SESSION['selected_promo'] = $_SESSION['temp_promo'];
    unset($_SESSION['temp_promo']);

    if (isset($_SESSION['temp_discount'])) {
        $_SESSION['promo_discount'] = $_SESSION['temp_discount'];
        unset($_SESSION['temp_discount']);
    }

    header("Location: ../View/Checkout_Flow.php");
    exit;
}



// Fallback error
echo "No valid data received. Please select your options first.";
echo '<br><a href="../View/Seat_Zoom.php">Back to Seat Selection</a>';
exit;
?>
