let waitlist = [];

function changeText() {
  let name = document.getElementById('name').value;
  let nameError = document.getElementById('name-error');

  if (name === "") {
    nameError.innerHTML = "Please enter your name!";
    nameError.style.color = "red";
   } 
}

function validate() {
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();

  const nameError = document.getElementById('name-error');
  const emailError = document.getElementById('email-error');
  const validError = document.getElementById('valid-error');

  let isValid = true;

  nameError.innerHTML = "";
  emailError.innerHTML = "";
  validError.innerHTML = "";

  if (name === "") {
    nameError.innerHTML = "Name is required";
    nameError.style.color = "red";
    isValid = false;
  }

  if (email === "") {
    emailError.innerHTML = "Email is required";
    emailError.style.color = "red";
    isValid = false;
  }

  if (isValid && name.toLowerCase() === email.toLowerCase()) {
    validError.innerHTML = "Name and Email shouldn't be the same";
    validError.style.color = "orange";
    isValid = false;
  }

  if (isValid) {
    waitlist.push({ name, email });
    alert("Added to waitlist!");
    document.getElementById('waitlist-form').reset();
  }

  return false; 
}
