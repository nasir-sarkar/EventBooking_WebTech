document.addEventListener("DOMContentLoaded", function () 
{
    const ticketChoice = document.getElementById("ticketChoice");
    const result = document.getElementById("result");
  
    ticketChoice.addEventListener("change", function () 
    {
      const value = ticketChoice.value;
      let output = "";
  
      if (value === "Standard")
      {
        output = `
          <b>Standard Ticket:</b><br>
          - Seating: General<br>
          - Entry: Regular<br>
          - Backstage: No
        `;
        result.style.color = "black"; 
      } 
      else if (value === "Premium") 
      {
        output = `
          <b>Premium Ticket:</b><br>
          - Seating: Better<br>
          - Entry: Fast<br>
          - Backstage: No
        `;
        result.style.color = "black";
      } 
      else if (value === "VIP") 
      {
        output = `
          <b>VIP Ticket:</b><br>
          - Seating: Best<br>
          - Entry: All Access<br>
          - Backstage: Yes
        `;
        result.style.color = "black";
      } 
      else 
      {
        output = "Please select any valid package.";
        result.style.color = "red"; 
      }
  
      result.innerHTML = output;
    });
  });
  