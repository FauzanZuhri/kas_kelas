<?php
// koneksi.php
// Koneksi ke database MySQL menggunakan MySQLi

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'kas_kelas';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>