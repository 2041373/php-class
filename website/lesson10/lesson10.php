<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While Loop Example</h1>
    <form action="lesson10.php" method="post">
        <label>While Loop Start/Stop</label> <br>
        <input type="submit" name="start" id="start" value="start">
        <input type="submit" name="stop" id="stop" value="stop">
    </form>

    <?php
    
    $start = $_POST["start"] ?? "";
    $stop = $_POST["stop"] ?? "";
    $i = 0;
    $running = true;
    $NumberOfSeconds = 1;

    while ($running) {
        if(isset($_POST["start"])){
            echo $i . " ";
            $i++;
        }
        if(isset($_POST["stop"])){
            $running = false;
        }

    } 


    ?>
</body>
</html>
