function validate() {
    let username = document.getElementById("username").value.trim();
    let eventId = document.getElementById("eventId").value.trim();
    let reason = document.getElementById("reason").value.trim();

    let usernameError = document.getElementById("usernameerror");
    let eventIdError = document.getElementById("eventIderror");
    let reasonError = document.getElementById("reasonerror");

    let valid = true;

    if (username === "") {
        usernameError.innerHTML = "Username cannot be empty!";
        valid = false;
    } else {
        usernameError.innerHTML = "";
    }

    if (eventId === "") {
        eventIdError.innerHTML = "Event ID cannot be empty!";
        valid = false;
    } else {
        eventIdError.innerHTML = "";
    }

    if (reason === "") {
        reasonError.innerHTML = "Reason cannot be empty!";
        valid = false;
    } else {
        reasonError.innerHTML = "";
    }

    return valid;
}
