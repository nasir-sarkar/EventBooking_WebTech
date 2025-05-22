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
    <title>Notification Center</title>
    <link rel="stylesheet" href="../Asset/notificationcenter.css">
</head>
<body>

    <h1 id="head">Notification Center</h1>

    <div id="bell" onclick="toggleNotifications()">
        <img src="bell.png" alt="bell icon"> <span id="unread-count"><b>2</b></span>
    </div>

    <div id="notifications" style="display: none;">
        <div class="notification">
            <p><b>Notification:</b> Your ticket for Tech Fest 2025 is confirmed.</p>
            <span>5 minutes ago</span>
        </div>
        <div class="notification">
            <p><b>Notification:</b> Your event starts in 1 hour.</p>
            <span>1 hour ago</span>
        </div>
    </div>

    <button onclick="clearNotifications()">Clear All</button>
    <br><br>
    <a href="notificationsettings.php">Go to Notification Settings</a>
      <br><br>
    <a href="View_Profile.php">Back</a>

    <script src="../Asset/notificationcenter.js"></script>
</body>
</html>
