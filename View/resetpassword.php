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
  <title>Reset Password</title>
  <link rel="stylesheet" href="../Asset/resetpassword.css">
</head>
<body>

  <h1>Reset Password</h1>

  <form onsubmit="resetPassword(); return false;">
    <label>New Password:</label><br>
    <input type="password" id="newpass1" placeholder="Enter new password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" id="newpass2" placeholder="Re-enter new password"><br><br>

    <p id="pass-error"></p> 

    <button onclick="resetPassword()">Reset Password</button>
  </form>

  <script src="../Asset/resetpassword.js"></script>
</body>
</html>
