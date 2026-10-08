<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;
        $operator = "+"; // coba ganti: +, -, *, /, %
        switch ($operator) {
            case "+": $hasil = $a + $b; break;
            case "-": $hasil = $a - $b; break;
            case "*": $hasil = $a * $b; break;
            case "/": $hasil = $a / $b; break;
            case "%": $hasil = $a % $b; break;
            default: $hasil = "Operator tidak valid"; break;
        }
        echo "$a $operator $b = $hasil"; //output: 10 + 5 = 15
    ?>
</body>
</html>