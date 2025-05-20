function validate() {
    let bookingId = document.getElementById("bookingId").value;
    let reason = document.getElementById("reason").value;
    let bookingIdError = document.getElementById("bookingIderror");
    let reasonError = document.getElementById("reasonerror");
    let isValid = true;

    if (bookingId === "") {
        bookingIdError.innerHTML = "Booking ID cannot be empty!";
        bookingIdError.style.color = "red";
        isValid = false;
    } else {
        bookingIdError.innerHTML = "";
    }

    if (reason === "") {
        reasonError.innerHTML = "Please provide a reason for cancellation!";
        reasonError.style.color = "red";
        isValid = false;
    } else {
        reasonError.innerHTML = "";
    }

    return isValid;
}
