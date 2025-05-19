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
  <title>Badge Printer</title>
  <link rel="stylesheet" href="../Asset/badgeprinter.css">
</head>
<body>

  <h1>Print Attendee Badge</h1>

  <label for="bname">Name:</label><br>
  <input type="text" id="bname"><br><br>

  <button onclick="printBadge()">Print Badge</button>

  <div id="badgeOutput"></div>

  <script src="../JS/badgeprinter.js"></script>

  <div class="nav-buttons">
  <button onclick="window.location.href='qrscanner.php'">Go to QR Scanner</button>
  <button onclick="window.location.href='attendeelookup.php'">Go to Attendee Lookup</button>
</div>

</body>
</html>
