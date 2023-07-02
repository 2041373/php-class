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
    <p>This calculator rounds the value up to the nearest integer <br>
       there are many more functions that can be used with numbers <br>
       for example: floor (rounds down), ceil (rounds up) </p>
    
    <h1>Power Calculator</h1>
    <form action="lesson5.php" method="post">
        <label>base</label><br>
        <input type="number" name="base" id="base"><br>
        <label>exponent</label><br>
        <input type="number" name="exponent" id="exponent"><br>
        <input type="submit" value="Calculate">
    </form>

    <h1>Random Number Generator</h1>
    <form action="lesson5.php" method="post">
        <label>min</label><br>
        <input type="number" name="min" id="min"><br>
        <label>max</label><br>
        <input type="number" name="max" id="max"><br>
        <input type="submit" value="Calculate">

    <br>

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

  $base =  $_POST["base"];
  $exponent =  $_POST["exponent"];
  $total2 = null;
  $total2 = pow($base, $exponent); 
  echo "Power Calculator: The total is: $total2 <br>";

  $min =  $_POST["min"];
  $max =  $_POST["max"];
  $total3 = null;
  $total3 = rand($min, $max);
  echo "Random Number Generator: The total is: $total3 <br>";



?> 