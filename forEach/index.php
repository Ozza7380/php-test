<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        $buah = ["apel", "jeruk", "mangga", "pisang"];
        foreach ($buah as $value) {
            echo "$value <br>";
            //output: apel, jeruk, mangga, pisang
        }

        //dengan key => value
        $nilai = ["Matematika" => 90, "Bahasa Indonesia" => 80];
        foreach ($nilai as $mapel => $score) {
            echo "$mapel: $score <br>";
            //output: Matematika: 90, Bahasa Indonesia: 80
        }
    ?>
</body>
</html>