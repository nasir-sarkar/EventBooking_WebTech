function validate() {
    let username = document.getElementById("username").value;
    let eventid = document.getElementById("eventid").value;
    let usernameError = document.getElementById("usernameerror");
    let eventidError = document.getElementById("eventiderror");
    let isValid = true;

    if (username === "") {
        usernameError.innerHTML = "Username cannot be empty!";
        usernameError.style.color = "red";
        isValid = false;
    } else {
        usernameError.innerHTML = "";
    }

    if (eventid === "") {
        eventidError.innerHTML = "Event ID cannot be empty!";
        eventidError.style.color = "red";
        isValid = false;
    } else {
        eventidError.innerHTML = "";
    }

    return isValid;
}
