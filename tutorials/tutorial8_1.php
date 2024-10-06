<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 8.1</title>
</head>
<body>
    <form action="tutorial8_1.php" method="post">
        Enter first number: <input type="number" name="num1" id="num1">
        <br><br>
        Enter second number: <input type="number" name="num2" id="num2">
        <br><br>
        <input type="submit" value="Submit" name="submit">
        <br><br>
    </form>

    <?php
    if(isset($_POST["submit"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "First number: " . $num1 . "<br>";
        echo "Second number: " . $num2 . "<br>";

        $sum = $num1 + $num2;
        $product = $num1 * $num2;
        $rem = $num1 % $num2;
        $res = $num1 - $num2;

        echo "Sum: " . $sum . "<br>";
        echo "Product: " . $product . "<br>";
        echo "Remainder: " . $rem . "<br>";
        echo "Difference: " . $res . "<br>";
    }
    ?>
</body>
</html>