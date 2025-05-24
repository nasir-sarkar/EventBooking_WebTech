function validate() {
    let eventId = document.getElementById("eventId").value;
    let eventIdError = document.getElementById("eventIderror");
    let isValid = true;

    if (eventId === "") {
        eventIdError.innerHTML = "Request ID cannot be empty!";
        eventIdError.style.color = "red";
        isValid = false;
    } else {
        eventIdError.innerHTML = "";
        eventIdError.style.color = "green";
    }

    return isValid;
}