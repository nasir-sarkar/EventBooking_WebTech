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
  <title>Parking Map</title>
  <link rel="stylesheet" href="../Asset/parkingmap.css">
</head>

<div class="nav-buttons">
  <button onclick="window.location.href='publictransportguide.php'">Go to Public Transport Guide</button>
</div>


<body>
  <h2>Parking Map</h2>
  <img src="parkinglot.jpeg" alt="Parking Lot" height="80%" width="80%">

  <div class="nav-buttons">
  <a href="Interactive_Vanue_Map.php"><input type="button" value="Back"></a>
  </div>
</body>
</html>
