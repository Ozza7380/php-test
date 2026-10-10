<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        //Ganjil Genap
   for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i ini genap<br>";
        } else {
            echo "$i ini ganjil<br>";
        } 
        }
    ?>
</body>
</html>