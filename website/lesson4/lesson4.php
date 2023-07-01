<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>$_GET example </h1>
    <form action="lesson4.php" method="get">
        <label>Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
    <p>notice how after the $_GET submission the details are appended to the url </p>

    <br> <br> 

    <h1>$_POST example </h1>
    <form action="lesson4.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login">
    </form>
    <br> 

    <h1>Quantity Calculator </h1>
    <form action="lesson4.php" method="post">
        <label>Quantity</label><br>
        <input type="number" name="quantity" id="quantity"><br>
        <label>Price</label><br>
        <input type="number" name="price" id="price"><br>
        <input type="submit" value="Calculate">
    </form>
    
    <h2> php console </h2> 
</body>
</html>
<?php 
    echo "Hello Nazar! <br>";

    echo "Get results: <br>";
    echo "{$_GET["username"] } <br> " ; // $_GET is a global variable that stores all the data from the form like an array 
    echo "{$_GET["password"] } <br> " ; // $_GET is a global variable that stores all the data from the form like an array

    // notice when using $_GET the data is visible in the url

    // $_POST is a global variable that stores all the data from the form like an array but it is not visible in the url

    echo "Post results: <br>";
    echo "{$_POST["username"] } <br> " ; // $_POST is a global variable that stores all the data from the form like an array
    echo "{$_POST["password"] } <br>" ;

    echo "Post results: <br>";
    $total = $_POST["quantity"] * $_POST["price"] ;
    echo "The total price of the Quanity Calculator is: \${$total} <br> " ; 

?>