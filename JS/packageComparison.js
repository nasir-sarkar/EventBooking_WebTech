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
      } 
      else if (value === "Premium") 
      {
        output = `
          <b>Premium Ticket:</b><br>
          - Seating: Better<br>
          - Entry: Fast<br>
          - Backstage: No
        `;
      } 
      else if (value === "VIP") 
      {
        output = `
          <b>VIP Ticket:</b><br>
          - Seating: Best<br>
          - Entry: All Access<br>
          - Backstage: Yes
        `;
      } 
      else 
      {
        output = "";
      }
  
      result.innerHTML = output;
    }
);
}
);
  