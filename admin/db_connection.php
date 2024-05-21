<?php
set_time_limit(60); // Meningkatkan batas waktu eksekusi menjadi 60 detik

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
