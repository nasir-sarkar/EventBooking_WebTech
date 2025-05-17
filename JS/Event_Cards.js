function validateFilters() {
    let view = document.getElementById("view").value;
    let category = document.getElementById("category").value;
    let dateFrom = document.getElementById("dateFrom").value;
    let dateTo = document.getElementById("dateTo").value;

    let viewError = document.getElementById("viewerror");
    let categoryError = document.getElementById("categoryerror");
    let dateError1 = document.getElementById("dateerror1");
    let dateError2 = document.getElementById("dateerror2");

    let valid = true;

    if (view === "") {
        viewError.innerHTML = "Please select a view option!";
        viewError.style.color = "red";
        valid = false;
    } else {
        viewError.innerHTML = "";
    }

    if (category === "") {
        categoryError.innerHTML = "Please select a category!";
        categoryError.style.color = "red";
        valid = false;
    } else {
        categoryError.innerHTML = "";
    }

    if (dateFrom === "") {
        dateError1.innerHTML = "Please select a starting date!";
        dateError1.style.color = "red";
        valid = false;
    } else {
        dateError1.innerHTML = "";
    }

    if (dateTo === "") {
        dateError2.innerHTML = "Please select an end date!";
        dateError2.style.color = "red";
        valid = false;
    } else {
        dateError2.innerHTML = "";
    }

    return valid;
}
