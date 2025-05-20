function validate() {
    let cardtype = document.getElementById("cardtype").value;
    let cardid = document.getElementById("cardid").value;
    let cardtypeError = document.getElementById("cardtypeerror");
    let cardidError = document.getElementById("cardiderror");
    let isValid = true;

    if (cardtype === "") {
        cardtypeError.innerHTML = "Card type must be selected!";
        cardtypeError.style.color = "red";
        isValid = false;
    } else {
        cardtypeError.innerHTML = "";
    }

    if (cardid === "") {
        cardidError.innerHTML = "Card ID must be selected!";
        cardidError.style.color = "red";
        isValid = false;
    } else {
        cardidError.innerHTML = "";
    }

    return isValid;
}
