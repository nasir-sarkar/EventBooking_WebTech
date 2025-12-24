<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="../Asset/Login.css">
  <script src="../Asset/login.js" defer></script>
</head>
<body>
  <div class="header">Event Booking</div>

  <div class="login-container">
    <div class="wrapper">
      <h2>Login</h2>
      <p id="error-message"></p>
      <form onsubmit="return validate(event)"> 
        <div class="input-group">
          <label for="email">
            <span>@</span>
          </label>
          <input type="email" name="email" id="email" placeholder="Email" autocomplete="email">
        </div> 
        <p id="email-error"></p>

        <div class="input-group">
          <label for="password">
            <img src="lock.png" height="20" width="20" alt="lock icon">
          </label>
          <input type="password" name="password" id="password" placeholder="Password" autocomplete="current-password">
        </div> 
        <p id="pass-error"></p>

        <button type="submit">Login</button>
        <a href="signup.html"><input type="button" value="Signup"></a>
        <p id="valid-error"></p>
      </form>
      <p><a href="forgotPassword.html">Forgot Password?</a></p>
    </div>
  </div>
</body>
</html>
