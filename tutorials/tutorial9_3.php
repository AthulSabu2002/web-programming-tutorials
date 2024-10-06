<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 9.3</title>
</head>
<body>
    <h2>Odd or Even Number Checker</h2>
    
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check" name="submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $number = $_POST["number"];
        
        if (is_numeric($number)) {
            $result = ($number % 2 == 0) ? "even" : "odd";
            echo "<div class='result'>";
            echo "The number $number is $result.";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "Please enter a valid number.";
            echo "</div>";
        }
    }
    ?>

</body>
</html>