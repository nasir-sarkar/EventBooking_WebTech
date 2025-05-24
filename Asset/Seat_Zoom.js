function validate() {
    let seat = document.getElementById("seat").value;
    let access = document.getElementById("access").value;

    let selectError = document.getElementById("selecterror");
    let accessError = document.getElementById("accesserror");

    let isValid = true;

    if (seat === "") {
        selectError.innerHTML = "Please select a seat!";
        selectError.style.color = "red";
        isValid = false;
    } else {
        selectError.innerHTML = "";
    }

    if (access === "") {
        accessError.innerHTML = "Please select an accessibility option!";
        accessError.style.color = "red";
        isValid = false;
    } else {
        accessError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Accessibility_Filter.php";
    }

    return isValid;
}

document.addEventListener("DOMContentLoaded", function () {
    const seatImage = document.getElementById("seatImage");

    seatImage.addEventListener("click", function () {
        seatImage.classList.toggle("zoomed");
    });
});
