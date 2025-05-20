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
    <title>System Settings</title>
</head>
<body>
    <div class="header">Event Booking</div>

    <fieldset>
        <legend><b>SYSTEM SETTINGS</b></legend>
         <form method="post" action="../Asset/System_Settings_.php" onsubmit="return validate()">
            <label for="setting">Select Setting:</label><br>
            <select id="setting" name="setting">
                <option value="">Select Option</option>
                <option value="maintenance">Toggle Maintenance Mode</option>
                <option value="reset">Reset Event Data</option>
            </select><br>
            <p id="settingerror"></p>

            <label for="adminpass">Confirm Admin Password:</label><br>
            <input type="password" id="adminpass" name="adminpass"><br>
            <p id="adminpasserror"></p>

            <input type="submit" name="submit" value="Apply Settings">
            <a href="Admin_Panel.php"><input type="button" value="Back"></a>
        </form>
    </fieldset>

    <link rel="stylesheet" href="../Asset/System_Settings.css">
    <script src="../Asset/System_Settings.js"></script>
</body>
</html>
