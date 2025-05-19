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
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../Asset/forgotpassword.css">
  <script src="../Asset/forgotpassword.js" defer></script>
</head>
<body>
  <div class="container">
    <h2>Forgot Password</h2>
    <p>Enter your email to receive a reset link.</p>
    <form id="forgot-form" action="javascript:void(0);">
      <input type="email" id="forgot-email" placeholder="Enter your email" required>
      <button type="submit">Send Reset Link</button>
    </form>
    <p><a href="../View/login.php">Back to Login</a></p>
  </div>
</body>
</html>
