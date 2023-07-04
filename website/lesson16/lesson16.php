<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Happy Birthday To You Song Generator</h1>
    <form action="lesson16.php" method="get">
        <label for="name">Enter your name: </label> <br>
        <input type="text" name="name" id="name"> <br>
        <label for="age">Enter your age: </label> <br>
        <input type="text" name="age" id="age"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
</body>
</html>

<?php

    $name = $_GET["name"];
    $age = $_GET["age"];

    function HappyBirthday($name, $age){
        echo "Happy Birthday to you, <br>";
        echo "Happy Birthday to you, <br>";
        echo "Happy Birthday dear " . $name . ", <br>";
        echo "Happy Birthday to you, <br>";
        echo "You are " . $age . " years old!";
    }

    if(isset($name) && isset($age)){
        if(!empty($name) && !empty($age)){
            HappyBirthday($name, $age);
        } else {
            echo "Please fill in all fields!";
        }
    } else {
        echo "Please fill in all fields!";
    }

?>