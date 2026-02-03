<!-- 
Challenge 5: Adding Comments to Code

Improve code readability by adding appropriate comments.
• Add comments to explain each line of the code.
• Use different comment styles (//, #, /* */).
• Expected Output: Total price: $40
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 5</title>
</head>
<h1>Challenge 5: Adding Comments to Code</h1>

<body>
    <?php
    $price = 50; // Set the initial price
    $discount = 10; # Set the discount amount
    /* 
    Calculate the final price after discount by using subtraction
    and store it in the variable $finalPrice
    */
    $finalPrice = $price - $discount;
    echo "Total price: $" . $finalPrice; // Display the final price
    ?>

</body>

</html>