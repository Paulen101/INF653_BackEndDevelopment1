<!-- 
Challenge 4: Write a PHP script that takes a student’s marks and assigns a grade using the following conditions:
•90+ → A
•80-89 → B
•70-79 → C
•60-69 → D
•Below 60 → F 

Expected Output:
Input: 85
Output: You got a B!
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Challenge 4</h1>

<body>
    <?php
    $grade = 85;
    echo "<pre>";
    echo "Input: $grade \n";
    echo "Output: ";
    if ($grade >= 90) {
        echo "You got an A!";
    } else if ($grade >= 80) {
        echo "You got a B!";
    } else if ($grade >= 70) {
        echo "You got a C!";
    } else if ($grade >= 60) {
        echo "You got a D!";
    } else {
        echo "You got an F!";
    }
    echo "</pre>"
        ?>

</body>

</html>