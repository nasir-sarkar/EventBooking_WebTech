function validate() {
    let eventid = document.getElementById("eventid").value.trim();
    let eventiderror = document.getElementById("eventiderror");

    let valid = true;

    if (eventid === "") {
        eventiderror.innerHTML = "Please enter event ID!";
        valid = false;
    } else if (isNaN(eventid) || parseInt(eventid) <= 0) {
        eventiderror.innerHTML = "Event ID must be a positive number!";
        valid = false;
    } else {
        eventiderror.innerHTML = "";
    }

    return valid;
}
