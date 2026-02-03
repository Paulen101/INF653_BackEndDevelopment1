<!-- 
Challenge 2: Write a PHP script that takes an integer and determines if it is even or odd using the modulus % operator. 
Expected Output: 
Input: 7
Output: 7 is an odd number.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
</head>
<h1>Challenge 2</h1>

<body>
    <?php
    $number = 7;
    echo "<pre>";
    echo "Input: $number \n";
    echo "Output: ";
    if ($number % 2 == 0) {
        echo "$number is an even number.";
    } else {
        echo "$number is an odd number.";
    }
    echo "</pre>"
    ?>
</body>

</html>