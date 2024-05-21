<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $nomortel = $_POST['nomortel'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
    $villa = $_POST['villa'];

    // Tentukan harga per malam berdasarkan villa
    $price_per_night = 0;
    switch($villa) {
        case 'Milan':
            $price_per_night = 1000000;
            break;
        case 'Venezia':
            $price_per_night = 3000000;
            break;
        case 'Turin':
            $price_per_night = 5000000;
            break;
    }

    // Hitung jumlah hari
    $checkin_date = new DateTime($cekin);
    $checkout_date = new DateTime($cekout);
    $interval = $checkin_date->diff($checkout_date);
    $days = $interval->days;
    $total_price = $price_per_night * $days;

    // Insert data ke database termasuk price_per_night dan total_price
    $sql = "INSERT INTO bookings (name, nomortel, email, nik, cekin, cekout, villa, price_per_night, total_price)
            VALUES ('$name', '$nomortel', '$email', '$nik', '$cekin', '$cekout', '$villa', '$price_per_night', '$total_price')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking berhasil dibuat'); window.location.href='read.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Create Booking</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Create Booking</h2>
    <form method="POST" action="">
        Nama: <input type="text" name="name" required><br>
        Nomor WhatsApp: <input type="text" name="nomortel" required><br>
        Email: <input type="email" name="email" required><br>
        NIK: <input type="text" name="nik" required><br>
        Tanggal Check-in: <input type="date" name="cekin" required><br>
        Tanggal Check-out: <input type="date" name="cekout" required><br>
        Villa: 
        <select name="villa" required>
            <option value="Milan">Milan Signature</option>
            <option value="Venezia">Venezia Signature</option>
            <option value="Turin">Turin Signature</option>
        </select><br>
        <button type="submit">Create</button>
    </form>
</body> -->
<!-- </html> -->
