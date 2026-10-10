<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //cetak bintang
    for ($x = 1; $x <= 5; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo "<span>*</span>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>