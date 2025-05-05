function validate() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let captcha = document.getElementById("captcha").value;

    let nameError = document.getElementById("nameerror");
    let emailError = document.getElementById("emailerror");
    let messageError = document.getElementById("messageerror");
    let captchaError = document.getElementById("captchaerror");

    let isValid = true;

    if (name === "") {
        nameError.innerHTML = "Name cannot be empty!";
        isValid = false;
    } else {
        nameError.innerHTML = "";
    }

    if (email === "") {
        emailError.innerHTML = "Email cannot be empty!";
        isValid = false;
    } else if (!email.includes("@") || !email.includes(".")) {
        emailError.innerHTML = "Enter a valid email!";
        isValid = false;
    } else {
        emailError.innerHTML = "";
    }

    if (message === "") {
        messageError.innerHTML = "Message cannot be empty!";
        isValid = false;
    } else {
        messageError.innerHTML = "";
    }

    if (captcha !== "7") {
        captchaError.innerHTML = "CAPTCHA answer is incorrect!";
        isValid = false;
    } else {
        captchaError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Submission_Confirmation.html";
    }

    return isValid;
}
