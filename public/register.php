<?php
require '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <style>
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

        /* SIMPLE LINEAR GRADIENT BACKGROUND */
        background: linear-gradient(135deg, #0D1B2A, #1B263B);
    }

    .register-container {
        width: 380px;
        background: #1B263B;
        padding: 35px;
        border-radius: 16px;
        color: #FFFFFF;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
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
        color: #FFB703;
        font-weight: 600;
    }

    label {
        font-weight: 500;
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
        box-shadow: 0 0 6px rgba(255, 183, 3, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: #FFB703;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        color: #0D1B2A;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #e6a200;
        transform: translateY(-2px);
    }

    .login-text {
        text-align: center;
        margin-top: 15px;
    }

    .login-text a {
        color: #FFB703;
        font-weight: 600;
        text-decoration: none;
    }

    .login-text a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="register-container">

        <h2>Register Akun</h2>

        <form action="proses-register.php" method="post">

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" class="btn" name="register">Daftar</button>

            <p class="login-text">
                Sudah punya akun? <a href="login.php">Login disini</a>
            </p>

        </form>

    </div>

</body>

</html>