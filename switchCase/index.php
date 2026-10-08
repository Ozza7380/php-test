<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php 
    $hari = date("l");

    switch ($hari) {
        case "Monday":
            echo "<p>Mulai Kerja!</p>";
            break;
        case "Friday":
            echo "<p>Hari terakhir kerja!</p>";
            break;
        case "Saturday":
        case "Sunday":
            echo "<p>Libur!</p>";
            break;
        default:
            echo "<p>Hari biasa</p>";
    }
    ?>
</body>
</html>