<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form metho="Get" action="">
        <input type="text" name="q" placeholder="Mau cari apa?"><!-- form get> -->
        <button type="submit">Cari</button>
    </form>

    <?php
    //cari data
        if (isset($_GET['q'])) {
            $keyword = htmlspecialchars($_GET['q']);
            echo "Hasil pencarian: $keyword";
        }
    ?>
</body>
</html>