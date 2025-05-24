function validate() {
    let sponsor = document.getElementById("sponsor").value;
    let discount = document.getElementById("discount").value;
    let sponsorError = document.getElementById("sponsorerror");
    let discountError = document.getElementById("discounterror");
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

    return isValid;
}
