<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="lesson13.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username" id="username"> <br>
        <label>Password</label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php
    // isset() = Returns true if variable is set and not null
    // empty() = Returns true if variable is empty
    
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if(isset($username) && isset($password)){
        if(!empty($username) && !empty($password)){
            echo "Username: " . $username . "<br>";
            echo "Password: " . $password . "<br>";
        } elseif(empty($username) && empty($password)){
            echo "Enter a username and password";
        }
    } else {
        echo "Please fill in all fields!";
    }



?>