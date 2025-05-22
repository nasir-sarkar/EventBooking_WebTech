<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Notification Settings</title>
  <link rel="stylesheet" href="../Asset/notificationsettings.css">
</head>
<body>

  <h1>Notification Settings</h1>

  <form id="settings-form">
    <label>
      <input type="checkbox" id="email" checked> Email Notifications
    </label><br><br>

    <label>
      <input type="checkbox" id="push" checked> Push Notifications
    </label><br><br>

    <button type="button" id="saveButton">Save Preferences</button> 
  </form>

  <br>
  <a href="notificationcenter.php">Back</a>

  <script src="../Asset/notificationsettings.js"></script>
</body>
</html>
