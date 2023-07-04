<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBoxes</title>
</head>
<body>
    <h1> What do you like? </h1>
    <form action="lesson15.php" method="post">

        <input type="checkbox" name="pizza" id="pizza" value="pizza"> Pizza <br>

        <input type="checkbox" name="hotdog" id="hotdog" value="hotdog"> Hotdog <br>

        <input type="checkbox" name="burger" id="burger" value="burger"> Burger<br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <br>
</body>
</html>

<?php

if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
        echo "You Do Not Like Pizza <br> ";
    }
    if(isset($_POST["hotdog"])){
        echo "You Do Not Like Hot Dog <br> ";
    }
    if(isset($_POST["burger"])){
        echo "You Do Not Like Burger <br> ";
    }
    if(empty($_POST["pizza"])){
        echo "You Do Not Like Pizza <br> ";
    }
    if(empty($_POST["hotdog"])){
        echo "You Do Not Like Hot Dog <br> ";
    }
    if(empty($_POST["burger"])){
        echo "You Do Not Like Burger <br> ";
    }

}
?>