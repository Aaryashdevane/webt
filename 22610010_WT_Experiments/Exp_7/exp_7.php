<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <h2>PHP Control Statements Output</h2>

    <h3>IF-ELSE Statement</h3>
    <pre>
    <?php
    // IF-ELSE statement
    $number = 15;

    if ($number > 10) {
        echo "The number is greater than 10.\n";
    } else {
        echo "The number is less than or equal to 10.\n";
    }
    ?>
    </pre>

    <h3>SWITCH Statement</h3>
    <pre>
    <?php
    // SWITCH statement
    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Today is Monday.\n";
            break;
        case "Tuesday":
            echo "Today is Tuesday.\n";
            break;
        default:
            echo "It's another day.\n";
            break;
    }
    ?>
    </pre>

    <h3>FOR Loop</h3>
    <pre>
    <?php
    // FOR loop
    echo "For Loop Output:\n";
    for ($i = 1; $i <= 5; $i++) {
        echo "Count: $i\n";
    }
    ?>
    </pre>

    <h3>WHILE Loop</h3>
    <pre>
    <?php
    // WHILE loop
    echo "While Loop Output:\n";
    $j = 1;
    while ($j <= 5) {
        echo "Count: $j\n";
        $j++;
    }
    ?>
    </pre>

    <h3>DO-WHILE Loop</h3>
    <pre>
    <?php
    // DO-WHILE loop
    echo "Do-While Loop Output:\n";
    $k = 1;
    do {
        echo "Count: $k\n";
        $k++;
    } while ($k <= 5);
    ?>
    </pre>

</body>
</html>
