document.addEventListener("DOMContentLoaded", function () 
{
    const button = document.getElementById("upgradeBtn");
    const message = document.getElementById("message");
  
    button.addEventListener("click", () => 
    {
      message.textContent = "🎉 You’ve successfully upgraded to VIP!";
    }
);
}
);
  