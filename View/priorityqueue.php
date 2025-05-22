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
  <title>Priority Queue</title>
  <link rel="stylesheet" href="../Asset/priorityqueue.css">
</head>
<body>

  <h2>Current Waitlist</h2>
  <ol id="queue"></ol>

  <label for="queueName">Enter your name to check position:</label>
  <input type="text" id="queueName">
  <button onclick="checkPosition()">Check Position</button>
  
  <p id="positionResult"></p>

  <script src="../Asset/priorityqueue.js"></script>

  <div class="nav-buttons">
  <!-- <button onclick="window.location.href='availabilityalerts.php'">Go to Availability Alerts</button> -->
  <a href="joinwaitlist.php"><input type="button" value="Back"></a>
  </div>

</body>
</html>
