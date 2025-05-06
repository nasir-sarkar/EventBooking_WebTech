function validate() {
    let view = document.getElementById("view").value;
    let date = document.getElementById("date").value;
    let viewError = document.getElementById("viewerror");
    let dateError = document.getElementById("dateerror");
    let isValid = true;

   
    if (view === "") {
        viewError.innerHTML = "Please select a view option!";
        viewError.style.color = "red";
        isValid = false;
    } else {
        viewError.innerHTML = "";
    }

  
    if (date === "") {
        dateError.innerHTML = "Please select a date!";
        dateError.style.color = "red";
        isValid = false;
    } else {
        dateError.innerHTML = "";
    }

    if (isValid) {
        window.location.href = "Event_Cards.php";
    }

    return isValid;
}
