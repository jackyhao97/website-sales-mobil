<?php require_once "../config.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Mitsubishi New Xpander Medan</title>
  </head>
  <body>
    <?php require_once '../navbar.php'; ?>

    <!-- Slider -->
    <div class="swiper swiper-mitsubishi-new-xpander">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= BASE_URL.DS.'assets/img/new-xpander/new-xpander-desktop.jpg' ?>" alt="Mitsubishi New Xpander" class="w-100 slider-1">
        </div>
        <div class="swiper-slide">
          <img src="<?= BASE_URL.DS.'assets/img/new-xpander/new-xpander-2-desktop.jpg' ?>" alt="Mitsubishi New Xpander" class="w-100 slider-2">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Akhir Slider -->

    <!-- Price -->
    <div class="container mt-5">
      <h2 class="text-uppercase mmc-bold text-center text-black">Harga New Xpander Medan</h2>
      <p class="text-center text-muted">Lihat harga terbaru New Xpander untuk wilayah Medan dan sekitarnya khusus untuk anda pengunjung website <a href="<?= BASE_URL; ?>" target="_blank">mitsubishimedan-vandys.id</a></p>
      <table class="table table-striped table-bordered table-width text-center">
        <thead>
          <tr class="bg-danger text-white">
            <th scope="col">Tipe</th>
            <th scope="col">Harga OTR</th>          
          </tr>
        </thead>
        <tbody class="mmc-medium">
          <?php 
            $sql = $conn->query("SELECT tipe,harga FROM tb_harga WHERE merek = 'NEW XPANDER' AND discontinue = 0 ORDER BY harga");
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) :
          ?>
          <tr>
            <td><?= $row["tipe"]; ?></td>
            <td>Rp. <?= number_format($row["harga"],0,',','.'); ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>      
      </table>
      <small class="text-muted">* Harga OTR Sumatera Utara.</small><br />
      <small class="text-muted">* Harga dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</small><br />
      <p class="text-black mt-2 mmc-bold">Untuk info detail harga lebih lanjut dapat menghubungi kami disini <a href="https://wa.me/+6282370304974?text=Halo Kak Vandys, Saya ingin bertanya lebih lanjut harga dari new xpander. (Sumber website mitsubishimedan-vandys.id)" class="text-success mmc-bold" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0823-7030-4974</a></p>
    </div>
    <!-- Akhir Price -->

    <!-- Video -->
    <section class="video-colt mt-5 parallax-xpander">
      <div class="container-100 p-4 text-center text-white">
        <h1 class="mmc-bold">Video New Xpander</h1>
        <p>Dapatkan video menarik tentang Mitsubishi New Xpander berikut.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7duk5qqzONo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <!-- Akhir Video -->

    <h2 class="mmc-bold text-center mt-5">360 Exterior New Xpander</h2>
    <div class="Sirv" data-src="https://andshant.sirv.com/new-xpander/product.spin" mousewheelstep="0"></div>

    <h2 class="mmc-bold text-center mt-5">Interior New Xpander</h2>
    <div class="swiper swiper-interior-new-xpander">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/large-open-tray-with-card-holder-usb-port-and-power-outlet.jpg'; ?>">
          <h4 class="text-center mmc-bold">Large Open Tray With Card Holder Usb Port And Power Outlet</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/meter-cluster-with-new-design-and-opening-animation.jpg'; ?>">
          <h4 class="text-center mmc-bold">Meter Cluster With New Design And Opening Animation</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-2nd-row-dual-usb-ports.jpg'; ?>">
          <h4 class="text-center mmc-bold">New 2nd Row Dual Usb Ports</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-8-inch-touchscreen-audio-with-smartphone-connectivity.jpg'; ?>">
          <h4 class="text-center mmc-bold">New 8 Inch Touchscreen Audio With Smartphone Connectivity</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-cvt-transmission.jpg'; ?>">
          <h4 class="text-center mmc-bold">New CVT Transmission</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-digital-ac.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Digital AC</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-door-trim-with-soft-touch-and-real-stitches.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Door Trim With Soft Touch And Real Stitches</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-electric-parking-brake-epb-with-brake-auto-hold-bah.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Electric Parking Brake (EPB) With Brake Auto Hold (BAH)</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-floor-console-with-arm-rest.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Floor Console With Arm Rest</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-horizontal-axis-design-dashboard-sport.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Horizontal Axis Design Dashboard Sport</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-horizontal-axis-design-dashboard-with-soft-pad-material.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Horizontal Axis Design Dashboard With Soft Pad Material</h4>
        </div>
      </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="container mt-5 mb-2">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-12">
          <img src="<?=BASE_URL.DS.'assets/img/profile.png'?>" alt="Mitsubishi Medan" class="w-100">
        </div>
        <div class="col-lg-6 col-12 info-ll">
          <h3 class="mmc-bold text-center">Info Lebih Lanjut</h3>
          <p class="text-center mt-4">Hubungi Sales Executive kami untuk mendapatkan info lebih lengkap dan terupdate untuk mobil Mitsubishi pilihan anda.</p>        
          <div class="container-100">
            <div class="row py-4" style="margin-left:0;margin-right:0">
              <div class="col-12 d-flex" style="padding: 1rem">
                <div class="container-contact w-100 p-3" style="background:#cacaca;color:black">
                  <i class="fas fa-user d-block text-center" style="font-size:40px;color:white;margin-top:60px"></i> <br>
                  <a href="https://mitsubishimedan-vandys.id" target="_blank" style="text-decoration:none"><i class="fas fa-user mr-2" style="margin-top:40px;color:#8a8484"></i> <span style="color:black">Jacky Hau</span></a> <br>
                  <a href="tel:+6282370304974" target="_blank" style="text-decoration:none"><i class="fas fa-phone-alt mr-2" style="margin-top:20px;color:#8a8484"></i> <span style="color:black">0812 7900 8217</span></a> <br>
                  <a href="https://wa.me/+6282370304974?text=Hai Kak Vandys, Saya ingin bertanya tentang produk Mitsubishi." target="_blank" style="text-decoration:none"><i class="fa fa-whatsapp mr-2" style="margin-top:20px;color:#8a8484"></i> <span style="color:black">0812 7900 8217</span></a> <br>
                  <a href="https://mitsubishimedan-vandys.id" target="_blank" style="text-decoration:none"><i class="fas fa-globe mr-2" style="margin-top:20px;color:#8a8484"></i> <span style="color:black">mitsubishijacky.com</span></a> <br>
                  <p class="text-center text-uppercase mmc-bold" style="margin-top:40px;letter-spacing:2px">Mitsubishi Jacky</p>
                </div>
              </div>            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Hubungi Kami -->

    <?php require_once '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://scripts.sirv.com/sirv.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
      new Swiper(".swiper-mitsubishi-new-xpander", {
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        slidesPerView: 1,
      });

      new Swiper(".swiper-interior-new-xpander", {
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        spaceBetween: 10,
        breakpoints: {
          800: {
            slidesPerView: 3
          },
          600: {
            slidesPerView: 2
          },
          300: {
            slidesPerView: 1
          }
        },
      });

      if (window.matchMedia("(max-width: 576px)").matches) {
        $(".slider-1").attr('src','<?= BASE_URL.DS.'assets/img/new-xpander/new-xpander-mobile.jpg' ?>')
        $(".slider-2").attr('src','<?= BASE_URL.DS.'assets/img/new-xpander/new-xpander-2-mobile.jpg' ?>')
      }
    </script>
  </body>
</html>