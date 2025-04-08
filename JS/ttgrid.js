document.addEventListener("DOMContentLoaded", function () {
  const select = document.getElementById("ticketSelect");
  const info = document.getElementById("ticketInfo");

  select.addEventListener("change", function () {
    const price = select.value;
    if (price) {
      info.innerHTML = `✅ You selected a ticket worth ৳${price}.`;
    } else {
      info.innerHTML = "";
    }
  });
});
