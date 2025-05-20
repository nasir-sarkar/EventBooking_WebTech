function searchAttendees() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let rows = document.querySelectorAll("#attendeeTable tbody tr");

  for (let i = 0; i < rows.length; i++) {
    let text = rows[i].innerText.toLowerCase();
    rows[i].style.display = text.includes(input) ? "" : "none";
  }
}

function exportCSV() {
  let rows = document.querySelectorAll("table tr");
  let csv = "";

  for (let i = 0; i < rows.length; i++) {
    let cols = rows[i].querySelectorAll("td, th");
    let line = [];
    for (let j = 0; j < cols.length; j++) {
      line.push(cols[j].innerText);
    }
    csv += line.join(",") + "\n";
  }

  window.open("data:text/csv," + csv);
}
