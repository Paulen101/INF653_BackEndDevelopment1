<!-- 
Challenge 3: Write a PHP script that starts with a number and increments and decrements it using ++ and -- operators. 
Expected Output
Starting number: 10
After increment: 11
After decrement: 10
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 3</title>
</head>
<h1>Challenge 3</h1>

<body>
    <?php
    $number = 10;

    echo "<pre>";
    echo "Starting number: $number \n";
    echo "After increment: " . (++$number) . "\n";
    echo "After decrement: " . (--$number) . "\n";
    echo "</pre>"
    ?>

</body>

</html>