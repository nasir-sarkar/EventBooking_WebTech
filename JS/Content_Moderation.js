function validateCreateEvent() {
    let name = document.getElementById("ename").value.trim();
    let date = document.getElementById("edate").value;
    let cat = document.getElementById("ecat").value;

    let nameError = document.getElementById("enameerror");
    let dateError = document.getElementById("edateerror");
    let catError = document.getElementById("ecaterror");

    let valid = true;

    if (name === "") {
        nameError.innerHTML = "Please enter event name!";
        valid = false;
    } else {
        nameError.innerHTML = "";
    }

    if (date === "") {
        dateError.innerHTML = "Please select a date!";
        valid = false;
    } else {
        dateError.innerHTML = "";
    }

    if (cat === "") {
        catError.innerHTML = "Please select a category!";
        valid = false;
    } else {
        catError.innerHTML = "";
    }

    if (valid) {
        alert("Event Created Successfully!");
    }

    return valid;
}
