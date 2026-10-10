<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            //Ganjil Genap
   for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        $coloum = $x * $y;
        echo "<span>$x x $y = $coloum </span>";
    }
    echo "<br>";
   }
    ?>
</body>
</html>