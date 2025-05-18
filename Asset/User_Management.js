function validate() {
    let filter = document.getElementById("filter").value;
    let error = document.getElementById("filtererror");

    
    if (filter === "") {
        error.innerHTML = "Please select a role!";
        return false;
    } else {
        error.innerHTML = "";
        alert("Filter applied for " + filter);
        return true;
    }
}
