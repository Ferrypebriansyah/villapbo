<?php
session_start();
include 'db_connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query untuk memeriksa kredensial
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Pengguna ditemukan, set session
        $_SESSION['username'] = $username;
        header("Location: read.php"); // Redirect ke halaman Bookings setelah login berhasil
        exit();
    } else {
        $error_message = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            position: relative; /* Menjadikan body sebagai posisi relatif */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden; /* Menghilangkan scroll */
            background: linear-gradient(135deg, #202A3B 0%, #0B1626 100%);
        }

        .moving-element {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Menghindari elemen menangkap event mouse */
        }

        .ball {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-radius: 50%;
            animation: moveBall linear infinite;
        }

        .ball:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-duration: 5s; /* Durasi animasi */
        }

        .ball:nth-child(2) {
            top: 50%;
            left: 80%;
            animation-duration: 3s; /* Durasi animasi */
        }

        .ball:nth-child(3) {
            top: 80%;
            left: 50%;
            animation-duration: 4s; /* Durasi animasi */
        }

        @keyframes moveBall {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg); /* Gerakan bola ke atas */
            }
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9);
            position: relative;
            animation: borderGlow 1.5s infinite;
            z-index: 1; /* Menempatkan kartu di atas elemen bergerak */
        }

        .card-body {
            padding: 2rem;
            position: relative;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
            background: #667eea;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #764ba2;
        }

        .alert {
            border-radius: 30px;
        }

        .icon-container {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            background: #667eea;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .icon-container i {
            color: #fff;
            font-size: 2rem;
        }

        .card-title {
            margin-top: 30px;
            font-size: 1.5rem;
            color: #333;
        }

        .form-label {
            font-weight: bold;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        @keyframes borderGlow {
            0% {
                box-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 40px #ff0000;
            }

            50% {
                box-shadow: 0 0 20px #ff0000, 0 0 40px #ff0000, 0 0 80px #ff0000, 0 0 160px #ff0000;
            }

            100% {
                box-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 20px #ff0000, 0 0 40px #ff0000;
            }
        }
    </style>
</head>

<body>
    <div class="moving-element">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-container">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <h5 class="card-title mb-4">Login</h5>
                        <?php if (isset($error_message)): ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
