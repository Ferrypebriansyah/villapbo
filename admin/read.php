<!-- Melihat hasil input form booking user -->
<?php
include 'db_connection.php';

$selected_villa = isset($_GET['villa']) ? $_GET['villa'] : '';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM bookings WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking berhasil dihapus'); window.location.href='read.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$sql = "SELECT * FROM bookings";
if (!empty($selected_villa)) {
    $sql .= " WHERE villa = '$selected_villa'";
}
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Site</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require('index.php'); ?>
    <div class="container mt-5">
        <h2>Bookings List</h2>
        <form method="GET" action="read.php" class="mb-3">
            <div class="form-row">
                <div class="col-md-4">
                    <select name="villa" class="form-control">
                        <option value="">Pilih Villa</option>
                        <option value="Milan" <?php if ($selected_villa == 'Milan') echo 'selected'; ?>>Milan</option>
                        <option value="Venezia" <?php if ($selected_villa == 'Venezia') echo 'selected'; ?>>Venezia</option>
                        <option value="Turin" <?php if ($selected_villa == 'Turin') echo 'selected'; ?>>Turin</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor WhatsApp</th>
                        <th>Email</th>
                        <th>NIK</th>
                        <th>Tanggal Check-in</th>
                        <th>Tanggal Check-out</th>
                        <th>Villa</th>
                        <th>Harga per Malam</th>
                        <th>Total Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $price_per_night = 0;
                            switch($row['villa']) {
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
                            $checkin_date = new DateTime($row['cekin']);
                            $checkout_date = new DateTime($row['cekout']);
                            $interval = $checkin_date->diff($checkout_date);
                            $days = $interval->days;
                            $total_price = $price_per_night * $days;

                            // Update the total price in the database
                            $update_sql = "UPDATE bookings SET price_per_night = $price_per_night, total_price = $total_price WHERE id = {$row['id']}";
                            $conn->query($update_sql);

                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['nomortel']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['nik']}</td>
                                    <td>{$row['cekin']}</td>
                                    <td>{$row['cekout']}</td>
                                    <td>{$row['villa']}</td>
                                    <td>" . number_format($price_per_night, 0, ',', '.') . "</td>
                                    <td>" . number_format($total_price, 0, ',', '.') . "</td>
                                    <td>
                                        <a href='read.php?delete_id={$row['id']}' class='btn btn-danger mb-3' onclick='return confirm(\"Apakah Anda yakin ingin menghapus booking ini?\")'>Delete</a>
                                        <a href='edit.php?id={$row['id']}' class='btn btn-primary mb-3'>Edit</a>
                                        <a href='cetak.php?id={$row['id']}' class='btn btn-success'>Cetak PDF</a>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>No bookings found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




<?php $conn->close(); ?>
