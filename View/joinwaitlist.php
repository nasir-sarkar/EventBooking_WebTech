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
  <title>Join Waitlist</title>
  <link rel="stylesheet" href="../Asset/joinwaitlist.css">
</head>
<body>

  <h2 id="head">Join the Event Waitlist</h2>

  <form id="waitlist-form" onsubmit="return validate()">
   <input type="text" id="name" placeholder="Your Name" onkeyup="changeText()">
    <p id="name-error"></p>

    <input type="email" id="email" placeholder="Your Email">
    <p id="email-error"></p>

    <button type="submit">Join Waitlist</button>
    <p id="valid-error"></p>
  </form>

  <div class="nav-buttons">
    <button onclick="window.location.href='availabilityalerts.php'">Go to Availability Alerts</button>
    <button onclick="window.location.href='priorityqueue.php'">Go to Priority Queue</button>
    <button onclick="window.location.href='attendeelookup.php'">Go to Attendee Lookup</button>
  </div>

  <div class="nav-buttons">
    <a href="Event_Cards.php"><input type="button" value="Back"></a>
  </div>

  <script src="../Asset/joinwaitlist.js"></script>

</body>
</html>
