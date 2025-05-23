function validate() {
    let eventid = document.getElementById("eventid").value.trim();
    let sponsor = document.getElementById("sponsor").value.trim();
    let discount = document.getElementById("discount").value.trim();
    let promo1 = document.getElementById("promo1").value.trim();
    let promo2 = document.getElementById("promo2").value.trim();
    let promo3 = document.getElementById("promo3").value.trim();
    let promo4 = document.getElementById("promo4").value.trim();
    let promo5 = document.getElementById("promo5").value.trim();

    let eventidError = document.getElementById("eventiderror");
    let sponsorError = document.getElementById("sponsorerror");
    let discountError = document.getElementById("discounterror");
    let promo1Error = document.getElementById("promo1error");
    let promo2Error = document.getElementById("promo2error");
    let promo3Error = document.getElementById("promo3error");
    let promo4Error = document.getElementById("promo4error");
    let promo5Error = document.getElementById("promo5error");

    let valid = true;

    if (eventid === "") {
        eventidError.innerHTML = "Please select an event ID!";
        valid = false;
    } else {
        eventidError.innerHTML = "";
    }

    if (sponsor === "") {
        sponsorError.innerHTML = "Please enter sponsor name!";
        valid = false;
    } else {
        sponsorError.innerHTML = "";
    }

    if (discount === "") {
        discountError.innerHTML = "Please enter discount!";
        valid = false;
    } else if (isNaN(discount) || discount < 0 || discount > 100) {
        discountError.innerHTML = "Discount must be a number between 0 and 100!";
        valid = false;
    } else {
        discountError.innerHTML = "";
    }

    if (promo1 === "") {
        promo1Error.innerHTML = "Promo Code 1 is required!";
        valid = false;
    } else if (!/^\d{5}$/.test(promo1)) {
        promo1Error.innerHTML = "Promo Code 1 must be exactly 5 digits!";
        valid = false;
    } else {
        promo1Error.innerHTML = "";
    }

    if (promo2 === "") {
        promo2Error.innerHTML = "Promo Code 2 is required!";
        valid = false;
    } else if (!/^\d{5}$/.test(promo2)) {
        promo2Error.innerHTML = "Promo Code 2 must be exactly 5 digits!";
        valid = false;
    } else {
        promo2Error.innerHTML = "";
    }

    if (promo3 === "") {
        promo3Error.innerHTML = "Promo Code 3 is required!";
        valid = false;
    } else if (!/^\d{5}$/.test(promo3)) {
        promo3Error.innerHTML = "Promo Code 3 must be exactly 5 digits!";
        valid = false;
    } else {
        promo3Error.innerHTML = "";
    }

    if (promo4 === "") {
        promo4Error.innerHTML = "Promo Code 4 is required!";
        valid = false;
    } else if (!/^\d{5}$/.test(promo4)) {
        promo4Error.innerHTML = "Promo Code 4 must be exactly 5 digits!";
        valid = false;
    } else {
        promo4Error.innerHTML = "";
    }

    if (promo5 === "") {
        promo5Error.innerHTML = "Promo Code 5 is required!";
        valid = false;
    } else if (!/^\d{5}$/.test(promo5)) {
        promo5Error.innerHTML = "Promo Code 5 must be exactly 5 digits!";
        valid = false;
    } else {
        promo5Error.innerHTML = "";
    }

    return valid;
}
