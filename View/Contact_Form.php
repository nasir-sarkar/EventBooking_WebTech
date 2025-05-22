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
    <title>Contact From</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>CONTACT FROM</b></legend>
         <form method="post" action="../Asset/Contact_Form_.php" onsubmit="return validate()">

            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <p id="nameerror"></p>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <p id="emailerror"></p>

            <label for="message">Message:</label><br>
            <input type="text" id="message" name="message"><br>
            <p id="messageerror"></p>

            <label for="captcha">What is 3 + 4?</label><br>
            <input type="text" id="captcha" name="captcha"><br>
            <p id="captchaerror"></p>

            <input type="submit" name="submit" value="Submit Inquiry" onclick="validate()">
            <a href="View_Profile.php"><input type="button" value="Back"></a>
            
        </form>
    </fieldset>
    
    <link rel="stylesheet" href="../Asset/Contact_Form.css">
    <script src="../Asset/Contact_Form.js"></script>
</body>
</html>
