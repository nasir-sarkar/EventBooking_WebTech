document.addEventListener("DOMContentLoaded", function () 
{
  const select = document.getElementById("ticketSelect");
  const info = document.getElementById("ticketInfo");

  select.addEventListener("change", function () 
  {
    const price = select.value;

    if (price) 
    {
      let ticketType = select.options[select.selectedIndex].text.split("-")[0].trim();
      info.innerHTML = `You selected <b>${ticketType}</b> ticket worth ${price}.`;
      info.style.color = "green";
    } 
    else 
    {
      info.innerHTML = "Please select a valid ticket type.";
      info.style.color = "red";
    }
  });
});
