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
  <title>Availability Alerts</title>
  <link rel="stylesheet" href="../Asset/availabilityalerts.css">
</head>
<body>

  <h2>Availability Alerts</h2>
  <p>Click the button to simulate a spot opening. The next person on the waitlist will be notified.</p>

  <button onclick="notifyNext()">Simulate Spot Opening</button>
  <p id="message"></p>

  <div class="nav-buttons">
    <button onclick="window.location.href='priorityqueue.php'">Go to Priority Queue</button>
    <a href="joinwaitlist.php"><input type="button" value="Back"></a>
    
  </div>

  <script src="../Asset/availabilityalerts.js"></script>
</body>
</html>
