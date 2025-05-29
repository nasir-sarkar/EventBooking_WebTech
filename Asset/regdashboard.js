function searchAttendees() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let rows = document.querySelectorAll("#attendeeTable tbody tr");

  for (let i = 0; i < rows.length; i++) {
    let text = rows[i].innerText.toLowerCase();
    rows[i].style.display = text.includes(input) ? "" : "none";
  }
}

