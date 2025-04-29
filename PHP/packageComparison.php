<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $choice = $_POST["ticketChoice"] ?? "";

    if ($choice === "") 
    {
        echo "No package selected. Please go back and choose one.";
    } 
    else 
    {
        echo "<h2>Thank you for choosing the <em>" . htmlspecialchars($choice) . "</em> package!</h2>";

        switch ($choice) 
        {
            case "Standard":
                echo "<p>You selected Standard: General Seating, Regular Entry, No Backstage Access.</p>";
                break;
            case "Premium":
                echo "<p>You selected Premium: Better Seating, Fast Entry, No Backstage Access.</p>";
                break;
            case "VIP":
                echo "<p>You selected VIP: Best Seating, All Access Entry, and Backstage Access!</p>";
                break;
        }
    }
} 
else 
{
    echo "Invalid request.";
}
?>
