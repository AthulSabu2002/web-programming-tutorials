<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 8.2</title>
</head>
<body>    
    <form action="" method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Check Palindrome" name="submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $inputString = $_POST["inputString"];
        
        function isPalindrome($str) {
            return $str === strrev($str);
        }
        
        if (isPalindrome($inputString)) {
            echo "<p>\"$inputString\" is a palindrome!</p>";
        } else {
            echo "<p>\"$inputString\" is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>