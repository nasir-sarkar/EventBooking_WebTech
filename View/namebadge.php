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
  <title>Name Badge Generator</title>
  <link rel="stylesheet" href="../Asset/namebadge.css">
</head>
<body>

<div class="container">
  <h1>Name Badge Generator</h1>

  <input type="text" id="attendeeName" placeholder="Enter Name">
  <input type="text" id="attendeeRole" placeholder="Enter Role">
  <button onclick="generateBadge()">Generate Badge</button>

  <div id="badgeArea" class="badge">
    <h2 id="badgeName"></h2>
    <p id="badgeRole"></p>
  </div>
</div>

<script src="../JS/namebadge.js"></script>

<div class="nav-buttons">
  <button onclick="window.location.href='regdashboard.php'">Go to Attendee List</button>
  <button onclick="window.location.href='dietaryneeds.php'">Go to Dietary Requirements</button>
</div>

</body>
</html>
