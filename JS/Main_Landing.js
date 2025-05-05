function validate() {
    let headline = document.getElementById("headline").value;
    let tagline = document.getElementById("tagline").value;
    let cta = document.getElementById("cta").value;

    let headlineError = document.getElementById("headlineerror");
    let taglineError = document.getElementById("taglineerror");
    let ctaError = document.getElementById("ctaerror");

    let isValid = true;

    if (headline === "") {
        headlineError.innerHTML = "Headline cannot be empty!";
        isValid = false;
    } else {
        headlineError.innerHTML = "";
    }

    if (tagline === "") {
        taglineError.innerHTML = "Tagline cannot be empty!";
        isValid = false;
    } else {
        taglineError.innerHTML = "";
    }

    if (cta === "") {
        ctaError.innerHTML = "CTA text cannot be empty!";
        isValid = false;
    } else {
        ctaError.innerHTML = "";
    }

    return isValid;
}
