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
  <title>Ticket Comparison</title>
  <link rel="stylesheet" href="../Asset/packagecomparison.css">
  <script src="../Asset/packageComparison.js" defer></script>
</head>

<body>

  <h2 class="title">Compare Ticket Packages</h2>

  <table class="comparison-table">
    <tr>
      <th>Feature</th>
      <th>Standard</th>
      <th>Premium</th>
      <th>VIP</th>
    </tr>
    <tr>
      <td>Seating</td>
      <td>General</td>
      <td>Better</td>
      <td>Best</td>
    </tr>
    <tr>
      <td>Entry</td>
      <td>Regular</td>
      <td>Fast</td>
      <td>All Access</td>
    </tr>
    <tr>
      <td>Backstage</td>
      <td>No</td>
      <td>No</td>
      <td>Yes</td>
    </tr>
  </table>

  <form id="packageForm" action="../PHP/packageComparison.php" method="post">
    <div class="selection">
      <label for="ticketChoice"><b>Select a Ticket Package:</b></label>
      <select name="ticketChoice" id="ticketChoice">
        <option value="">--Choose--</option>
        <option value="Standard">Standard</option>
        <option value="Premium">Premium</option>
        <option value="VIP">VIP</option>
      </select>

      <div class="nav-buttons">
  <button onclick="window.location.href='ttgrid.php'">Go to Ticket Tier Grid</button>
  <button onclick="window.location.href='upsellprompts.php'">Go to Upsell Prompt</button>
</div>


    </div>

    <br>
    <div id="result" style="margin-top: 10px;"></div>
    <br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
