<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
include '../config/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | KAS KELAS</title>
</head>

<body>
    <h2>Selamat Datang di Dashboard KAS KELAS</h2>
    <a href="logout.php">Logout</a>
</body>

</html>