<!-- 
Challenge 5: Write a PHP script to check if a given year is a leap year or not. 
Expected Output:
Input: 2024
Output: 2024 is a leap year.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 5</title>
</head>
<h1>Challenge 5</h1>

<body>
    <?php 
    $year = 2024;
    echo "<pre>";
    echo "Input: $year \n";
    echo "Output: ";
    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
    echo "</pre>";
    ?>
</body>

</html>