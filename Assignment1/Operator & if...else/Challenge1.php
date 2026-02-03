<!-- 
Challenge 1: 
Create a PHP script that takes two numbers and performs addition, subtraction, multiplication, division, and modulus operations. 

Expected Output:
Number 1: 10
Number 2: 5
Addition: 15
Subtraction: 5
Multiplication: 50
Division: 2
Modulus: 0
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 1</title>
</head>
<h1>Challenge 1: PHP Arithmetic Operations</h1>

<body>
    <?php
    $number1 = 10;
    $number2 = 5;

    $addition = $number1 + $number2; // Addition 
    $subtraction = $number1 - $number2; // Subtraction
    $multiplication = $number1 * $number2; // Multiplication
    $division = $number1 / $number2; // Division
    $modulus = $number1 % $number2; // Modulus
    
    echo "<pre>";
    echo "Number1: $number1 \n";
    echo "Number2: $number2 \n";
    echo "Addition: $addition \n";
    echo "Subtraction: $subtraction \n";
    echo "Division: $division \n";
    echo "Modulus: $modulus \n";
    echo "</pre>"
    ?>
</body>

</html>