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
  <title>Public Transport Guide</title>
  <link rel="stylesheet" href="../Asset/publictransportguide.css">
</head>

<div class="nav-buttons">
  <button onclick="window.location.href='parkingmap.php'">Go to Parking Map</button>
</div>


<body>
  <h2>Public Transport Guide</h2>
  <div class="transport-option">
    <h3>Bus</h3>
    <p>Route 5: Downtown to Venue</p>
    <p>Status: <span class="status">On Time</span></p>
  </div>
  <div class="transport-option">
    <h3>Subway</h3>
    <p>Line A: Central Station to Venue</p>
    <p>Status: <span class="status">Delayed</span></p>
  </div>
  <div class="transport-option">
    <h3>Taxi</h3>
    <p>Available at Main Entrance</p>
    <p>Status: <span class="status">Available</span></p>
  </div>
  <div class="hotel-booking">
    <h3>Nearby Hotels</h3>
    <ul>
      <li><a href="https://hotel1.example.com" target="_blank">Hotel One</a></li>
      <li><a href="https://hotel2.example.com" target="_blank">Hotel Two</a></li>
      <li><a href="https://hotel3.example.com" target="_blank">Hotel Three</a></li>
    </ul>
  </div>
</body>
</html>
