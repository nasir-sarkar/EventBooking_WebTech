function validate() {
    let view = document.getElementById("view").value.trim();
    let category = document.getElementById("category").value.trim();

    let viewError = document.getElementById("viewerror");
    let categoryError = document.getElementById("categoryerror");

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
    return valid;
}
