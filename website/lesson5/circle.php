<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Circle Calculator</h1>
    <form action="circle.php" method="get">
        <label>Radius</label><br>
        <input type="number" name="radius" id="radius"><br>
        <input type="submit" value="Calculate">
    </form>
    
</body>
</html>

<?php

    $radius = $_GET["radius"];
    $diameter = $radius * 2;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    $area = pi() * $radius * $radius;
    $area = round($area, 2);

    echo "Radius: {$radius} <br>";
    echo "Diameter: {$diameter} <br>";
    echo "Circumference: {$circumference} <br>";
    echo "Area: {$area} <br>";
    

?>