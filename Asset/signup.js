function validate(event) {
  event.preventDefault(); 

  let fullname = document.getElementById('fullname').value.trim();
  let username = document.getElementById('username').value.trim();
  let email = document.getElementById('email').value.trim();
  let phone = document.getElementById('phone').value.trim();
  let password = document.getElementById('password').value;
  let repeatPassword = document.getElementById('repeatpassword').value;

  let fullnameerror = document.getElementById('fullnameerror');
  let usererror = document.getElementById('usererror');
  let emailerror = document.getElementById('emailerror');
  let phoneerror = document.getElementById('phoneerror');
  let passerror = document.getElementById('passerror');
  let repeatpasserror = document.getElementById('repeatpasserror');
  let validerror = document.getElementById('validerror');

  let isValid = true;

  fullnameerror.innerHTML = "";
  usererror.innerHTML = "";
  emailerror.innerHTML = "";
  phoneerror.innerHTML = "";
  passerror.innerHTML = "";
  repeatpasserror.innerHTML = "";
  validerror.innerHTML = "";

  if (fullname === "") {
    fullnameerror.innerHTML = "Full name is required";
    fullnameerror.style.color = "red";
    isValid = false;
  }

  if (username === "") {
    usererror.innerHTML = "Username is required";
    usererror.style.color = "red";
    isValid = false;
  }

  if (email === "" || !email.includes("@")) {
    emailerror.innerHTML = "Enter a valid email!";
    emailerror.style.color = "red";
    isValid = false;
  }

  if (phone === "" || phone.length < 11) {
    phoneerror.innerHTML = "Enter a valid phone number!";
    phoneerror.style.color = "red";
    isValid = false;
  }

  if (password === "") {
    passerror.innerHTML = "Password is required";
    passerror.style.color = "red";
    isValid = false;
  }

  if (password !== repeatPassword) {
    repeatpasserror.innerHTML = "Passwords do not match";
    repeatpasserror.style.color = "red";
    isValid = false;
  }

  if (username !== "" && password !== "" && username === password) {
    validerror.innerHTML = "Username and password cannot be the same";
    validerror.style.color = "red";
    isValid = false;
  }

  if (!isValid) {
    return;
  }

  const xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../Model/userModel.php', true);
  xhttp.setRequestHeader("Content-type", "application/json");

  const info = JSON.stringify({
      action: 'signup', 
    fullname: fullname,
    username: username,
    email: email,
    phone: phone,
    password: password,
    //repeatPassword: repeatPassword
  });

  xhttp.send(info);

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        const response = this.responseText.trim();
        if (response === 'success') {
          alert("Signup successful");
          window.location.href = "../View/login.php";
        } else {
          alert("Error: " + response);
        }
      } else {
        alert("Server error occurred.");
      }
    }
  };
}