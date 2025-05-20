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

  <h2>Search and Filter Ticket Types</h2>

  <div class="search-panel">
    <input type="text" id="searchInput" placeholder="Search ticket types..." onkeyup="filterTicketResults()">
  </div>

  <div class="filter-panel">
    <label><input type="checkbox" class="ticket-category" value="Standard" onchange="filterTicketResults()"> Standard</label>
    <label><input type="checkbox" class="ticket-category" value="Premium" onchange="filterTicketResults()"> Premium</label>
    <label><input type="checkbox" class="ticket-category" value="VIP" onchange="filterTicketResults()"> VIP</label>
  </div>

  <ul id="resultsList" class="results-list">
    <li data-type="Standard">Standard - ৳2500</li>
    <li data-type="Premium">Premium - ৳4000</li>
    <li data-type="VIP">VIP - ৳6000</li>
  </ul>

  <div class="nav-buttons">
    <button onclick="window.location.href='Discount_Entry.php'">Submit</button>
    <button onclick="window.location.href='upsellprompts.php'">Go to Upsell Prompt</button>
    <button onclick="window.location.href='packagecomparison.php'">Go to Package Comparison</button>
  </div>

  <script src="../Asset/ttgrid.js"></script>

</body>
</html>
