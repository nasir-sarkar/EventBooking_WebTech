document.getElementById('verify-form').addEventListener('submit', function(event) 
{
    const code = document.getElementById('verification-code').value;
    const errorMsg = document.getElementById('verify-error');

    if (code === "") 
    {
        errorMsg.innerHTML = "Verification code cannot be empty!";
        errorMsg.style.color = "red";
        event.preventDefault(); 
    } 
    else 
    {
        alert('Code verified: ' + code);
        errorMsg.innerHTML = ""; 
    }
});