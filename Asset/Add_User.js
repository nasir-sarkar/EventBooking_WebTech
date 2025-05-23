function validate() {
    let fullname = document.getElementById("fullname").value.trim();
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let usertype = document.getElementById("usertype").value.trim();

    let fullnameError = document.getElementById("fullnameerror");
    let usernameError = document.getElementById("usernameerror");
    let passwordError = document.getElementById("passworderror");
    let emailError = document.getElementById("emailerror");
    let phoneError = document.getElementById("phoneerror");
    let usertypeError = document.getElementById("usertypeerror");

    let valid = true;

    if (fullname === "") {
        fullnameError.innerHTML = "Please enter full name!";
        valid = false;
    } else {
        fullnameError.innerHTML = "";
    }

    if (username === "") {
        usernameError.innerHTML = "Please enter username!";
        valid = false;
    } else {
        usernameError.innerHTML = "";
    }

    if (password === "") {
        passwordError.innerHTML = "Please enter password!";
        valid = false;
    } else {
        passwordError.innerHTML = "";
    }

    if (email === "") {
        emailError.innerHTML = "Please enter email!";
        valid = false;
    } else {
        emailError.innerHTML = "";
    }

    if (phone === "") {
        phoneError.innerHTML = "Please enter phone number!";
        valid = false;
    } else {
        phoneError.innerHTML = "";
    }

    if (usertype === "") {
        usertypeError.innerHTML = "Please enter user type!";
        valid = false;
    } else {
        usertypeError.innerHTML = "";
    }

    return valid;
}
