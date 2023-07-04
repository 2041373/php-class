<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="lesson14.php" method="post">
        <label>Credit Card type </label><br>
        <input type="radio" name="card" id="visa" value="visa">
        <label for="visa">Visa</label><br>
        <input type="radio" name="card" id="mastercard" value="mastercard">
        <label for="mastercard">Mastercard</label><br>
        <input type="radio" name="card" id="americanexpress" value="americanexpress">
        <label for="americanexpress">American Express</label><br>
        <input type="submit" value="Submit">        
    </form>
    
</body>
</html>

<?php   

    $card = $_POST["card"] ?? "";

    switch ($card) {
        case 'visa':
            echo "Visa";
            break;
        case 'mastercard':
            echo "Mastercard";
            break;
        case 'americanexpress':
            echo "American Express";
            break;
        default:
            echo "Please select a card type!";
            break;
    }

?>