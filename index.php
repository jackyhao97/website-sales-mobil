<?php
  require_once 'config.php';
?>

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

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y05V5NDS42"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-Y05V5NDS42');
    </script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=BASE_URL.DS.'assets/img/'?>apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?=BASE_URL.DS.'assets/img/'?>favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <title>Harga Mitsubishi Medan Terbaik</title>
  </head>
  <body>
    <?php require_once './navbar.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: 73px">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASE_URL.DS.'assets/img/slider-promo-new-xpander.png'?>" class="d-none d-sm-block w-100" alt="Mitsubishi Promo Medan">
          <img src="<?=BASE_URL.DS.'assets/img/slider-promo-new-xpander-mb.jpg'?>" class="d-sm-none d-block w-100" alt="Mitsubishi Promo Medan">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/new-xpander.jpg'?>" class="d-none d-sm-block w-100" alt="Mitsubishi New Xpander">
          <img src="<?=BASE_URL.DS.'assets/img/new-xpander-mb.jpg'?>" class="d-sm-none d-block w-100" alt="Mitsubishi Promo Medan">
        </div>
        <div class="carousel-item">
          <img src="<?=BASE_URL.DS.'assets/img/new-pajero.jpg'?>" class="d-none d-sm-block w-100" alt="Mitsubishi New Pajero Sport">
          <img src="<?=BASE_URL.DS.'assets/img/new-pajero-mb.jpg'?>" class="d-sm-none d-block w-100" alt="Mitsubishi Promo Medan">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <section class="profile" id="profile">
      <div class="container-fluid bg-profile">
        <div class="row p-4 p-sm-5 align-items-center">
          <div class="col-12 col-md-6 text-center">
            <img src="<?=BASE_URL.DS.'assets/img/profile.png'?>" alt="Profile">
          </div>
          <div class="col-12 col-md-6 text-white">
            <h3>ELIA EBENEZER GINTING - Senior Sales Executive</h3>
            <h1 class="text-uppercase text-mitsubishi">Mitsubishi Medan</h1>
            <p>Percayakan urusan mobil Mitsubishi anda bersama Kami. ELIA EBENEZER GINTING - Senior Sales Executive dari Mitsubishi Sardana Medan Siap melayani anda dan memberikan penawaran spesial yang terbaik bagi anda. Pertanyaan seputar Spesifikasi , Simulasi Kredit, Info Stok, Promo Terbaru, Booking Service, Test Drive dan Pemesanan silahkan menghubungi kami disini.</p>
            <a class="btn btn-primary" href="tel:+6281279008217" target="_blank"><i class="fa fa-phone-alt"></i> Hubungi Kami</a>
            <a class="btn btn-success mt-2 mt-sm-0" href="https://wa.me/+6281279008217?text=Halo Jacky, Saya ingin bertanya tentang produk Mitsubishi. (sumber website)" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp Kami</a>
          </div>
        </div>
      </div>
    </section>
    <section class="testimoni" id="testimoni">
      <div class="container-fluid bg-testimoni">
        <div class="row">
          <div class="col-12">
            <img src="./assets/img/customer-testimonial.png" alt="Testimoni Mitsubishi Medan" class="customer-testimonial">
          </div>
        </div>
        <div class="row">
          <div class="col grid px-5 mb-5">
            <img src="./assets/img/testimoni/1.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/2.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/3.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/4.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/5.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/6.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/7.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/8.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/9.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/10.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
            <img src="./assets/img/testimoni/11.jpeg" alt="Testimoni Mitsubishi Medan" style="border-radius:10px;border:1px solid white">
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="<?=BASE_URL.DS.'testimoni-mitsubishi-medan/'?>" class="btn btn-lg btn-danger">Lihat Lainnya</a>
          </div>
        </div>
      </div>
    </section>
    <section class="product bg-dark text-white py-5" id="product">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-12">
            <h1 class="title mmc-bold">PRODUK MITSUBISHI</h1>
          </div>
        </div>
        <div class="swiper swiper-container-xpander text-dark">
          <div class="swiper-wrapper">              
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/new-xpander/new-xpander.png'?>" class="card-img w-80" alt="Mitsubishi New Xpander Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi New Xpander</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'NEW XPANDER'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi-new-xpander/'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/new-xpander-cross/xpander-cross-gray.webp'?>" class="card-img w-80" alt="Mitsubishi New Xpander Cross Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi New Xpander Cross</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'NEW XPANDER CROSS'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/new-pajero-sport/pajero-sport-white.webp'?>" class="card-img w-80" alt="Mitsubishi Pajero Sport Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Pajero Sport</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'PAJERO SPORT'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/eclipse-cross/eclipse-cross-red.webp'?>" class="card-img w-80" alt="Mitsubishi Eclipse Cross Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Eclipse Cross</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'ECLIPSE CROSS'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/triton/triton-gray.webp'?>" class="card-img w-80" alt="Mitsubishi Triton Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Triton</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'TRITON'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/l300/1.webp'?>" class="card-img w-80" alt="Mitsubishi L300 Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi L300</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'L300'");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/colt-diesel/colt-diesel.png'?>" class="card-img w-80" alt="Mitsubishi Colt Diesel Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Colt Diesel</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card mb-3 swiper-card">
                <div class="row no-gutters">
                  <div class="col-md-12 text-center">
                    <img src="<?=BASE_URL.DS.'assets/img/fuso/box-besi.png'?>" class="card-img w-80" alt="Mitsubishi Fuso Medan">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title text-center mmc-bold">Mitsubishi Fuso</h5>
                      <div class="row mt-4">
                        <div class="col-5 mmc-bold">Harga mulai</div>
                        <?php
                          $sql = $conn->query("SELECT MIN(harga) AS harga FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0");
                          $res = $sql->fetch_assoc();
                        ?>
                          <div class="col-7 mmc-bold"><?= "Rp " . number_format($res['harga'], 0, ",", "."); ?></div>
                      </div>
                      <p style="font-size: 11px" class="text-syarat mt-3 card-text">* Medan | OTR Sumatera Utara</p>
                    </div>
                  </div>              
                </div>
                <div class="row text-center" style="cursor: pointer">
                  <div class="col-4 p-2 social-media-hover" style="background: #1515a4" onclick="window.open('tel:081370494906')">
                    <i class="fa fa-phone-alt fa-lg"></i><br />
                    <small>Telp Sekarang</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #19692c" onclick="window.open('https://wa.me/+6281973380227?text=Halo Bg Hasri, Saya ingin tanya harga xpander. [Sumber: website mitsubishidealermedan.com]')">
                    <i class="fa fa-whatsapp fa-lg"></i><br />
                    <small>Whatsapp</small>
                  </div>
                  <div class="col-4 p-2 social-media-hover" style="background: #BF1F16" onclick="window.location='mitsubishi/xpander'">
                    <i class="fa fa-search fa-lg"></i><br />
                    <small>Telusuri</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-button-next-custom  swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom  swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
      </div>
    </section>
    <section class="promo-spesial py-5" id="promo-spesial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="<?=BASE_URL.DS.'assets/img/promo-spesial-result.png'?>" alt="Promo Spesial Mitsubishi Medan" class="img-promo-spesial">
          </div>
          <div class="col-lg-6">
            <h2 class="mmc-bold">PROMO <span class="blink_me text-danger mmc-bold">KHUSUS BULAN INI!</span></h2>
            <div class="countdown">
              <span id="days"></span>
              <span id="hours"></span>
              <span id="mins"></span>
              <span id="secs"></span>
              <h2 id="end"></h2>
            </div>
            <p>Dapatkan Bonus Langsung untuk penawaran kredit seperti berikut <b>KHUSUS BULAN INI : </b></p>
            <ul>
              <li>Kaca Film</li>
              <li>Karpet Lembaran</li>
              <li>Payung esklusif</li>
              <li>Rumah Plat</li>
              <li>Dompet Kulit</li>
              <li>Gantungan kunci</li>
              <li>Frame Plat</li>
              <li>P3K</li>
              <li>Dongkrak</li>
              <li>Kunci Roda</li>
            </ul>
            <p>Bagus bukan? Ayo segera pesan lewat kontak dibawah ini : </p>
            <a href="" class="btn btn-primary"><i class="fa fa-phone-alt"></i> Hubungi Saya</a>
            <a href="" class="btn btn-success"><i class="fa fa-whatsapp"></i> Whatsapp Saya</a>
          </div>
        </div>
      </div>
    </section>
    <section class="kontak py-5" id="kontak">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <img src="<?=BASE_URL.DS.'assets/img/kontak.jpg'?>" alt="Kontak Kami" class="w-100 img-promo-spesial">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="text-danger mmc-bold">MAU KONSULTASI PEMBELIAN?</h1>
            <p class="text-danger mmc-medium">Hubungi <span class="text-dark">Eben</span> dibawah ini</p>
            <hr style="background:red;border-top: 2px solid rgba(0,0,0,.1);">
            <div class="row text-dark">
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <i class="fa fa-user fa-lg" style="font-size:60px;margin-right:5px"></i>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">SENIOR SALES EXECUTIVE</h5>
                  <a class="mmc-bold text-danger page-scroll" href="#outer-container-profile">Elia Ebenezer Ginting</a>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.685 31.685" style="enable-background:new 0 0 31.685 31.685;" xml:space="preserve"> <g> <path d="M22.507,0H9.175C7.9,0,6.87,1.034,6.87,2.309v27.07c0,1.271,1.03,2.306,2.305,2.306h13.332 c1.273,0,2.307-1.034,2.307-2.306V2.309C24.813,1.034,23.78,0,22.507,0z M23.085,25.672H8.599V3.895h14.486V25.672z M18.932,2.343 h-6.181V1.669h6.182L18.932,2.343L18.932,2.343z M21.577,2.035c0,0.326-0.266,0.59-0.591,0.59c-0.326,0-0.591-0.265-0.591-0.59 s0.265-0.59,0.591-0.59C21.312,1.444,21.577,1.709,21.577,2.035z M18.655,29.225h-5.629v-1.732h5.629V29.225z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">PHONE</h5>                  
                  <a href="tel:+6282274190043" class="mmc-bold text-danger">0812-7900-8217</a>
                </div>                
              </div>            
            </div>
            <div class="row text-dark">
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <img alt="" data-src="https://hondamedancenter.com/wp-content/uploads/2020/11/whatsapp.svg" class="attachment-medium size-medium lazyloaded" src="https://hondamedancenter.com/wp-content/uploads/2020/11/whatsapp.svg" width="60" height="60">
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">WHATSAPP</h5>
                  <a href="https://wa.me/+6282274190043?text=Halo Jacky. Saya mau konsultasi pembelian unit (sumber website)" class="mmc-bold text-danger" target="_blank">0812-7900-8217</a>
                </div>                
              </div>
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="60" viewBox="0 0 512 512" width="60"><g><path d="m476.861 456.764c-54.476 0-114.655 0-131.633 0v-31.867h121.165c-10.176-30.979-19.165-58.346-19.19-58.424-10.159 0-45.764 0-91.428 0-27.44 26.183-52.811 50.26-75.539 81.415l-24.238 33.225-24.235-33.227c-22.933-31.438-48.856-55.938-75.534-81.413-52.766 0-91.385 0-91.432 0-.158.483-9.091 27.676-19.19 58.424h121.165v31.867c-23.39 0-82.444 0-131.633 0-9.614 29.266-17.907 54.515-18.143 55.236h478.008c-.232-.709-8.527-25.964-18.143-55.236z"></path><path d="m256 430.207c72.315-99.128 175.27-137.375 175.27-254.938 0-100.434-74.836-175.269-175.27-175.269-100.402 0-175.27 74.835-175.27 175.27 0 117.547 102.988 155.841 175.27 254.937zm0-296.152c26.332 0 47.801 21.468 47.801 47.801 0 26.322-21.469 47.801-47.801 47.801-26.334 0-47.801-21.479-47.801-47.801 0-26.333 21.467-47.801 47.801-47.801z"></path></g></svg>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">LOKASI DEALER</h5>
                  <a href="https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Gatot+Subroto/@3.5897229,98.6548474,17z/data=!3m1!4b1!4m5!3m4!1s0x30312f94a86ecdbb:0x83c7b521f607d461!8m2!3d3.5897229!4d98.6570361?hl=en" class="mmc-bold text-danger">JL. GATOT SUBROTO NO 437 MEDAN</a>                  
                </div>                
              </div>            
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require_once './footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?=BASE_URL.DS.'assets/js/lightbox.js'?>"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
