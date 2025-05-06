function validate() {
    let promo = document.getElementById("promo").value;
    let promoError = document.getElementById("promoerror");
    let isValid = true;

    if (promo === "") {
        promoError.innerHTML = "Promo code cannot be empty!";
        promoError.style.color = "red";
        isValid = false;
    } else if (promo.length !== 5) {
        promoError.innerHTML = "Promo code must be exactly 5 characters!";
        promoError.style.color = "red";
        isValid = false;
    } else {
        promoError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Code_Generator.php";
    }

    return isValid;
}