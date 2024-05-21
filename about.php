<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel PBO - Tentang Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php');?>
    <style>
      .box{
        border-top-color: var(--teal) !important;

      }
    </style>
  </head>
  <body class="bg-light">


  <!-- Linked to Header file Page -->

  <?php require('inc/header.php');?>

  <!-- About US Desc-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">TENTANG KAMI</h2>  
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    sebuah tempat yang menjadikan perjalanan Anda menjadi pengalaman yang tak terlupakan. Terletak di tengah-tengah pemandangan alam yang menakjubkan, kami menawarkan ruang santai yang mewah dan nyaman untuk memenuhi kebutuhan liburan Anda. Dengan desain yang elegan dan fasilitas modern, 
    kami berkomitmen untuk memberikan pengalaman menginap yang istimewa bagi setiap tamu.
    </p>
  </div>

  <!-- Deskripsi Pemilik Villa -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-2 order-2">
        <h1 class="my-4 fw-bold h-font text-center">Pemilik Villa</h1>
        <p>
        Villa PBO dimiliki oleh Bapak Julian Shigeo dan juga anaknya yang bernama Jordi Cahya Nino yang juga akrab dipanggil Nino. Nino adalah seorang aktor muda yang telah meraih banyak penghargaan di industri film Internasional. Dengan kecintaannya pada seni dan alam,  mendirikan Villa PBO sebagai tempat peristirahatan yang memadukan kemewahan dan ketenangan bagi para tamu.

Sebagai seorang yang kerap bepergian dan menginap di berbagai hotel serta villa di seluruh dunia, Nino memiliki pemahaman mendalam tentang standar kenyamanan dan pelayanan yang tinggi. Pengalaman ini mendorongnya untuk menciptakan Villa PBO, di mana setiap detail diperhatikan dengan seksama untuk memastikan setiap tamu merasa istimewa.

Di sela-sela kesibukannya sebagai aktor, Nino aktif terlibat dalam pengelolaan Villa PBO. Ia sering mengunjungi villa dan berinteraksi langsung dengan tamu untuk mendengarkan masukan dan memastikan mereka mendapatkan pengalaman menginap yang tak terlupakan. Dedikasinya terhadap kualitas dan kepuasan tamu menjadikan Villa PBO sebagai salah satu pilihan utama bagi wisatawan yang mencari tempat peristirahatan yang mewah dan nyaman di Tanjung Lesung.

Dengan perpaduan antara bakat seni dan komitmen terhadap layanan unggulan, Jordi Cahya Nino berhasil menciptakan sebuah villa yang tidak hanya menawarkan fasilitas lengkap tetapi juga suasana yang hangat dan ramah, mencerminkan kepribadiannya yang ramah dan penuh perhatian.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
        <img src="images/about/about.jpg" class="border border-5 border-dark  w-100">
      </div>
    </div>
  </div>

    <!-- Ringkasan Villa -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">3 VILLA</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ PENGUNJUNG</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">100+ RATING</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">50+ STAFF</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Anggota Kelompok -->
  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/peri.jpg" class="w-100">
          <h5 class="mt-2">Ferry Pebriansyah</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/adam.jpg" class="w-100">
          <h5 class="mt-2">Adam Firmansyah</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/bagus.jpg" class="w-100">
          <h5 class="mt-2">Bagus Satrio</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/patur.jpg" class="w-100">
          <h5 class="mt-2">Muhammad Fathurrahman</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/dapa.jpg" class="w-100">
          <h5 class="mt-2">Daffa Atha Rizq</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Linked to Header file Page -->

  <?php require('inc/footer.php');?> 

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        },      
    });
  </script>

  </body>
</html>
