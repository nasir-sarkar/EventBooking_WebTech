function validate() {
    let old = document.getElementById("old").value;
    let newPass = document.getElementById("new").value;
    let confirm = document.getElementById("confirm").value;
    let oldError = document.getElementById("olderror");
    let newError = document.getElementById("newerror");
    let confirmError = document.getElementById("confirmerror");
    let isValid = true;

    if (old === "") {
        oldError.innerHTML = "Old password is required!";
        isValid = false;
    } else {
        oldError.innerHTML = "";
    }

    if (newPass.length < 6) {
        newError.innerHTML = "Password must be at least 6 characters!";
        isValid = false;
    } else {
        newError.innerHTML = "";
    }

    if (confirm !== newPass) {
        confirmError.innerHTML = "Passwords do not match!";
        isValid = false;
    } else {
        confirmError.innerHTML = "";
    }

    return isValid;
}
