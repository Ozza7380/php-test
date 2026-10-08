<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan PHP</title>
</head>
<body>
    <?php
        $nilai = 80;

        if ($nilai >= 90) {
            echo "<p>Nilai A</p>";
        } elseif ($nilai >= 80) {
            echo "<p>Nilai B</p>";
        } elseif ($nilai >= 70) {
            echo "<p>Nilai C</p>";
        } else {
            echo "<p>Nilai D</p>";
        }
        //output: Nilai B
    ?>
</body>
</html>