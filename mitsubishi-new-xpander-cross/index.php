<?php 
  require_once "../config.php"; 
  // $message = 'Berikut di-infokan untuk difollow up leads berikut ini, %0D %0DTanggal: %0DNama: %0DNo.HP: %0DCatatan: %0DUntuk selengkapnya mohon cek di OP, terima kasih. %0D %0DSalam, %0DDigital Marketing Team';
  $message = 'Saya ingin bertanya simulasi kredit new xpander cross. (sumber website)';
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
    <link rel="stylesheet" href="../assets/css/style.css">
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
    <title>Mitsubishi New Xpander Cross Medan</title>
  </head>
  <body>
    <?php require_once '../navbar.php'; ?>

    <!-- Slider -->
    <div class="swiper swiper-mitsubishi-new-xpander-cross" style="margin-top: 73px">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/new-xpander-cross.jpg' ?>" alt="Mitsubishi New Xpander Cross" class="w-100 slider-1">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Akhir Slider -->

    <!-- Price -->
    <div class="container mt-5">
      <h2 class="text-uppercase mmc-bold text-center text-black">Harga New Xpander Cross Medan</h2>
      <p class="text-center text-muted">Lihat harga terbaru New Xpander untuk wilayah Medan dan sekitarnya khusus untuk anda pengunjung website <a href="<?= BASE_URL; ?>" target="_blank">hargamitsubishimedanterbaik.com</a></p>
      <table class="table table-striped table-bordered table-width text-center">
        <thead>
          <tr class="bg-danger text-white">
            <th scope="col">Tipe</th>
            <th scope="col">Harga OTR</th>          
          </tr>
        </thead>
        <tbody class="mmc-medium">
          <?php 
            $sql = $conn->query("SELECT tipe,harga FROM tb_harga WHERE merek = 'NEW XPANDER CROSS' AND discontinue = 0 ORDER BY harga");
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
      <p class="text-black mt-2 mmc-bold">Untuk info detail harga lebih lanjut dapat menghubungi kami disini <a href="https://wa.me/+6281260864570?text=Halo Bg Eben, Saya ingin bertanya lebih lanjut harga dari new xpander cross. (Sumber website)" class="text-success mmc-bold" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0812-6086-4570</a></p>
    </div>
    <!-- Akhir Price -->

    <!-- Promo Terkait -->
    <section class="promo-terkait mt-5" id="promo-terkait">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <img src="<?=BASE_URL.DS.'assets/img/promo-spesial-result.png'?>" alt="Promo Mitsubishi New Xpander" class="w-100">
          </div>
          <div class="col-12 col-lg-6">
              <h2 class="mmc-bold text-center mt-4 mt-sm-0">Promo New Xpander Cross</h2>
              <ol>
                <li>Program pilihan pembiayaan melalui PT. Dipo Star Finance (S&K berlaku):  </li>
                <ul>
                  <li>DP ringan mulai 8%, atau</li>
                  <li>Bunga 0% sampai dengan tenor 2 tahun, atau  </li>
                  <li>Gratis Asuransi 2 tahun </li>
                  <li>Paket Smart Cash dengan bunga 0% dan gratis asuransi serta biaya admin</li>
                </ul>
                <li>Gratis kaca film V-Kool untuk variant Premium CVT dan kaca film Konica Minolta untuk variant CVT & MT  </li>
                <li>Gratis Paket SMART Silver untuk Perawatan/Servis Berkala hingga 50.000 km atau 4 tahun: </li>
                <ul>
                  <li>Biaya Jasa (Untuk semua varian) </li>
                  <li>Suku cadang, Mitsubishi Motors Genuine Oil & Brake Fluid (sesuai dengan Jadwal Service Booklet) </li>
                  <li>Chemical item: Engine flush, Brake Fluid </li>
                  <li>Asuransi Kecelakaan Diri (Personal Accident) selama 1 tahun, dengan nominal klaim maksimal hingga Rp 10.000.000/orang* </li>
                  <li>Asuransi Kerusakan Ban selama 1 tahun, dengan nominal klaim maksimal Rp. 1.400.000 dan berlaku untuk 1 ban* </li>
                </ul>
              </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Promo Terkait -->

    <!-- Video -->
    <section class="video-colt mt-5 parallax-xpander">
      <div class="container-100 p-4 text-center text-white">
        <h1 class="mmc-bold">Video New Xpander Cross</h1>
        <p>Dapatkan video menarik tentang Mitsubishi New Xpander Cross berikut.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/c8lEWDGAHEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <!-- Akhir Video -->

    <h2 class="mmc-bold text-center mt-5">360 Exterior New Xpander Cross</h2>
    <div class="Sirv" data-src="https://andshant.sirv.com/new-xpander-cross/product.spin" mousewheelstep="0"></div>

    <h2 class="mmc-bold text-center mt-5 pt-4 text-white" style="background:black">Exterior New Xpander Cross</h2>
    <div class="swiper swiper-exterior-new-xpander-cross text-white pb-4" style="background:black">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/17-inch-alloy-wheel.jpg'; ?>">
          <h4 class="text-center mmc-bold">New 17 Inch Two Tone Alloy Wheel</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/new-black-metallic-grille.jpg'; ?>">
          <h4 class="text-center mmc-bold">New black metallic grille</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/rear-bumper.jpg'; ?>">
          <h4 class="text-center mmc-bold">Rear bumper</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/roof-rail.jpg'; ?>">
          <h4 class="text-center mmc-bold">Roof rail</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/shark-fin-antenna.jpg'; ?>">
          <h4 class="text-center mmc-bold">Shark fin antenna</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/tailgate-garnish.jpg'; ?>">
          <h4 class="text-center mmc-bold">Tailgate garnish</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/exterior/wheel-arch-molding.jpg'; ?>">
          <h4 class="text-center mmc-bold">Wheel arch molding</h4>
        </div>
      </div>
    </div>

    <h2 class="mmc-bold text-center mt-5">Interior New Xpander Cross</h2>
    <div class="swiper swiper-interior-new-xpander-cross">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/2nd-row-arm-rest-with-cup-holder.jpg'; ?>">
          <h4 class="text-center mmc-bold">2nd row arm rest with cup holder</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/closed-storage-box-cvt.jpg'; ?>">
          <h4 class="text-center mmc-bold">Closed storage box CVT</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/luggage-under-tray.jpg'; ?>">
          <h4 class="text-center mmc-bold">Luggage under tray</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/modern-interior.jpg'; ?>">
          <h4 class="text-center mmc-bold">Modern interior</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander/interior/new-cvt-transmission.jpg'; ?>">
          <h4 class="text-center mmc-bold">New CVT Transmission</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/new-9-audio-headunit-with-smartphone-connectivity.jpg'; ?>">
          <h4 class="text-center mmc-bold">New 9 audio headunit with smartphone connectivity</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/new-dual-tone-syntethic-leather-seat-with-heat-guard-function.jpg'; ?>">
          <h4 class="text-center mmc-bold">New dual tone synthetic leather seat with heat guard function</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/new-electric-parking-brake-epb-with-brake-auto-hold-bah.jpg'; ?>">
          <h4 class="text-center mmc-bold">New Electric Parking Brake (EPB) With Brake Auto Hold (BAH)</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/new-steering-wheel.jpg'; ?>">
          <h4 class="text-center mmc-bold">New steering wheel</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/softpad-material.jpg'; ?>">
          <h4 class="text-center mmc-bold">Softpad material</h4>
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-xpander-cross/interior/stop-button-kos.jpg'; ?>">
          <h4 class="text-center mmc-bold">Stop button KOS</h4>
        </div>
      </div>
    </div>

    <div class="d-none d-sm-block container">
      <div class="row mt-5">
        <div class="col d-flex justify-content-center">
          <a href="<?=BASE_URL.DS.'assets/brochure/new-xpander-cross.pdf'?>" class="btn btn-lg btn-danger me-2" target="_blank"><i class="fa fa-lg fa-download"></i> Download brochure</a>
          <a href="https://wa.me/6281260864570?text=<?=$message?>" class="btn btn-lg btn-primary me-2" target="_blank"><i class="fa fa-lg fa-calculator"></i> Simulasi Kredit</a>
          <a href="javascript:void(0)" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#popupKonsultasi"><i class="fa fa-lg fa-whatsapp"></i> Konsultasi Pembelian</a>
        </div>
      </div>
    </div>

    <div class="container d-block d-sm-none">
      <div class="row mt-5">
        <div class="col">
          <a href="<?=BASE_URL.DS.'assets/brochure/new-xpander-cross.pdf'?>" class="btn btn-lg btn-danger mb-2 d-flex justify-content-center"><i class="fa fa-lg fa-download me-2"></i> Download brochure</a>
          <a href="https://wa.me/6281279008217?text=<?=$message?>" class="btn btn-lg btn-primary mb-2 d-flex justify-content-center"><i class="fa fa-lg fa-calculator me-2"></i> Simulasi Kredit</a>
          <a href="javascript:void(0)" class="btn btn-lg btn-success mb-2 d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#popupKonsultasi"><i class="me-2 fa fa-lg fa-whatsapp"></i> Konsultasi Pembelian</a>
        </div>
      </div>
    </div>
    <hr />  

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

    <!-- Popup Konsultasi -->
    <div class="modal fade" id="popupKonsultasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mmc-bold" id="exampleModalLabel">Konsultasi Pembelian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama_lengkap" class="col-form-label">Nama Lengkap: </label>
              <input type="text" class="form-control" id="nama_lengkap">
            </div>
            <div class="mb-3">
              <label for="no_hp" class="col-form-label">Nomor Handphone: </label>
              <input type="text" class="form-control" id="no_hp">
            </div>
            <div class="mb-3">
              <label for="alamat" class="col-form-label">Alamat: </label>
              <textarea class="form-control" id="alamat"></textarea>
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email: </label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin: </label>
              <select class="form-select" id="jenis_kelamin">
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="pilih_mobil" class="col-form-label">Pilih Mobil: </label>
              <select class="form-select" id="pilih_mobil">
                <option>New Xpander</option>
                <option>New Xpander Cross</option>
                <option>Pajero Sport</option>
                <option>Triton</option>
                <option>L300</option>
                <option>Colt Diesel</option>
                <option>Fuso</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="pertanyaan" class="col-form-label">Pertanyaan: </label>
              <textarea class="form-control" id="pertanyaan"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-kirim">Kirim</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Produk Lainnya -->
    <div class="container">
      <div class="row mt-5 mb-4">
        <div class="col-12">
          <h3 class="mb-4 text-uppercase mmc-bold">Produk Mitsubishi Lainnya</h3>
        </div>
        <div class="col-12">
          <div class="swiper swiper-container-produk">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/new-xpander/new-xpander.png'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">NEW XPANDER</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">New Xpander hadir dengan lampu utama baru desain T-Shape, memberikan pencahayaan terbaik dalam berkendara.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-new-xpander/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/new-xpander-cross/xpander-cross-gray.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">NEW XPANDER CROSS</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">New Xpander Cross adalah sebuah crossover yang memadukan kenyamanan sebuah MPV dengan ketangguhan SUV.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-new-xpander-cross/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/new-pajero-sport/pajero-sport-white.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">PAJERO SPORT</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">Temukan dunia baru melalui eksplorasi tanpa batas dengan New Pajero Sport yang kini hadir lebih tangguh.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-pajero-sport/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/triton/triton-gray.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">TRITON</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">Triton 4X4 hadir dengan performa lebih tangguh dan fitur-fitur inovatif.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-triton/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/l300/1.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">L300</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">Efisien dan memiliki ruang kargo luas yang didukung oleh mesin bertenaga.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-l300/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/colt-diesel/colt-diesel.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">COLT DIESEL</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">Sangat cocok untuk bak kayu, aluminium dump truck, serta kargo lainnya.</small>
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-colt-diesel/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="overflow: hidden; cursor: pointer; border-radius: 0 !important; border: 2px solid #e3dfdf;">
                  <div class="card-header" style="border: 0; padding: 0; border-radius: 0 !important; height: 200px; overflow: hidden">
                    <img src="<?=BASE_URL.DS.'assets/img/fuso/box-besi.webp'?>" class="card-img-top" alt="Mitsubishi New Xpander">
                  </div>
                  <div class="card-body">
                    <h3 class="mmc-bold text-center">FUSO</h3>
                    <small class="card-text" style="margin-bottom: 0; height: 100px">Fuso merupakan truk kategori medium yang ekonomis dan dapat diandalkan untuk berbagai kebutuhan.</small><br />
                    <a class="btn btn-danger mt-3" href="<?=BASE_URL.DS.'mitsubishi-fuso/'?>"><i class="fas fa-plus mr-2" style="font-size: 12px;"></i> SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-button-next-custom"></div>
            <div class="swiper-button-prev swiper-button-prev-custom"></div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://scripts.sirv.com/sirv.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
      new Swiper(".swiper-mitsubishi-new-xpander-cross", {
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

      new Swiper(".swiper-interior-new-xpander-cross", {
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

      new Swiper(".swiper-exterior-new-xpander-cross", {
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

      new Swiper('.swiper-container-produk', {
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          600: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          // when window width is >= 480px
          800: {
            slidesPerView: 3,
            spaceBetween: 30
          },       
        },
        navigation: {
          nextEl: '.swiper-button-next-custom',
          prevEl: '.swiper-button-prev-custom',
        },
      });

      if (window.matchMedia("(max-width: 576px)").matches) {
        $(".slider-1").attr('src','<?= BASE_URL.DS.'assets/img/new-xpander-cross/new-xpander-cross-mb.jpg' ?>')
      }

      $(document).ready(function() {
        $(".btn-kirim").click(function() {
          const nama = $("#nama_lengkap").val();
          const nomorHp = $("#no_hp").val();
          const alamat = $("#alamat").val();
          const email = $("#email").val();
          const jenisKelamin = $("#jenis_kelamin").val();
          const pilihMobil = $("#pilih_mobil").val();
          const pertanyaan = $("#pertanyaan").val();

          window.open('https://api.whatsapp.com/send?phone=6281279008217&text=Halo%20Jacky,%20Saya%20Ingin%20Konsultasi%20Pembelian%20Sebagai%20Berikut:%0D%0DNama:%20'+nama+'%0DNomor%20Handphone:%20'+nomorHp+'%0DAlamat:%20'+alamat+'%0DEmail:%20'+email+'%0DJenis%20Kelamin:%20'+jenisKelamin+'%0DPilih%20Mobil:%20'+pilihMobil+'%0DPertanyaan:%20'+pertanyaan+'%0D%0DTerimakasih.%20(Sumber%20Website)', '_blank');
        });
      })
    </script>
  </body>
</html>