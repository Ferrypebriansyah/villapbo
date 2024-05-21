<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel PBO - ROOMS</title>
    <?php require('inc/links.php');?>
    
    <style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
    </style>
    <head>
    <!-- Tambahkan link ke jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

</head>
<body class="bg-light">


<!-- Linked to Header file Page -->

<?php require('inc/header.php');?>



<div class="my-5 px-4">
<h2 class="fw-bold h-font text-center">VILLA KAMI</h2>  
<div class="h-line bg-dark"></div>
</div>


<div class="container">
<div class="row align-items-start">
    <!-- Villa 1 -->
    <div class="col">
        <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0">
                    <img src="images/rooms/milan2.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">MILAN SIGNATURE</h5>
                    <div class="features mb-2">
                        <h6 class="mb-1"> <i class="bi bi-arrow-right-short"></i>Fitur Ruangan</h6>
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 2 Kamar </span>
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 kamar Mandi </span>
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 Rooftop </span>
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 Ruang tamu </span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Fasilitas</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Smart TV</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Pemanas Ruangan</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Kolam Renang</span>
                    </div>
                    <div class="guests">
                        <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Kapasitas</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Keluarga</span>
                    </div>
                </div>
                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                    <h6 class="mb-4">Rp. 1.000.000 per malam</h6>
                    <div class="d-flex flex-column">
                        <button type="button" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" data-bs-toggle="modal" data-bs-target="#booking1">Booking Sekarang</button>
                        <button type="button" class="btn btn-sm w-100 text-white btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#availabilityModal">Cek Ketersediaan</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Villa 2 -->
    <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/venezia.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">VENEZIA SIGNATURE</h5>
            <div class="features mb-2">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Fitur Ruangan</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 4 Kamar </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 2 kamar Mandi </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 Rooftop </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 Ruang Tamu </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Grill room</span>
            </div>
            <div class="facilities mb-3">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Fasilitas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Smart TV</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Pemanas Ruangan</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Kolam Renang</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Grill Tools</span>
            </div>
            <div class="guests">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Kapasitas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Keluarga</span>
            </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">Rp. 3.000.000 per malam</h6>
            <div class="d-flex flex-column">
                <button type="button" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" data-bs-toggle="modal" data-bs-target="#booking2">Booking Sekarang</button>
                <button type="button" class="btn btn-sm w-100 text-white btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#availabilityModal2">Cek Ketersediaan</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Villa 3 -->
    <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/turin2.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3">TURIN SIGNATURE</h5>
            <div class="features mb-3">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Fitur Ruangan</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 10 Kamar </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 5 kamar Mandi </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 2 Rooftop </span>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base"> 1 Ruang Tamu </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Mini Bioskop</span>
            
            </div>
            <div class="facilities mb-3">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Fasilitas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Smart TV</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Pemanas Ruangan</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Kolam Renang</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Meja Billiard</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">lapangan Tennis</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Grill Tools</span>
            </div>
            <div class="guests">
            <h6 class="mb-1"><i class="bi bi-arrow-right-short"></i>Kapasitas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">10 Keluarga</span>
            </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">Rp. 5.000.000 per malam</h6>
            <div class="d-flex flex-column">
                <button type="button" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" data-bs-toggle="modal" data-bs-target="#booking3">Booking Sekarang</button>
                <button type="button" class="btn btn-sm w-100 text-white btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#availabilityModal3">Cek Ketersediaan</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>



<!-- Button Book Villa 1 -->
<div class="modal fade" id="booking1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formBooking1">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-bookmarks-fill"></i>Form Booking</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="villa" value="Milan Signature">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor WhatsApp</label>
                            <input type="text" name="nomortel" id="nomortel" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check-in</label>
                            <input type="date" name="cekin" id="cekin" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Check-out</label>
                            <input type="date" name="cekout" id="cekout" class="form-control" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



<!-- Button Book Villa 2 -->
<div class="modal fade" id="booking2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formBooking2">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-bookmarks-fill"></i>Form Booking</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="villa" value="Venezia Signature">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="text" name="nomortel" id="nomortel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Check-in</label>
                        <input type="date" name="cekin" id="cekin" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Check-out</label>
                        <input type="date" name="cekout" id="cekout" class="form-control" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Button Book Villa 3 -->
<div class="modal fade" id="booking3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formBooking3">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-bookmarks-fill"></i>Form Booking</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="villa" value="Turin Signature">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="text" name="nomortel" id="nomortel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Check-in</label>
                        <input type="date" name="cekin" id="cekin" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Check-out</label>
                        <input type="date" name="cekout" id="cekout" class="form-control" required>
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Notifikasi Booking Berhasil -->
<div id="successPopup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="successPopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Booking Berhasil</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Booking Anda telah berhasil diproses. Silahkan Cek <b>WhatsApp</b> dan <b>Email</b> anda untuk konfirmasi.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Kalender Ketersediaan -->
<div class="modal fade" id="availabilityModal" tabindex="-1" aria-labelledby="availabilityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="availabilityModalLabel">Kalender Ketersediaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="kalendar.php" frameborder="0" style="width: 100%; height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk Kalender Ketersediaan Villa 2 -->
<div class="modal fade" id="availabilityModal2" tabindex="-1" aria-labelledby="availabilityModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="availabilityModal2Label">Kalender Ketersediaan Villa 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="kalendar.php" frameborder="0" style="width: 100%; height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="availabilityModal3" tabindex="-1" aria-labelledby="availabilityModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="availabilityModal3Label">Kalender Ketersediaan Villa 3</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="kalendar.php" frameborder="0" style="width: 100%; height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>


<!-- Popup Booking 1 -->
<script>
        $(document).ready(function() {
            $('#formBooking1').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'admin/booking_process.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#booking1').modal('hide');
                        $('#successPopup').modal('show');
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat memproses booking.');
                    }
                });
            });

            $('#formBooking2').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'admin/booking_process.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#booking2').modal('hide');
                        $('#successPopup').modal('show');
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat memproses booking.');
                    }
                });
            });

            $('#formBooking3').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'admin/booking_process.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#booking3').modal('hide');
                        $('#successPopup').modal('show');
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat memproses booking.');
                    }
                });
            });
        });
    </script>

<!-- Linked to Header file Page -->

<?php require('inc/footer.php');?> 
</body>
</html>
