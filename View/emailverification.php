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
  <title>Email Verification</title>
  <link rel="stylesheet" href="../Asset/emailverification.css">
  <script src="../Asset/emailverification.js" defer></script>
</head>
<body>
  <div class="container">
    <h2>Verify Your Email</h2>
    <p>A verification code has been sent to your email.</p>
    <form id="verify-form" action="javascript:void(0);">
      <input type="text" id="verification-code" placeholder="Enter code" required>
      <p id="verify-error"></p>
      <button type="submit">Verify</button>
    </form>
  </div>
</body>
</html>
