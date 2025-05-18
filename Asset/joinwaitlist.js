let waitlist = []; 

document.getElementById('waitlist-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();

  if (name && email) {
    waitlist.push({ name, email }); 
    alert('Added to waitlist!');
    document.getElementById('waitlist-form').reset();
  }
});
