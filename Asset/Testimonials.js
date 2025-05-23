function validate() {
    let fullname = document.getElementById("fullname").value.trim();
    let feedback = document.getElementById("feedback").value.trim();
    let rating = document.getElementById("rating").value.trim();

    let fullnameError = document.getElementById("fullnameerror");
    let feedbackError = document.getElementById("feedbackerror");
    let ratingError = document.getElementById("ratingerror");

    let isValid = true;

    if (fullname === "") {
        fullnameError.innerHTML = "Full name cannot be empty!";
        isValid = false;
    } else {
        fullnameError.innerHTML = "";
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
    } else if (isNaN(rating) || rating < 1 || rating > 5) {
        ratingError.innerHTML = "Rating must be a number between 1 and 5!";
        isValid = false;
    } else {
        ratingError.innerHTML = "";
    }

    return isValid;
}
