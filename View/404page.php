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
  <title>404 - Event Not Found</title>
  <link rel="stylesheet" href="../Asset/404.css">
</head>
<body>
  <div class="error-container">
    <h1>404 - Page Not Found</h1>
    <a href="/">Go back to the previous page</a>
  </div>
</body>
</html>
