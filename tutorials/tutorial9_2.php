<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 9.2</title>
</head>
<body>
    <h2>Items Array Operations</h2>

    <?php

    $items = [
        "Bread" => 30,
        "Butter" => 30,
        "Jam" => 35,
        "Cheese" => 32
    ];


    echo "<h3>Original Array:</h3>";
    echo "<pre>";
    foreach ($items as $item => $price) {
        echo "$item: $price\n";
    }
    echo "</pre>";


    asort($items);
    echo "<h3>Sorted Array by Value:</h3>";
    echo "<pre>";
    foreach ($items as $item => $price) {
        echo "$item: $price\n";
    }
    echo "</pre>";
    ?>

</body>
</html>