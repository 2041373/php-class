
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Grade Calculator </h1>
    <form action="lesson8.php" method="get"> 
        <label for="grade">Enter your grade: </label> <br>
        <input type="text" name="grade" id="grade"> <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php
  
  // swtich statement
    echo "<br>";
    
    $grade = $_GET["grade"];
    $grade = strtoupper($grade); // convert to uppercase

    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You did poorly!";
            break;
        case "D":
            echo "You did very bad!";
            break;
        case "F":
            echo "You failed!";
            break;
        case "A*";
            echo "You did super amazing!";
            break;
        default:
            echo "Invalid grade!";
    }




?>
