<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<h1>Welcome to PHP!</h1>"; ?>
    <p>Waktu sekarang: <?php echo date("H:i:s"); ?></p>
    <?php
        $nama = "budi";
        $umur = 25;
        $tinggi = 175.5;
        $menikah = false;
        echo "<p>Nama saya adalah $nama.</p>";//output: Nama saya adalah budi.
        echo '<p>Nama saya adalah $nama.</p>';//output: Nama saya adalah $nama.
        ?>
        <?php
        $a = 10;
        $b = 3;

        //aritmatika
        echo $a + $b; //output: 13
        echo $a - $b; //output: 7
        echo $a * $b; //output: 30
        echo $a / $b; //output: 3.3333333333333
        echo $a % $b; //output: 1

        //perbandingan
       $a == $b; //sama nilai
       $a != $b; //sama nilai(lebih strict)
       $a > $b; //lebih besar
       $a < $b; //lebih kecil
       $a <= $b; //lebih kecil atau sama dengan
       $a >= $b; //lebih besar atau sama dengan

       
        ?>
</body>
</html>