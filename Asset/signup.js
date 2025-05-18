function validate()
{
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let repeatPassword = document.getElementById('repeatpassword').value;

    let usererror = document.getElementById('usererror');
    let emailerror = document.getElementById('emailerror');
    let passerror = document.getElementById('passerror');
    let repeatpasserror = document.getElementById('repeatpasserror');
    let validerror = document.getElementById('validerror');

    let isValid = true;

    usererror.innerHTML = "";
    emailerror.innerHTML = "";
    passerror.innerHTML = "";
    repeatpasserror.innerHTML = "";
    validerror.innerHTML = "";

    
    if(username == "")
    {
        usererror.innerHTML = "Username is required";
        usererror.style.color = "red";
        isValid = false;
    }

    if(email == "")
    {
        emailerror.innerHTML = "Email is required";
        emailerror.style.color = "red";
        isValid = false;
    }

    if(password == "")
    {
        passerror.innerHTML = "Password is required";
        passerror.style.color = "red";
        isValid = false;
    }

    if(password !== repeatPassword)
    {
        repeatpasserror.innerHTML = "Passwords do not match";
        repeatpasserror.style.color = "red";
        isValid = false;
    }

    if(username != "" && password != "" && username == password)
    {
        validerror.innerHTML = "Username and password cannot be the same";
        validerror.style.color = "red";
        isValid = false;
    }

    return isValid;
}
