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
  <img src="parkinglot.jpeg" alt="Parking Lot" usemap="#parkingmap" height="80%" width="80%">
  <map name="parkingmap">
    <area shape="rect" coords="34,44,270,350" alt="Zone A" href="#zoneA">
    <area shape="rect" coords="290,172,333,250" alt="Zone B" href="#zoneB">
    <area shape="circle" coords="337,300,44" alt="Zone C" href="#zoneC">
  </map>

  <div class="nav-buttons">
  <a href="Interactive_Vanue_Map.php"><input type="button" value="Back"></a>
  </div>
</body>
</html>
