<?php
// Linked to file database
include 'admin/db_connection.php';

// Fetch bookings from the database
$sql = "SELECT villa, cekin, cekout FROM bookings";
$result = $conn->query($sql);

$bookings = [];
while ($row = $result->fetch_assoc()) {
    $bookings[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .booked {
            background-color: #f700fb;
            color: #ffffff;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Kalender Booking Villa</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="calendar">
                    <div id="calendar-controls" class="text-center mb-3">
                        <button class="btn btn-primary" id="prev-month">Sebelumnya</button>
                        <span id="current-month" class="mx-2"></span>
                        <button class="btn btn-primary" id="next-month">Berikutnya</button>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Minggu</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                            <!-- Mencetak kalender yang diambil dari API -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var bookings = <?php echo json_encode($bookings); ?>;
            
            function generateCalendar(month, year) {
    var daysInMonth = new Date(year, month + 1, 0).getDate();
    var firstDayOfMonth = new Date(year, month, 1).getDay();
    var calendarBody = $('#calendar-body');
    calendarBody.empty();

    var date = 1;
    for (var i = 0; i < 6; i++) {
        var row = $('<tr></tr>');
        for (var j = 0; j < 7; j++) {
            if (i === 0 && j < firstDayOfMonth) {
                row.append('<td></td>');
            } else if (date > daysInMonth) {
                break;
            } else {
                var fullDate = year + '-' + (month + 1).toString().padStart(2, '0') + '-' + date.toString().padStart(2, '0');
                var bookedVillas = isBooked(fullDate, bookings);
                var cell = $('<td></td>').text(date);
                if (Object.keys(bookedVillas).length > 0) {
                    // Ambil jenis villa yang dibooking pada tanggal tersebut
                    var bookedVillaTypes = Object.keys(bookedVillas);
                    var classNames = bookedVillaTypes.map(function(villaType) {
                        return 'booked-' + villaType.toLowerCase().replace(/\s+/g, '-');
                    });
                    // Atur warna tulisan berdasarkan jenis villa yang dibooking
                    cell.addClass(classNames.join(' ')).append('<br><small>' + bookedVillaTypes.join(', ') + '</small>');
                }
                row.append(cell);
                date++;
            }
        }
        calendarBody.append(row);
    }

    $('#current-month').text(new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' }));
}


            function isBooked(date, bookings) {
                for (var i = 0; i < bookings.length; i++) {
                    var booking = bookings[i];
                    if (date >= booking.cekin && date <= booking.cekout) {
                        return booking.villa;
                    }
                }
                return false;
            }

            var today = new Date();
            var currentMonth = today.getMonth();
            var currentYear = today.getFullYear();

            $('#prev-month').click(function() {
                if (currentMonth === 0) {
                    currentMonth = 11;
                    currentYear--;
                } else {
                    currentMonth--;
                }
                generateCalendar(currentMonth, currentYear);
            });

            $('#next-month').click(function() {
                if (currentMonth === 11) {
                    currentMonth = 0;
                    currentYear++;
                } else {
                    currentMonth++;
                }
                generateCalendar(currentMonth, currentYear);
            });

            generateCalendar(currentMonth, currentYear);
        });

        function generateCalendar(month, year) {
    var daysInMonth = new Date(year, month + 1, 0).getDate();
    var firstDayOfMonth = new Date(year, month, 1).getDay();
    var calendarBody = $('#calendar-body');
    calendarBody.empty();

    var date = 1;
    for (var i = 0; i < 6; i++) {
        var row = $('<tr></tr>');
        for (var j = 0; j < 7; j++) {
            if (i === 0 && j < firstDayOfMonth) {
                row.append('<td></td>');
            } else if (date > daysInMonth) {
                break;
            } else {
                var fullDate = year + '-' + (month + 1).toString().padStart(2, '0') + '-' + date.toString().padStart(2, '0');
                var bookedVilla = isBooked(fullDate, bookings);
                var cell = $('<td></td>').text(date);
                if (bookedVilla) {
                    cell.addClass('booked').append('<br><small>' + bookedVilla + '</small>');
                }
                row.append(cell);
                date++;
            }
        }
        calendarBody.append(row);
    }

    $('#current-month').text(new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' }));
}

function isBooked(date, bookings) {
    var bookedVillas = {};
    for (var i = 0; i < bookings.length; i++) {
        var booking = bookings[i];
        var cekin = new Date(booking.cekin);
        var cekout = new Date(booking.cekout);
        if (date >= cekin.toISOString().slice(0, 10) && date <= cekout.toISOString().slice(0, 10)) {
            bookedVillas[booking.villa] = true;
        }
    }
    return bookedVillas;
}

$(document).ready(function() {
    var bookings = <?php echo json_encode($bookings); ?>;
    
    function generateCalendar(month, year) {
        var daysInMonth = new Date(year, month + 1, 0).getDate();
        var firstDayOfMonth = new Date(year, month, 1).getDay();
        var calendarBody = $('#calendar-body');
        calendarBody.empty();
        
        var date = 1;
        for (var i = 0; i < 6; i++) {
            var row = $('<tr></tr>');
            for (var j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    row.append('<td></td>');
                } else if (date > daysInMonth) {
                    break;
                } else {
                    var fullDate = year + '-' + (month + 1).toString().padStart(2, '0') + '-' + date.toString().padStart(2, '0');
                    var bookedVillas = isBooked(fullDate, bookings);
                    var cell = $('<td></td>').text(date);
                    if (Object.keys(bookedVillas).length > 0) {
                        cell.addClass('booked').append('<br><small>' + Object.keys(bookedVillas).join(', ') + '</small>');
                    }
                    row.append(cell);
                    date++;
                }
            }
            calendarBody.append(row);
        }

        $('#current-month').text(new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' }));
    }

    var today = new Date();
    var currentMonth = today.getMonth();
    var currentYear = today.getFullYear();

    $('#prev-month').click(function() {
        if (currentMonth === 0) {
            currentMonth = 11;
            currentYear--;
        } else {
            currentMonth--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    $('#next-month').click(function() {
        if (currentMonth === 11) {
            currentMonth = 0;
            currentYear++;
        } else {
            currentMonth++;
        }
        generateCalendar(currentMonth, currentYear);
    });

    generateCalendar(currentMonth, currentYear);
});



    </script>
</body>
</html>
