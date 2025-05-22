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
  <title>Upsell Prompt</title>
  <link rel="stylesheet" href="../Asset/upsellprompts.css">
  <script src="../Asset/upsellprompts.js" defer></script>
</head>

<body>

  <div class="upsell-box">
    <h2>Want More Benefits?</h2>
    <p>Upgrade to <b>VIP</b> for backstage access, free merch, and exclusive seating!</p>
    <p>Just ৳2000 more than Premium</p>
    <button id="upgradeBtn">Upgrade to VIP</button>
    <p id="message"></p>

    <!-- <div class="nav-buttons"> -->
    <!-- <button onclick="window.location.href='ttgrid.php'">Go to Ticket Tier Grid</button> -->
    <!-- <button onclick="window.location.href='packageComparison.php'">Go to Package Comparison</button> -->
    <!-- </div> -->

  <div class="nav-buttons">
    <a href="ttgrid.php"><input type="button" value="Back"></a>
  </div>

  </div>

  

</body>
</html>
