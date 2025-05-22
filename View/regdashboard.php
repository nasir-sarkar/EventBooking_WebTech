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
  <title>Registration Dashboard</title>
  <link rel="stylesheet" href="../Asset/regdashboard.css">
</head>
<body>

  <div class="container">
    <h1>Attendee List</h1>

    <input type="text" id="searchInput" placeholder="Search Attendee..." onkeyup="searchAttendees()">

    <table id="attendeeTable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Ticket Type</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Alice</td><td>alice@example.com</td><td>VIP</td></tr>
        <tr><td>Bob</td><td>bob@example.com</td><td>General</td></tr>
        <tr><td>Charlie</td><td>charlie@example.com</td><td>Student</td></tr>
      </tbody>
    </table>

    <button onclick="exportCSV()">Export CSV</button>
  </div>

  <script src="../Asset/regdashboard.js"></script>

  <div class="nav-buttons">
  <button onclick="window.location.href='namebadge.php'">Go to Name Badge Generator</button>
  <!-- <button onclick="window.location.href='dietaryneeds.php'">Go to Dietary Requirements</button> -->
</div>

  <div class="nav-buttons">
  <a href="Event_Cards.php"><input type="button" value="Back"></a>
  </div>


</body>
</html>
