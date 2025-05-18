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
    <form onsubmit="return validate()" method="post" action="../Controller/loginCheck.php">

       <div>
        <label for="email">
            <span>
                @         
            </span>
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
       <a href="signup.php"><input type="button" value="Signup"></a>
       <p id="valid-error"></p>
    </form>

    <p><a href="../View/forgotpassword.html">Forgot Password?</a></p>

  </div>

</body>
</html>
