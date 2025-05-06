let waitlist = [];

function notifyNext() {
  const msg = document.getElementById('message');

  if (waitlist.length > 0) {
    const user = waitlist.shift();
    msg.innerHTML = `Spot opened! Notified ${user.name} (${user.email})`;
  } else {
    msg.innerHTML = "Waitlist is empty.";
  }
}

function addToWaitlist(name, email) {
  if (name && email) {
    waitlist.push({ name: name, email: email });
    alert('Added to waitlist!');
  } else {
    alert('Please enter both name and email.');
  }
}
