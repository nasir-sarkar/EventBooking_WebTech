function validate() {
    let seat = document.getElementById("seat").value;
    let selectError = document.getElementById("selecterror");
    let isValid = true;

    if (seat === "") {
        selectError.innerHTML = "Please select a seat!";
        selectError.style.color = "red";
        isValid = false;
    } else {
        selectError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Accessibility_Filter.html";
    }

    return isValid;
}

document.addEventListener("DOMContentLoaded", function () {
    const seatImage = document.getElementById("seatImage");

    seatImage.addEventListener("click", function () {
        seatImage.classList.toggle("zoomed");
    });
});

