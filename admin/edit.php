<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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

    // Update data di database termasuk price_per_night dan total_price
    $sql = "UPDATE bookings SET name='$name', nomortel='$nomortel', email='$email', nik='$nik', cekin='$cekin', cekout='$cekout', villa='$villa', price_per_night='$price_per_night', total_price='$total_price' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking berhasil diperbarui'); window.location.href='read.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center p-3 mb-2 bg-dark text-light">Edit Booking</h2>
        <form method="post" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div class="form-group mb-3">
                <label for="name">Nama:</label>
                <input type="text" class="form-control shadow-sm p-2 bg-body rounded" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="nomortel">Nomor WhatsApp:</label>
                <input type="text" class="form-control shadow-sm p-2 bg-body rounded" id="nomortel" name="nomortel" value="<?php echo $row['nomortel']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control shadow-sm p-2 bg-body rounded" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="nik">NIK:</label>
                <input type="text" class="form-control shadow-sm p-2 bg-body rounded" id="nik" name="nik" value="<?php echo $row['nik']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="cekin">Tanggal Check-in:</label>
                <input type="date" class="form-control shadow-sm p-2 bg-body rounded" id="cekin" name="cekin" value="<?php echo $row['cekin']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="cekout">Tanggal Check-out:</label>
                <input type="date" class="form-control shadow-sm p-2 bg-body rounded" id="cekout" name="cekout" value="<?php echo $row['cekout']; ?>" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="villa">Villa:</label>
                <select class="form-control shadow-sm p-2 bg-body rounded" id="villa" name="villa" required>
                    <option value="Milan" <?php echo ($row['villa'] == 'Milan') ? 'selected' : ''; ?>>Milan Signature</option>
                    <option value="Venezia" <?php echo ($row['villa'] == 'Venezia') ? 'selected' : ''; ?>>Venezia Signature</option>
                    <option value="Turin" <?php echo ($row['villa'] == 'Turin') ? 'selected' : ''; ?>>Turin Signature</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Update Booking</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
