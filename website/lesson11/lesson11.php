<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <form action="lesson11.php" method="post">
        <label for="cars">Add car: </label> <br>
        <input type="text" name="cars" id="cars"> <br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>


<?php
    // Arrays in php 

    $cars = array("Volvo", "BMW", "Toyota");
    $newCar = $_POST["cars"];
    array_push($cars, $newCar);

    for($i = 0; $i < count($cars); $i++){
        echo $cars[$i] . "<br>";
    }

    //array_pop($cars); // removes last element
    //array_shift($cars); // removes first element
    //array_unshift($cars, "Honda"); // adds element to the beginning of the array
    //array_push($cars, "Honda"); // adds element to the end of the array
    //sort($cars); // sorts the array in ascending order
    //rsort($cars); // sorts the array in descending order
    //asort($cars); // sorts the array in ascending order, according to the value
    //ksort($cars); // sorts the array in ascending order, according to the key
    //arsort($cars); // sorts the array in descending order, according to the value
    //krsort($cars); // sorts the array in descending order, according to the key
    //print_r($cars); // prints the array
    //var_dump($cars); // prints the array with data type
    






?>