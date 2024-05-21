<?php
include 'db_connection.php';

// Hitung jumlah total bookings
$sql_total_bookings = "SELECT COUNT(id) as total_bookings FROM bookings";
$result_total_bookings = $conn->query($sql_total_bookings);
$total_bookings = $result_total_bookings->fetch_assoc()['total_bookings'];

// Hitung jumlah total bookings hari ini
$today = date('Y-m-d');
$sql_today_bookings = "SELECT COUNT(id) as today_bookings FROM bookings WHERE DATE(cekin) = '$today'";
$result_today_bookings = $conn->query($sql_today_bookings);
$today_bookings = $result_today_bookings->fetch_assoc()['today_bookings'];

// Hitung progress hotel
$progress = ($total_bookings > 0) ? round(($today_bookings / $total_bookings) * 100) : 0;


$sql = "SELECT villa, COUNT(id) as jumlah FROM bookings GROUP BY villa";
$result = $conn->query($sql);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['villa'];
    $data[] = $row['jumlah'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Progress</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<?php require('index.php');?>

<div class="container mt-5 bg-white">
    <h2>Hotel Progress</h2>
    <canvas id="progressChart" width="400" height="200"></canvas>
    <script>
        var ctx = document.getElementById('progressChart').getContext('2d');
        var progressChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Bookings'],
                datasets: [{
                    label: 'Bookings',
                    data: [<?php echo $total_bookings; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <p>Total Bookings: <?php echo $total_bookings; ?></p>

</div>



<div class="container mt-5 bg-white">
    <h2>Hotel Progress</h2>
    <canvas id="villaChart" width="400" height="200"></canvas>
    <script>
        var ctx = document.getElementById('villaChart').getContext('2d');
        var villaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    // Hapus atau kosongkan label
                    label: '',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
