<?php
require '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>

    <h2>Halaman Register</h2>

    <form action="proses-register.php" method="post">

        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="register">Daftar</button>

        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>

    </form>

</body>

</html>