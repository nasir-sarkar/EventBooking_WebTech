function validate() {
    let user = document.getElementById("user").value;
    let feedback = document.getElementById("feedback").value;
    let rating = document.getElementById("rating").value;

    let userError = document.getElementById("usererror");
    let feedbackError = document.getElementById("feedbackerror");
    let ratingError = document.getElementById("ratingerror");

    let isValid = true;

    if (user === "") {
        userError.innerHTML = "User name cannot be empty!";
        isValid = false;
    } else {
        userError.innerHTML = "";
    }

    if (feedback === "") {
        feedbackError.innerHTML = "Feedback cannot be empty!";
        isValid = false;
    } else {
        feedbackError.innerHTML = "";
    }

    if (rating === "") {
        ratingError.innerHTML = "Rating cannot be empty!";
        isValid = false;
    } else if (rating < 1 || rating > 5) {
        ratingError.innerHTML = "Rating must be between 1 and 5!";
        isValid = false;
    } else {
        ratingError.innerHTML = "";
    }

    return isValid;
}
