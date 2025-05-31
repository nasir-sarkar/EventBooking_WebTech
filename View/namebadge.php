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

  <div id="badge" class="badge">
    <h2>Badge <span id="nameSpan" class="badge-content"></span></h2>
    <p><span id="roleSpan"></span></p>
  </div>
</div>

<div class="nav-buttons">
  <button onclick="window.location.href='dietaryneeds.php'">Go to Dietary Requirements</button>
  <a href="regdashboard.php"><input type="button" value="Back"></a>
</div>

<script src="../Asset/namebadge.js"></script>

</body>
</html>
