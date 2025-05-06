function validate() {
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

    return isValid;
}
