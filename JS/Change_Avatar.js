function validate() {
    let avatar = document.getElementById("avatar").value;
    let avatarError = document.getElementById("avatarerror");
    let isValid = true;

    if (avatar === "") {
        avatarError.innerHTML = "Please select an image!";
        isValid = false;
    } else {
        avatarError.innerHTML = "";
    }

    return isValid;
}
