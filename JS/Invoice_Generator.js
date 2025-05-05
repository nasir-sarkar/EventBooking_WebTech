function validate() {
    let email = document.getElementById("email").value;
    let emailError = document.getElementById("emailerror");
    let isValid = true;

    if (email === "") {
        emailError.innerHTML = "Email cannot be empty!";
        emailError.style.color = "red";
        isValid = false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        emailError.innerHTML = "Please enter a valid email address!";
        emailError.style.color = "red";
        isValid = false;
    } else {
        emailError.innerHTML = "";
    }

    return isValid;
}
