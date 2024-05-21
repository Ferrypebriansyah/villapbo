<!-- Linked to villa page file -->
<?php require('inc/villa.php');?>

<!-- Button Book Villa 1 -->
<div class="modal fade" id="booking1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-bookmarks-fill"></i>Form Booking</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Nomor WhatsApp</label>
            <input type="text" name="nomortel" id="nomortel" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Tanggal Check-in</label>
            <input type="date" name="cekin" id="cekin" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Tanggal Check-out</label>
            <input type="date" name="cekout" id="cekout" class="form-control"required>
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
        <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-bookmarks-fill"></i>Form Booking</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Nomor WhatsApp</label>
            <input type="text" name="nomortel" id="nomortel" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control"required>
            </div>

            <div class="mb-3">
            <label>Type Of Room *</label>
                <select name="troom"  class="form-control" required>
                    <option value selected ></option>
                    <option value="Superior Room">SUPERIOR ROOM</option>
                    <option value="Deluxe Room">DELUXE ROOM</option>
                    <option value="Guest House">GUEST HOUSE</option>
                    <option value="Single Room">SINGLE ROOM</option>
                </select>
            </div>
            
            <div class="mb-3">
            <label class="form-label">Tanggal Check-in</label>
            <input type="date" name="cekin" id="cekin" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Tanggal Check-out</label>
            <input type="date" name="cekout" id="cekout" class="form-control"required>
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
        <form>
        <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-bookmarks-fill"></i>>Form Booking</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Nomor WhatsApp</label>
            <input type="text" name="nomortel" id="nomortel" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Tanggal Check-in</label>
            <input type="date" name="cekin" id="cekin" class="form-control"required>
            </div>
            <div class="mb-3">
            <label class="form-label">Tanggal Check-out</label>
            <input type="date" name="cekout" id="cekout" class="form-control"required>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Sekarang</button>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>