<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container {
            flex: 1;
        }
        .welcome-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
            text-align: center;
        }
        .welcome-container h1 {
            color: #333;
        }
        .welcome-container p {
            color: #666;
        }
        .logout-button {
            margin-top: 1rem;
            background: #ff4757;
            border: none;
            border-radius: 30px;
            padding: 0.5rem 2rem;
            color: #fff;
            transition: background 0.3s ease;
        }
        .logout-button:hover {
            background: #e04048;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="read.php">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="welcome-container">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Selamat Datang di Panel Admin</p>
            <button class="logout-button" onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
