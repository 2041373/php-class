<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Counters</h1>
    <form action="lesson9.php" method="post">
        <label for="counter">Enter a number: </label> <br>
        <input type="text" name="counter" id="counter"> <br>
        <input type="submit" value="Submit">
    </form>



    
</body>
</html>

<?php

    $a = $_POST["counter"];

    if ($a > 2000 || $a < 0) {
        echo "Number is invalid!";
    } else if ($a < 2000) {
        for($i = 0; $i <= $a; $i++){
            echo $i . " ";
        }
    } else {
        echo "An Error has occured!";
    }

   

?> 