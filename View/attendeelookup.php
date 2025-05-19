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
  <title>Attendee Lookup</title>
  <link rel="stylesheet" href="../Asset/attendeelookup.css">
</head>
<body>

  <h1>Attendee Lookup</h1>

  <input type="text" id="lookup" placeholder="Enter attendee name">
  <button onclick="searchAttendee()">Search</button>

  <p id="lookupResult"></p>

  <script src="../JS/attendeelookup.js"></script>

  <div class="nav-buttons">
  <button onclick="window.location.href='qrscanner.php'">Go to QR Scanner</button>
  <button onclick="window.location.href='badgeprinter.php'">Go to Badge Printer</button>
</div>

</body>
</html>
