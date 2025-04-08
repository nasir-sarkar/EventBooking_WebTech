function validate() {
    let code = document.getElementById("code").value;
    let codeError = document.getElementById("codeerror");
    let isValid = true;

    if (code === "") {
        codeError.innerHTML = "Promo code cannot be empty!";
        codeError.style.color = "red";
        isValid = false;
    } else if (code.length !== 5) {
        codeError.innerHTML = "Promo code must be exactly 5 characters!";
        codeError.style.color = "red";
        isValid = false;
    } else {
        codeError.innerHTML = "";
    }

    return isValid;
}
