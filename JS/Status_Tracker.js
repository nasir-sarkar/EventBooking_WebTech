function validate() {
    let trackId = document.getElementById("trackId").value;
    let trackIdError = document.getElementById("trackIderror");
    let isValid = true;

    if (trackId === "") {
        trackIdError.innerHTML = "Request ID cannot be empty!";
        trackIdError.style.color = "red";
        isValid = false;
    } else {
        trackIdError.innerHTML = "";
        trackIdError.style.color = "green";
    }

    return isValid;
}