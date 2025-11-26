<?php
session_start();
include '../config/koneksi.php';

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
    /* === GLOBAL === */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #0D1B2A, #1B263B, #415A77);
    }

    /* === LOGIN CARD === */
    .login-container {
        width: 380px;
        background: rgba(27, 38, 59, 0.9);
        /* Semi-transparent secondary */
        padding: 35px;
        border-radius: 18px;
        backdrop-filter: blur(8px);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
        color: #FFFFFF;
        position: relative;
        z-index: 10;
        animation: fadeIn 0.8s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 600;
        color: #FFB703;
    }

    label {
        font-weight: 500;
        color: #FFFFFF;
    }

    input {
        width: 100%;
        padding: 12px;
        margin: 6px 0 20px;
        border-radius: 8px;
        border: 1px solid #0D1B2A;
        outline: none;
        background: #0D1B2A;
        color: #FFFFFF;
        transition: 0.3s;
    }

    input:focus {
        border-color: #FFB703;
        box-shadow: 0 0 6px rgba(255, 183, 3, 0.6);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: #FFB703;
        border: none;
        border-radius: 8px;
        color: #0D1B2A;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #e6a200;
        transform: translateY(-2px);
    }

    .error-msg {
        background: #ffcccc;
        color: #660000;
        padding: 10px;
        margin-bottom: 15px;
        border-left: 5px solid #cc0000;
        border-radius: 5px;
        text-align: center;
    }

    .register-text {
        text-align: center;
        margin-top: 15px;
        color: #FFFFFF;
    }

    .register-text a {
        color: #FFB703;
        font-weight: 600;
        text-decoration: none;
    }

    .register-text a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login Admin</h2>

        <?php if(isset($error)) : ?>
        <div class="error-msg">Username atau password salah!</div>
        <?php endif; ?>

        <form action="" method="post">

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" class="btn" name="login">Login</button>

            <p class="register-text">
                Belum punya akun? <a href="register.php">Daftar disini</a>
            </p>

        </form>
    </div>

</body>

</html>