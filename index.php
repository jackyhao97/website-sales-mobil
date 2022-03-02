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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Mitsubishi Medan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background:black !important; border-bottom:3px solid red">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./assets/img/logo-jacky.png" style="width: 200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mmc-bold" style="font-size: 18px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PRODUK
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background:black">
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/new-xpander-thumb.png'?>" style="width: 100px" class="me-4">NEW XPANDER</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/xpander-cross-thumb.png'?>" style="width: 100px" class="me-4">NEW XPANDER CROSS</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/pajero-sport-thumb.png'?>" style="width: 100px" class="me-4">PAJERO SPORT</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/eclipse-cross-thumb.png'?>" style="width: 100px" class="me-4">ECLIPSE CROSS</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/triton-thumb.png'?>" style="width: 100px" class="me-4">TRITON</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/l300-thumb.png'?>" style="width: 100px" class="me-4">L300</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/colt-diesel-thumb.png'?>" style="width: 100px" class="me-4">COLT DIESEL</a></li>
                <li><a class="dropdown-item text-white nav-product" href="#"><img src="<?=BASE_URL.DS.'assets/img/thumbs/fuso-thumb.png'?>" style="width: 100px" class="me-4">FUSO</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TESTIMONI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRICE LIST</a>
            </li>
          </ul>
          <a class="navbar-brand ms-auto d-none d-lg-block" href="#"><img src="./assets/img/logo-sardana-putih.png" style="width: 200px"></a>
        </div>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=BASE_URL.DS.'assets/img/promo.jpg'?>" class="d-none d-sm-block w-100" alt="Mitsubishi Promo Medan">
          <img src="<?=BASE_URL.DS.'assets/img/promo-mb.jpg'?>" class="d-sm-none d-block w-100" alt="Mitsubishi Promo Medan">
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
            <img src="./assets/img/profile.png" alt="Profile">
          </div>
          <div class="col-12 col-md-6 text-white">
            <h3>Jacky - Sales Executive</h3>
            <h1 class="text-uppercase text-mitsubishi">Mitsubishi Medan</h1>
            <p>Percayakan urusan mobil Mitsubishi anda bersama Kami. Wandy – Sales Executive dari Mitsubishi Sardana Medan Siap melayani anda dan memberikan penawaran spesial yang terbaik bagi anda. Pertanyaan seputar Spesifikasi , Simulasi Kredit, Info Stok, Promo Terbaru, Booking Service, Test Drive dan Pemesanan silahkan menghubungi kami disini.</p>
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
          <div class="col grid px-5">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
            <img src="./assets/img/testimoni-1.png" alt="Testimoni Mitsubishi Medan">
          </div>
        </div>
      </div>
    </section>
    <section class="product bg-dark text-white pt-5" id="product">
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
                    <img src="<?=BASE_URL.DS.'assets/img/new-xpander/red-ultimate-xpander.webp'?>" class="card-img w-80" alt="Mitsubishi New Xpander Medan">
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
            <div class="swiper-slide">
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
            </div>
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
          </div>
          <div class="swiper-button-next swiper-button-next-custom  swiper-button-next-xpander"></div>
          <div class="swiper-button-prev swiper-button-prev-custom  swiper-button-prev-xpander"></div>
          <div class="swiper-pagination swiper-pagination-xpander"></div>
        </div>
      </div>
    </section>
    <?php require_once './footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
