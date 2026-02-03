<!-- 
Challenge 2: Using Escape Characters
Write a PHP Script that outputs a formatted message with escape Characters

- Use escape characters to print the following sentence: 
"He said, "PHP is fun!" and left.”

- Print the following multi-line message using \n:
First line
Second line

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
</head>

<body>
    <h1>Challenge 2: Using Escape Characters</h1>
    <?php
    // Using escape characters to print the sentence
    echo "\"He said, \"PHP is fun!\" and left.\"<br><br>";
    echo "";
    // Printing multi-line message using \n
    $multi_line_message = "First line\nSecond line";
    echo nl2br($multi_line_message);  // nl2br to convert \n to HTML line breaks
    ?>

</body>

</html>