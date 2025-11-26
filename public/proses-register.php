<?php
require '../config/koneksi.php';

// cek tombol
if (isset($_POST["register"])) {

    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // cek username apakah sudah ada?
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
                alert('Username sudah digunakan!');
                window.location='register.php';
              </script>";
        exit;
    }

    // insert user baru
    $query = "INSERT INTO users (username, password)
              VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal!');
                window.location='register.php';
              </script>";
    }
}
?>