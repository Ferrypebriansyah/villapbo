<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTEL PBO - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php');?>
    <style>
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>
  <body class="bg-light">


  <!-- Linked to Header file Page -->

  <?php require('inc/header.php');?>
  
    <!-- Swipper Hotel Carousel-->
    <div class="container-fluid px-lg-4 mt-4">
      <!-- Swiper -->
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/2.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/4.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/5.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/6.png" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>

    <!--Header Preview Pilihan Villa -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PILIHAN VILLA</h2>
    <div class="container">
      <div class="row">

        <!-- Villa Milan -->
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/rooms/milan2.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>MILAN</h5>
              <h6 class="mb-4">Rp. 1.000.000 per malam</h6>
              <p>Pilihan yang ideal bagi para tamu yang mencari akomodasi yang sederhana namun nyaman. 
              </p>
              <!-- Button Detail Lainnya -->
              <a href="villa.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Detail lainnya..</a>
            </div>

          </div>
        </div>

        <!-- Villa Venezia -->
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/rooms/venezia.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>VENEZIA</h5>
              <h6 class="mb-4">Rp. 2.500.000 per malam</h6>
              <p>Menawarkan tingkat privasi yang lebih tinggi dengan fasilitas yang ditingkatkan.
              </p>
              <!-- Button Detail Lainnya -->
              <a href="villa.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Detail lainnya..</a>
            </div>
          </div>
        </div>

        <!-- Villa Turin -->
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/rooms/turin2.jpg" class="card-img-top" />
            <div class="card-body">
              <h5>TURIN</h5>
              <h6 class="mb-4">Rp. 4.000.000 per malam</h6>
              <p>Pilihan terbaik bagi tamu yang mencari pengalaman menginap yang istimewa dan tak tertandingi. 
              </p>
              <!-- Button Detail Lainnya -->
              <a href="villa.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Detail lainnya..</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Header Fasilitas Kami -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">FASILITAS KAMI</h2>

    <!-- Preview fasilitas yang tersedia -->

    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px" />
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/pemanas.svg" width="80px" />
          <h5 class="mt-3">Heater</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/alatgrill.svg" width="80px" />
          <h5 class="mt-3">Alat Grill</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/ac.svg" width="80px" />
          <h5 class="mt-3">Air Conditioner</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/televisi.svg" width="80px" />
          <h5 class="mt-3">Smart TV</h5>
        </div>
      </div>
    </div>


    <!--Header Testimoni Pengunjung -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONI PENGUNJUNG</h2>

    <div class="container mt-5">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/rating.svg" width="30px" />
              <h6 class="m-0 ms-2">Ferry Pragosa</h6>
            </div>
            <p>"Menginap di Villa PBO adalah pilihan terbaik untuk bulan madu kami. Lokasinya yang strategis dengan pemandangan matahari terbenam yang menakjubkan membuat momen kami semakin spesial. Kami sangat menghargai kehangatan dan keramahan para staf. Terima kasih telah membuat pengalaman kami begitu indah."</p>
            <div class="rating">
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/rating.svg" width="30px" />
              <h6 class="m-0 ms-2">Andi dan Keluarga</h6>
            </div>
            <p>"Pengalaman menginap di Villa PBO benar-benar luar biasa! Suasana yang tenang dan pemandangan alam yang asri membuat kami sekeluarga merasa sangat rileks. Fasilitas yang disediakan sangat lengkap dan terawat dengan baik. Kami pasti akan kembali lagi ke sini! Terima kasih atas pelayanan yang ramah dan profesional."</p>
            <div class="rating">
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/rating.svg" width="30px" />
              <h6 class="m-0 ms-2">Mawardi dan Suami</h6>
            </div>
            <p>"Saya sangat puas dengan kunjungan saya di Villa PBO. Kamar-kamarnya bersih dan nyaman, dan kolam renangnya sangat menyegarkan. Staf villa sangat membantu dan selalu siap melayani kebutuhan kami. Tempat ini sempurna untuk liburan singkat dari hiruk-pikuk kota. Highly recommended!!!"</p>
            <div class="rating">
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/rating.svg" width="30px" />
              <h6 class="m-0 ms-2">Kang Lhon-Tong</h6>
            </div>
            <p>"วิลล่าเนอร์วานาเป็นสวรรค์ที่ซ่อนอยู่! วิลล่านี้ล้อมรอบด้วยความงามของธรรมชาติที่น่าตื่นตาตื่นใจ และบรรยากาศที่เงียบสงบ วิลล่ากว้างขวางและสะดวกสบาย พร้อมด้วยสิ่งอำนวยความสะดวกที่ทันสมัย เด็กๆ ชอบมากกับพื้นที่เล่นและสระว่ายน้ำ พวกเราจะกลับมาที่นี่อีกแน่นอนในวันหยุดครั้งต่อไป"</p>
            <div class="rating">
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/facilities/rating.svg" width="30px" />
              <h6 class="m-0 ms-2">Putin Zelensky</h6>
            </div>
            <p>"Я очень впечатлен Villa PBO. От обслуживания до удобств - все было безупречно. Завтрак был очень вкусным и предлагал широкий выбор блюд. Атмосфера была настолько спокойной, что идеально подходила для отдыха. Спасибо за незабываемый опыт проживания!"</p>
            <div class="rating">
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      
    </div>

    <!-- Reach Us Header -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">JANGKAUAN KAMI</h2>

    <div class="container">
      <div class="row">
        <!-- Villa Location Frame -->
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe
            class="w-100 rounded"
            height="320px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.1681449241278!2d105.6558938!3d-6.4790227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43c9b86a346b9d%3A0xec0d502e94af8656!2sPantai%20Tj.%20Lesung!5e0!3m2!1sid!2sid!4v1715313653630!5m2!1sid!2sid"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <!-- Social Media and Call Number -->
        <div class="col-lg-4 com-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Hubungi Kami</h5>
            <a href="tel: +621234567890" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i>+62-212-69 </a>
            <br />
            <a href="tel: +621234567890" class="d-inline-block text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i>+62-696-07 </a>
          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Kontak Kami</h5>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6"> <i class="bi bi-twitter-x me-1"></i> villaPBO </span>
            </a>
            <br />
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6"> <i class="bi bi-facebook me-1"></i> villa.PBO </span>
            </a>
            <br />
            <a href="#" class="d-inline-block">
              <span class="badge bg-light text-dark fs-6"> <i class="bi bi-instagram me-1"></i> @villapbo </span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Linked to Footer file Page -->

    <?php require('inc/footer.php');?>

    <!-- Script support -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      // Swiper Preview Villa script
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
      });

      // Swiper Testimoni
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
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
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
  </body>
</html>
