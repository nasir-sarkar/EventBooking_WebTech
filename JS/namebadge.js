function generateBadge() {
    const name = document.getElementById('attendeeName').value;
    const role = document.getElementById('attendeeRole').value;
  
    if (name && role) {
      document.getElementById('badgeName').innerText = name;
      document.getElementById('badgeRole').innerText = role;
      document.getElementById('badgeArea').style.display = 'block';
    } else {
      alert("Please fill in both fields.");
    }
  }
  