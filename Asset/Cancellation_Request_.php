<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $bookingId = trim($_POST['bookingId']);
    $reason = trim($_POST['reason']);
    $hasError = false;

    if ($bookingId === "") {
        echo "Booking ID cannot be empty!<br>";
        $hasError = true;
    }

    if ($reason === "") {
        echo "Please provide a reason for cancellation!<br>";
        $hasError = true;
    }

    else {
        echo "Submitted successfully!<br>";
    }

} else {
    echo "Invalid request! Please submit form.";
}
?>
