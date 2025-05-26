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
    <title>Confirmation</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
    <legend><b>SUBMISSION CONFIRMATION</b></legend>
    
        <p>Thank you for contacting us. Your inquiry has been received.</p>
        <p>A confirmation email has been sent to your address.</p>
        <a href="Contact_Form.php"><input type="button" value="Back"></a>

    </fieldset>
    
    <link rel="stylesheet" href="../Asset/Submission_Confirmation.css">
</body>
</html>
