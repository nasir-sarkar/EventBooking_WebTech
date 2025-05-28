function validate(event) {
    event.preventDefault(); 
    
    let email = document.getElementById('email').value.trim();
    let password = document.getElementById('password').value.trim();

    let emailError = document.getElementById('email-error');
    let passError = document.getElementById('pass-error');
    let validError = document.getElementById('valid-error');

    let isValid = true;

    emailError.innerHTML = "";
    passError.innerHTML = "";
    validError.innerHTML = "";

    if (email === "") {
        emailError.innerHTML = "Email is required";
        emailError.style.color = "red";
        isValid = false;
    }

    if (password === "") {
        passError.innerHTML = "Password is required";
        passError.style.color = "red";
        isValid = false;
    }

    if (isValid && email === password) {
        validError.innerHTML = "Email and password should not be the same";
        validError.style.color = "orange";
        isValid = false;
    }

    if (!isValid) {
        return false;
    }

    
    const loginData = JSON.stringify({
        email: email,
        password: password
    });


    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../Controller/loginCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(loginData);

    xhttp.onreadystatechange = function() {
        if (this.readyState === 4) {
            if (this.status === 200) {
                const response = this.responseText.trim();
                
                if (response === "admin") {
                    window.location.href = "../View/Admin_Panel.php";
                } 
                else if (response === "user") {
                    window.location.href = "../View/View_Profile.php";
                }
                else {
                    document.getElementById('error-message').innerHTML = response;
                    document.getElementById('error-message').style.color = "red";
                }
            } else {
                document.getElementById('error-message').innerHTML = "Server error occurred";
                document.getElementById('error-message').style.color = "red";
            }
        }
    };
}