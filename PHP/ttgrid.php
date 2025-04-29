<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["ticketSelect"])) 
    {
        echo "Please select a valid ticket type.";
    } 
    else 
    {
        $price = $_POST["ticketSelect"];
        $ticketType = "";

        switch ($price) 
        {
            case "2500":
                $ticketType = "Standard";
                break;
            case "4000":
                $ticketType = "Premium";
                break;
            case "6000":
                $ticketType = "VIP";
                break;
            default:
                echo "Invalid ticket value submitted!";
                exit;
        }

        echo "You selected $ticketType worth ৳$price.";
    }
} 
else 
{
    echo "Invalid request! Please submit the form.";
}
?>
