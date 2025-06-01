<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ticket Tiers</title>
  <link rel="stylesheet" href="../Asset/ttgrid.css">
</head>
<body>

  <h1>Ticket Types</h1>


  <form method="post" action="../Controller/passInfo.php" id="ticketForm">

    <div class="filter-panel">
      <label><input type="radio" name="ticket_type" value="Standard" required> Standard - ৳2500</label><br>
      <label><input type="radio" name="ticket_type" value="Premium"> Premium - ৳4000</label><br>
      <label><input type="radio" name="ticket_type" value="VIP"> VIP - ৳6000</label>
    </div>

    <div class="nav-buttons" style="margin-top:20px;">
      <button type="submit">Submit</button>
      <button type="button" onclick="window.location.href='upsellprompts.php'">Go to Upsell Prompt</button>
      <button type="button" onclick="window.location.href='packagecomparison.php'">Go to Package Comparison</button>
    </div>

  </form>

  <div style="margin-top: 20px;">
    <a href="Seat_Zoom.php"><input type="button" value="Back"></a>
  </div>

  <script src="../Asset/ttgrid.js"></script>

</body>
</html>
