<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) continue; //skip angka genap
            if ($i == 7) break; //stop loop jika i = 7
            echo "$i "; //output: 1 3 5
        }
    ?>
</body>
</html>