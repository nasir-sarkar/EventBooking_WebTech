function validate() {
    let feature1 = document.getElementById("feature1").value;
    let feature2 = document.getElementById("feature2").value;
    let feature3 = document.getElementById("feature3").value;

    let feature1Error = document.getElementById("feature1error");
    let feature2Error = document.getElementById("feature2error");
    let feature3Error = document.getElementById("feature3error");

    let isValid = true;

    if (feature1 === "") {
        feature1Error.innerHTML = "Feature 1 cannot be empty!";
        isValid = false;
    } else {
        feature1Error.innerHTML = "";
    }

    if (feature2 === "") {
        feature2Error.innerHTML = "Feature 2 cannot be empty!";
        isValid = false;
    } else {
        feature2Error.innerHTML = "";
    }

    if (feature3 === "") {
        feature3Error.innerHTML = "Feature 3 cannot be empty!";
        isValid = false;
    } else {
        feature3Error.innerHTML = "";
    }

    return isValid;
}
