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
  <title>Name Badge Generator & Printer</title>
  <link rel="stylesheet" href="../Asset/namebadge.css">
</head>
<body>

<div class="container">
  <h1>Name Badge Generator & Printer</h1>

  <input type="text" id="attendeeName" placeholder="Enter Name">
  <input type="text" id="attendeeRole" placeholder="Enter Role">
  <button onclick="generateBadge()">Generate Badge</button>
  <button onclick="printBadge()">Print Badge</button>


  <div id="badgeArea" class="badge">
    <h2 id="badgeName"></h2>
    <p id="badgeRole"></p>
    <p><em>Official Event Badge</em></p>
    <button onclick="printBadge()">Print Badge</button>
  </div>
</div>

<script src="../Asset/namebadge.js"></script>

<div class="nav-buttons">
  <button onclick="window.location.href='dietaryneeds.php'">Go to Dietary Requirements</button>
  <a href="regdashboard.php"><input type="button" value="Back"></a>
</div>

</body>
</html>
