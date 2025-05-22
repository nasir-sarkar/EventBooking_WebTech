function generateBadge() {
  const name = document.getElementById('attendeeName').value.trim();
  const role = document.getElementById('attendeeRole').value.trim();

  if (name && role) {
    document.getElementById('badgeName').innerText = name;
    document.getElementById('badgeRole').innerText = role;
    document.getElementById('badgeArea').style.display = 'block';
  } else {
    alert("Please fill in both name and role.");
  }
}

function printBadge() {
  const badge = document.getElementById('badgeArea').cloneNode(true);
  const win = window.open('');
  win.document.body.appendChild(badge);
  win.print();
  win.close();
}

