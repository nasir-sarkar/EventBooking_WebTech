function validate() {
    let method = document.getElementById("method").value;
    let cardnum = document.getElementById("cardnum").value.trim();
    let methodError = document.getElementById("methoderror");
    let cardnumError = document.getElementById("cardnumerror");
    let isValid = true;

    if (method === "") {
        methodError.innerHTML = "Please select a payment method!";
        methodError.style.color = "red";
        isValid = false;
    } else {
        methodError.innerHTML = "";
    }

    if (cardnum === "") {
        cardnumError.innerHTML = "Please enter Card number or phone!";
        cardnumError.style.color = "red";
        isValid = false;
    } else {
        cardnumError.innerHTML = "";
    }

    return isValid;
}
