<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial8.3</title>
</head>
<body>
    <h1>Search for a String Pattern</h1>
    <form method="post">
        <label for="text">Enter text:</label><br>
        <textarea name="text" id="text" rows="4" cols="50"></textarea><br>
        <label for="pattern">Enter pattern to search:</label><br>
        <input type="text" name="pattern" id="pattern"><br><br>
        <input type="submit" value="Search" name="submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $text = $_POST['text'];
        $pattern = $_POST['pattern'];

        echo "<br>";
        echo "<br>";

        echo "Text: " . $text . "<br>";
        echo "Pattern: " . $pattern . "<br>";
        
        if (preg_match("/$pattern/i", $text)) {
            echo "<p>Pattern found!</p>";
        } else {
            echo "<p>Pattern not found!</p>";
        }
    }
    ?>
</body>
</html>