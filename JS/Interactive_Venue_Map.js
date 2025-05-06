function validate() {
    let section = document.getElementById("section").value;
    let selectError = document.getElementById("selecterror");
    let isValid = true;

    if (section === "") {
        selectError.innerHTML = "Please select a section!";
        selectError.style.color = "red";
        isValid = false;
    } else {
        selectError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Seat_Zoom.php";
    }

    return isValid;
}