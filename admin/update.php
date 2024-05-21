<!-- Form ubah detail booking -->
<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $nomortel = $_POST['nomortel'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
    $villa = $_POST['villa'];

    $sql = "UPDATE bookings SET name='$name', nomortel='$nomortel', email='$email', nik='$nik', cekin='$cekin', cekout='$cekout', villa='$villa' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking berhasil diperbarui'); window.location.href='read.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Booking</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Update Booking</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Nomor WhatsApp: <input type="text" name="nomortel" value="<?php echo $row['nomortel']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        NIK: <input type="text" name="nik" value="<?php echo $row['nik']; ?>" required><br>
        Tanggal Check-in: <input type="date" name="cekin" value="<?php echo $row['cekin']; ?>" required><br>
        Tanggal Check-out: <input type="date" name="cekout" value="<?php echo $row['cekout']; ?>" required><br>
        Villa: <input type="text" name="villa" value="<?php echo $row['villa']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
