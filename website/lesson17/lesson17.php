<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Validate and Sanitize</h1>
    <form action="lesson17.php" method="post"> 
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" > <br> 
        <label for="age">Age: </label> 
        <input type="text" name="age" id="age" > <br> 
        <label for="email" >Email: </label>
        <input type="text" name="email" id="email" > <br> 
        <input type="submit" name="login" value="Login"> <br> 
    </form>
    <br>
    
</body>

</html>

<?php

    if (isset($_POST["login"])) {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "You are called {$name} <br> ";
        echo "Your age is {$age} <br>";
        echo "Your email is {$email} <br>";
    }

?>
