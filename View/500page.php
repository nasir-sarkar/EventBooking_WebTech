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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>500 - Server Error</title>
  <link rel="stylesheet" href="../Asset/500.css">
</head>
<body>
  <div class="error-container">
    <h1>500 - Server Error</h1>
    <!-- <p>Sorry, something went wrong on our end. Please try again later.</p> -->
    <a href="/">Go back to the previous page</a>
  </div>
</body>
</html>
