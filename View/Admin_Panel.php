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
    <title>Admin Panel</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
        <legend><b>ADMIN PANEL</b></legend>
        <form>

            <img src="admin.jpg" id="event-booking">

            <div class="button-single">
                <a href="User_Management.php"><input type="button" id="continue" value="User Management"></a>
            </div>

            <div class="button">
                <a href="Content_Moderation.php"><input type="button" value="Content Moderation"></a>
                <a href="System_Settings.php"><input type="button" value="System Settings"></a>
                <a href="../Controller/logout.php"><input type="button" value="Logout"></a>
            </div>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/Admin_Panel.css">
</body>
</html>
