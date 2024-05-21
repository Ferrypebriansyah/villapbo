<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nomortel = $_POST['nomortel'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
    $villa = $_POST['villa'];

    $sql = "INSERT INTO bookings (name, nomortel, email, nik, cekin, cekout, villa) VALUES ('$name', '$nomortel', '$email', '$nik', '$cekin', '$cekout', '$villa')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
// booking_process.php

<?php
include('database_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $villa = $_POST['villa'];
    $name = $_POST['name'];
    $nomortel = $_POST['nomortel'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];

    // Debugging
    echo "Data Received: ";
    var_dump($_POST);

    $sql = "INSERT INTO bookings (villa, name, nomortel, email, nik, cekin, cekout) VALUES ('$villa', '$name', '$nomortel', '$email', '$nik', '$cekin', '$cekout')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

