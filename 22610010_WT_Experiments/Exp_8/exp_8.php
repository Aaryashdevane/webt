<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations Example</title>
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

    <h2>PHP String Operations Output</h2>

    <h3>1. String Concatenation</h3>
    <pre>
    <?php
    $string1 = "Hello";
    $string2 = "World";
    $concatenated = $string1 . " " . $string2 . "!";
    echo "String 1: $string1\n";
    echo "String 2: $string2\n";
    echo "Concatenated String: $concatenated\n";
    ?>
    </pre>

    <h3>2. String Length</h3>
    <pre>
    <?php
    $string = "Hello World";
    $length = strlen($string);
    echo "String: $string\n";
    echo "Length of the string: $length\n";
    ?>
    </pre>

    <h3>3. String to Uppercase and Lowercase</h3>
    <pre>
    <?php
    $original = "Hello World";
    $uppercase = strtoupper($original);
    $lowercase = strtolower($original);
    echo "Original String: $original\n";
    echo "Uppercase String: $uppercase\n";
    echo "Lowercase String: $lowercase\n";
    ?>
    </pre>

    <h3>4. Substring Extraction</h3>
    <pre>
    <?php
    $string = "Hello World";
    $substring = substr($string, 0, 5);  // Extracts "Hello"
    echo "Original String: $string\n";
    echo "Extracted Substring: $substring\n";
    ?>
    </pre>

    <h3>5. String Replace</h3>
    <pre>
    <?php
    $originalString = "Hello World";
    $replacedString = str_replace("World", "PHP", $originalString);
    echo "Original String: $originalString\n";
    echo "String after replacement: $replacedString\n";
    ?>
    </pre>

    <h3>6. Reversing a String</h3>
    <pre>
    <?php
    $string = "Hello World";
    $reversed = strrev($string);
    echo "Original String: $string\n";
    echo "Reversed String: $reversed\n";
    ?>
    </pre>

    <h3>7. Finding a Substring in a String</h3>
    <pre>
    <?php
    $string = "Hello World";
    $pos = strpos($string, "World");
    if ($pos !== false) {
        echo "'World' found in the string at position: $pos\n";
    } else {
        echo "'World' not found in the string\n";
    }
    ?>
    </pre>

</body>
</html>
