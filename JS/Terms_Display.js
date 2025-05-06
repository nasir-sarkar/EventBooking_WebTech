function validate() {
    let eventDate = document.getElementById("eventDate").value;
    let eventDateError = document.getElementById("eventDateError");
    let isValid = true;

    if (eventDate === "") 
    {
        eventDateError.innerHTML = "Please select an event date to check refund eligibility.";
        eventDateError.style.color = "red";
        isValid = false;
    } 
    else 
    {
        eventDateError.innerHTML = "";
    }

    if (isValid) 
    {
        window.location.href = "Cancellation_Request.php";
    }

    return isValid;
}
