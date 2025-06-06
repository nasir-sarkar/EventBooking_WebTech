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
      <li><a href="https://royal-blue-uttara.hotels-in-dhaka.com/" target="_blank">Hotel One</a></li>
      <li><a href="https://www.radissonhotels.com/en-us/hotels/radisson-blu-dhaka" target="_blank">Hotel Two</a></li>
      <li><a href="https://www.ihg.com/intercontinental/hotels/us/en/dhaka/dachb/hoteldetail" target="_blank">Hotel Three</a></li>
    </ul>
  </div>

  <div class="nav-buttons">
    <a href="parkingmap.php"><input type="button" value="Back"></a>
  </div>
</body>
</html>
