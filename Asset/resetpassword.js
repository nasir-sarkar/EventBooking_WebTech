function resetPassword() 
{
    var pass1 = document.getElementById("newpass1").value;
    var pass2 = document.getElementById("newpass2").value;
    var passError = document.getElementById("pass-error");

    if (pass1 === "" || pass2 === "") 
    {
        passError.innerHTML = "Password fields cannot be empty!";
        passError.style.color = "red";
    } 
    else if (pass1 !== pass2) 
    {
        passError.innerHTML = "Passwords do not match!";
        passError.style.color = "red";
    } 
    else if (pass1.length < 6) 
    {
        passError.innerHTML = "Password must be at least 6 characters!";
        passError.style.color = "red";
    } 
    else 
    {
        passError.innerHTML = "";
        alert("Password reset successful.");
    }
}
