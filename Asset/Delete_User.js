function validate() {
    let username = document.getElementById("username").value.trim();
    let usernameError = document.getElementById("usernameerror");

    let valid = true;

    if (username === "") {
        usernameError.innerHTML = "Please enter username!";
        valid = false;
    } else {
        usernameError.innerHTML = "";
    }

    return valid;
}
