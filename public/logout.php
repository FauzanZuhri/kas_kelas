<?php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke login.php 
header("Location: login.php");;
exit;

?>