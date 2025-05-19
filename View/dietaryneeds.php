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
  <title>Dietary Requirements</title>
  <link rel="stylesheet" href="../Asset/dietaryneeds.css">
</head>
<body>

<div class="container">
  <h1>Track Dietary Requirements</h1>

  <form onsubmit="addDietaryInfo(event)">
    <input type="text" id="dietName" placeholder="Attendee Name" required>
    <input type="text" id="dietNote" placeholder="Special Requirement" required>
    <button type="submit">Add</button>
  </form>

  <ul id="dietList"></ul>
</div>

<script src="../JS/dietaryneeds.js"></script>

<div class="nav-buttons">
  <button onclick="window.location.href='regdashboard.php'">Go to Attendee List</button>
  <button onclick="window.location.href='namebadge.php'">Go to Name Badge Generator</button>
</div>


</body>
</html>
