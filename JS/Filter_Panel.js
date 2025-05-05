function validate() {
    let category = document.getElementById("category").value;
    let dateFrom = document.getElementById("dateFrom").value;
    let dateTo = document.getElementById("dateTo").value;
    let categoryError = document.getElementById("categoryerror");
    let dateError1 = document.getElementById("dateerror1");
    let dateError2 = document.getElementById("dateerror2");
    let isValid = true;


    if (category === "all") {
        categoryError.innerHTML = "Please select a category!";
        categoryError.style.color = "red";
        isValid = false;
    } else {
        categoryError.innerHTML = "";
    }

   
    if (dateFrom === "") {
        dateError1.innerHTML = "Please select a start date!";
        dateError1.style.color = "red";
        isValid = false;
    } else {
        dateError1.innerHTML = "";
    }

 
    if (dateTo === "") {
        dateError2.innerHTML = "Please select an end date!";
        dateError2.style.color = "red";
        isValid = false;
    } else if (new Date(dateTo) < new Date(dateFrom)) {
        dateError2.innerHTML = "End date cannot be before start date!";
        dateError2.style.color = "red";
        isValid = false;
    } else {
        dateError2.innerHTML = "";
    }

    return isValid;
}
