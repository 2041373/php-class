<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Movie Ticket Price Calculator </h1>
    <form action="lesson7.php" action="get"> 
        <label>Age</label><br>
        <input type="number" name="age" id="age"><br>
        <input type="submit" value="Calculate">
    </form>
    <br>

    
</body>
</html>

<?php   
    $age = $_GET["age"];
    $price = 12;
    $discount = 15;
    $total = null;

    if ($age <= 12 || $age >= 65) {
        $total = $price - ($price * $discount / 100);
    } else {
        $total = $price;
    } 
    echo "Your age is {$age} <br> Your total is \${$total}"
?>