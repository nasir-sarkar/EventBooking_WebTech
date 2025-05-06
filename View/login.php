<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <script src="../JS/login.js" defer></script>
</head>
<body>

  <div class="wrapper">
    <h1>Login</h1>
    <p id="error-message" ></p>
    <form onsubmit="return validate()" method="post" action="loginCheck.php">

       <div>
        <label for="email-input">
            <span>
                @         
            </span>
        </label>
        <input type="email" name="email" id="email" placeholder="Email">
        <p id="email-error"></p>
       </div> 
       <div>
        <label for="password-input">
            <img src="lock.png" height="24" width="24" alt="lock icon">
        </label>
        <input type="password" name="password" id="password" placeholder="Password">
        <p id="pass-error"></p>
       </div> 
       <button type="submit">Login</button>
       <a href="signup.php"><input type="button" value="Signup"></a>
       <p id="valid-error"></p>
    </form>

    <p><a href="../View/forgotpassword.html">Forgot Password?</a></p>

  </div>

</body>
</html>
