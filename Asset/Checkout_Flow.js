function validate() {
    let method = document.getElementById("method").value;
    let methodError = document.getElementById("methoderror");
    let isValid = true;

    if (method === "") {
        methodError.innerHTML = "Please select a payment method!";
        methodError.style.color = "red";
        isValid = false;
    } else {
        methodError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Saved_Cards.php";
    }

    return isValid;
}
