<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Pay Calculator </h1>
    <form action="lesson6.php" method="get">
        <label>Hours</label><br>
        <input type="number" name="hours" id="hours"><br>
        <label>Rate</label><br>
        <input type="number" name="rate" id="rate"><br>
        <input type="submit" value="Calculate">
    </form>

<br> <br>
</body>
</html>

<?php

    $hours = $_GET["hours"];
    $rate = $_GET["rate"];
    $pay = 0;

   if ($hours <= 40) {
         $pay = $hours * $rate;
    } else if ($hours > 40){
         $pay = 40 * $rate + ($hours - 40) * $rate * 1.5;
   } else {
        echo "Invalid input";
   }

   $yearly = $pay * 52;

    echo "Hours: {$hours} <br>";
    echo "Rate: {$rate} <br>";
    echo "Weekly Pay: {$pay} <br>";
    echo "Yearly Pay: {$yearly} <br>";
   

?>