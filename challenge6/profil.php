<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //halaman profil dinamis yang menampilkan data nama dan umur dari url
    if (isset($_GET['nama']) && isset($_GET['umur'])) {
        $nama = htmlspecialchars($_GET['nama']);
        $umur = htmlspecialchars($_GET['umur']);
        echo "<h1>Profil " . $nama . "</h1>";
        echo "<p>Umur: " . $umur . "</p>";
    } else {
        echo "<p>Nama dan umur tidak ditemukan.</p>";
    }
    ?>
</body>
</html>