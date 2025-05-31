function generateBadge() {
  var name = document.getElementById('attendeeName').value.trim();
  var role = document.getElementById('attendeeRole').value.trim();
  var badgeDiv = document.getElementById('badge');
  var nameSpan = document.getElementById('nameSpan');
  var roleSpan = document.getElementById('roleSpan');

  if (name === "" || role === "") {
    alert("Please enter both name and role.");
    return;
  }

  nameSpan.textContent = name;
  roleSpan.textContent = role;
  badgeDiv.style.display = "block";
}
