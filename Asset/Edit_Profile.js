function validate() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let nameError = document.getElementById("nameerror");
    let emailError = document.getElementById("emailerror");
    let phoneError = document.getElementById("phoneerror");
    let isValid = true;

    if (name === "") {
        nameError.innerHTML = "Name cannot be empty!";
        isValid = false;
    } else {
        nameError.innerHTML = "";
    }

    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Enter a valid email!";
        isValid = false;
    } else {
        emailError.innerHTML = "";
    }

    if (phone === "" || phone.length < 11) {
        phoneError.innerHTML = "Enter a valid phone number!";
        isValid = false;
    } else {
        phoneError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Abc.html";
    }

    return isValid;
}
