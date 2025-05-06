function searchAttendees() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let rows = document.querySelectorAll("#attendeeTable tbody tr");
  
    rows.forEach(row => {
      let text = row.innerText.toLowerCase();
      row.style.display = text.includes(input) ? "" : "none";
    });
  }
  
  function exportCSV() {
    let rows = document.querySelectorAll("table tr");
    let csv = [];
  
    rows.forEach(row => {
      let cols = row.querySelectorAll("td, th");
      let data = Array.from(cols).map(col => col.innerText);
      csv.push(data.join(","));
    });
  
    let csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
    let link = document.createElement("a");
    link.setAttribute("href", csvContent);
    link.setAttribute("download", "attendees.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  