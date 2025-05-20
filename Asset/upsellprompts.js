document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("upgradeBtn");
  var message = document.getElementById("message");

  button.addEventListener("click", function () {
    message.textContent = "You’ve successfully upgraded to VIP!";
  });
});
