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

<body>

  <div class="header">Event Booking</div>

  <div class="page-center">
    <fieldset>
      <legend><b>PARKING MAP</b></legend>

      <img src="parkinglot.jpeg" id="parkingImage">

      <div class="btn-group">
        <a href="Interactive_Vanue_Map.php">
          <input type="button" value="Back">
        </a>
      </div>

    </fieldset>
  </div>

</body>
</html>
