function printBadge() 
{
    var name = document.getElementById("bname").value;
    if (name !== "") 
    {
      document.getElementById("badgeOutput").innerHTML =
        "<h2>" + name + "</h2><p><em>Official Event Badge</em></p>";
    } 
    else 
    {
      alert("Please enter a name.");
    }
  }
  