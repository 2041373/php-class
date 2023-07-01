<?php
    echo "Lesson 3 <br>";
    $lessonName = "Lesson 3: arithmetics";
    echo "This is {$lessonName} <br>";

    $total = 0;
    echo "Total is {$total} <br>";
    $total = $total + 1;
    echo "Total is {$total} <br>";

    $x = 10;
    $y = 3;
    $z = null;
    $z = $x + $y;
    echo "x + y = {$z} <br>";
    $z = $x - $y;
    echo "x - y = {$z} <br>";
    $z = $x * $y;
    echo "x * y = {$z} <br>";
    $z = $x / $y;
    echo "x / y = {$z} <br>";
    $z = $x ** $y; // Exponentiation (to raise the power)
    echo "x ** y = {$z} <br>";
    $z = $x % $y;  // Modulus
    echo "x % y = {$z} <br>";

    $counter = 5;
    $counter = $counter+=3;
    echo "Counter is {$counter} <br>";

    $count = 4;
    $count = --$count;
    echo "Counter is {$count} <br>";



?>