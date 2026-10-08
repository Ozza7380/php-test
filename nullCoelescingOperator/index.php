<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php 
        $nama = $_GET['nama'] ?? "Tamu";
        echo $nama; //jika ada nama output: Nama yang diberikan, jika tidak ada output: Tamu
    ?>
</body>
</html>