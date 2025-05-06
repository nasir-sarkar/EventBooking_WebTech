document.getElementById('forgot-form').addEventListener('submit', function(event) {
    const email = document.getElementById('forgot-email').value;
    const errorMsg = document.getElementById('forgot-error');

    if (email === "") {
        errorMsg.innerHTML = "Email field cannot be empty!";
        errorMsg.style.color = "red";
        event.preventDefault(); 
    } else {
        alert('Reset link sent to ' + email);
        errorMsg.innerHTML = ""; 
    }
});

document.getElementById('forgot-email').addEventListener('keyup', function() {
    const email = document.getElementById('forgot-email').value;
    const errorMsg = document.getElementById('forgot-error');

    if (email === "") {
        errorMsg.innerHTML = "Please enter your email!";
        errorMsg.style.color = "red";
    } else {
        errorMsg.innerHTML = "";
    }
});
