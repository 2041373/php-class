<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Absolute Calculator</h1>
    <form action="lesson5.php" method="post">
        <label>X</label><br>
        <input type="number" name="x" id="x"><br>
        <input type="submit" value="Calculate">
    </form>
    <p>This calculator doesn't give negative values</p>

    <h1>Round Calculator</h1>
    <form action="lesson5.php" method="post">
        <label>y</label><br>
        <input type="text" name="y" id="y"><br>
        <input type="submit" value="Calculate">
    </form>
    <p>This calculator rounds the value up to the nearest integer</p>
    
</body>
</html>

<?php 

  $x =  $_POST["x"];
  $total = null;
  $total = abs($x); // absolute value of x
  echo "Absolute Calculator: The total is: $total <br>";

  $y =  $_POST["y"];
  $total1 = null;
  $total1 = round($y); // absolute value of y
  echo "Round Calculator: The total is: $total1 <br>";

?> 