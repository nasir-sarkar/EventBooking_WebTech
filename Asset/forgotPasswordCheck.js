function validateForgotPassword() {
    let email = document.getElementById("email").value.trim();
    let newPassword = document.getElementById("newPassword").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    let emailError = document.getElementById("emailError");
    let newPasswordError = document.getElementById("newPasswordError");
    let confirmPasswordError = document.getElementById("confirmPasswordError");

    // Clear previous errors
    emailError.innerHTML = "";
    newPasswordError.innerHTML = "";
    confirmPasswordError.innerHTML = "";

    let valid = true;

    // Email
    if (email === "") {
        emailError.innerHTML = "Please enter your email!";
        valid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        emailError.innerHTML = "Please enter a valid email!";
        valid = false;
    }

    // New password
    if (newPassword === "") {
        newPasswordError.innerHTML = "Please enter a new password!";
        valid = false;
    } else if (newPassword.length < 6) {
        newPasswordError.innerHTML = "Password must be at least 6 characters!";
        valid = false;
    }

    // Confirm password
    if (confirmPassword === "") {
        confirmPasswordError.innerHTML = "Please confirm your password!";
        valid = false;
    } else if (confirmPassword !== newPassword) {
        confirmPasswordError.innerHTML = "Passwords do not match!";
        valid = false;
    }

    return valid;
}


// Optional: Go back function
function goBack() {
    window.history.back();
}
