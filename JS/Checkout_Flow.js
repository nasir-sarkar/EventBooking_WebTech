function validate() {
    let name = document.getElementById("name").value;
    let method = document.getElementById("method").value;
    let nameError = document.getElementById("nameerror");
    let methodError = document.getElementById("methoderror");
    let isValid = true;

    if (name === "") {
        nameError.innerHTML = "Full name cannot be empty!";
        nameError.style.color = "red";
        isValid = false;
    } else {
        nameError.innerHTML = "";
    }

    if (method === "") {
        methodError.innerHTML = "Please select a payment method!";
        methodError.style.color = "red";
        isValid = false;
    } else {
        methodError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Saved_Cards.html";
    }

    return isValid;
}
