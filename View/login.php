<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../Asset/login.css">
  <script src="../Asset/login.js" defer></script>
</head>
<body>
  <div class="wrapper">
    <h1>Login</h1>
    <p id="error-message"></p>
    <form onsubmit="return validate(event)"> <!-- Removed action/method, added event -->
       <div>
        <label for="email">
            <span>@</span>
        </label>
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="email">
        <p id="email-error"></p>
       </div> 
       <div>
        <label for="password">
            <img src="lock.png" height="24" width="24" alt="lock icon">
        </label>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="current-password">
        <p id="pass-error"></p>
       </div> 
       <button type="submit">Login</button>
       <a href="signup.html"><input type="button" value="Signup"></a>
       <p id="valid-error"></p>
    </form>
    <p><a href="forgotpassword.html">Forgot Password?</a></p>
  </div>
</body>
</html>