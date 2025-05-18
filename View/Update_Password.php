<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>UPDATE PASSWORD</b></legend>
         <form method="post" action="../Asset/Update_Password_.php" onsubmit="return validate()">

            <label for="old">Old Password:</label><br>
            <input type="password" id="old" name="old"><br>
            <p id="olderror"></p>

            <label for="new">New Password:</label><br>
            <input type="password" id="new" name="new"><br>
            <p id="newerror"></p>

            <label for="confirm">Confirm Password:</label><br>
            <input type="password" id="confirm" name="confirm"><br>
            <p id="confirmerror"></p>

            <input type="submit" name="submit" value="Update Password">
            <a href="View_Profile.php"><input type="button" value="Back"></a>

        </form>
    </fieldset>

    <link rel="stylesheet" href="../CSS/Update_Password.css">
    <script src="../JS/Update_Password.js"></script>
</body>
</html>
