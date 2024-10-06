<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 9.1</title>
</head>
<body>
    <form action="tutorial9_1.php" method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate Factorial" name="submit">
    </form>

    <?php
    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    if (isset($_POST["submit"])) {
        $number = $_POST['number'];
        
        if ($number < 0) {
            echo "<p>Please enter a non-negative integer.</p>";
        } else {
            $result = factorial($number);
            echo "<p>The factorial of $number is: $result</p>";
        }
    }
    ?>
</body>
</html>