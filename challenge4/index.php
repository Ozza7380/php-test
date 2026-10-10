<?php
    //form registrasi
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"] ?? "";
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";
        $konfirmasi_password = $_POST["konfirmasi_password"] ?? "";

        if (empty($username) || empty($email) || empty($password) || empty($konfirmasi_password)) {
            $error = "Semua field harus diisi!";
        } else if ($password !== $konfirmasi_password) {
            $error = "Password dan konfirmasi password tidak cocok!";
        } else if (strlen($password) < 6) {
            $error = "Password harus memiliki minimal 6 karakter!";
        } else {
            echo "Registrasi berhasil! Selamat datang, $username<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form registrasi -->
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password"><br><br>
        <button type="submit">Registrasi</button>
    </form>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>