function validate() {
    let access = document.getElementById("access").value;
    let accessError = document.getElementById("accesserror");
    let isValid = true;

    if (access === "") {
        accessError.innerHTML = "Please select an accessibility option!";
        accessError.style.color = "red";
        isValid = false;
    } else {
        accessError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "ttgrid.html";
    }

    return isValid;
}
