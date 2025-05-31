<?php
    session_start();
    if (!isset($_SESSION['status']) || !isset($_COOKIE['status'])) {
        header('location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Generator</title>
</head>
<body>
    <div class="header">Event Booking</div>
    
    <fieldset>
    <legend><b>GENERATE PROMO CODE</b></legend>
    <form method="post" action="../Controller/Code_Generator_.php" onsubmit="return validate()">

      <label for="sponsor">Sponsor Name:</label><br>
      <input type="text" id="sponsor" name="sponsor" 
       value="<?= htmlspecialchars((string)($_SESSION['sponsor'] ?? 'No Discount')) ?>" readonly><br>
      <p id="sponsorerror"></p>

      <label for="discount">Discount (%):</label><br>
      <input type="text" id="discount" name="discount" 
       value="<?= htmlspecialchars((string)($_SESSION['discount'] ?? 'No Discount')) ?>" readonly><br>
      <p id="discounterror"></p>

      <input type="submit" name="submit" value="Generate Code">
      <a href="Discount_Entry.php"><input type="button" value="Back"></a><br>
            
    </form>
    </fieldset>
    
    <link rel="stylesheet" href="../Asset/Code_Generator.css">
    <script src="../Asset/Code_Generator.js"></script>
</body>
</html>