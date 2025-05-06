var attendees = ["Jane Doe", "John Smith", "Emily White"];

function searchAttendee() 
{
  var input = document.getElementById("lookup").value;
  var found = attendees.includes(input);
  var result = found ? "Attendee found and verified." : "Attendee not found.";
  document.getElementById("lookupResult").innerHTML = result;
}
