function validate() {
    let setting = document.getElementById("setting").value;
    let adminpass = document.getElementById("adminpass").value;
    let settingError = document.getElementById("settingerror");
    let passError = document.getElementById("adminpasserror");
    let isValid = true;

    if (setting === "") {
        settingError.innerHTML = "Please select a system setting!";
        settingError.style.color = "red";
        isValid = false;
    } else {
        settingError.innerHTML = "";
    }

    if (adminpass === "") {
        passError.innerHTML = "Please enter the admin password!";
        passError.style.color = "red";
        isValid = false;
    } else {
        passError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Abc.php";
    }

    return isValid;
}
