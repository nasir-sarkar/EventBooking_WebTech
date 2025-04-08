function validate() {
    let sponsor = document.getElementById("sponsor").value;
    let discount = document.getElementById("discount").value;
    let validity = document.getElementById("validity").value;
    let sponsorError = document.getElementById("sponsorerror");
    let discountError = document.getElementById("discounterror");
    let validityError = document.getElementById("validityerror");
    let isValid = true;

    if (sponsor === "") {
        sponsorError.innerHTML = "Sponsor name cannot be empty!";
        sponsorError.style.color = "red";
        isValid = false;
    } else {
        sponsorError.innerHTML = "";
    }

    if (discount === "") {
        discountError.innerHTML = "Discount cannot be empty!";
        discountError.style.color = "red";
        isValid = false;
    } else if (discount <= 0 || discount > 100) {
        discountError.innerHTML = "Discount must be between 1 and 100!";
        discountError.style.color = "red";
        isValid = false;
    } else {
        discountError.innerHTML = "";
    }

    if (validity === "") {
        validityError.innerHTML = "Please select a valid date!";
        validityError.style.color = "red";
        isValid = false;
    } else {
        validityError.innerHTML = "";
    }

    return isValid;
}
