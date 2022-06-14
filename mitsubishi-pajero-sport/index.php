<?php 
  require_once "../config.php"; 
  // $message = 'Berikut di-infokan untuk difollow up leads berikut ini, %0D %0DTanggal: %0DNama: %0DNo.HP: %0DCatatan: %0DUntuk selengkapnya mohon cek di OP, terima kasih. %0D %0DSalam, %0DDigital Marketing Team';
  $message = 'Saya ingin bertanya simulasi kredit pajero. (sumber website)';
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Mitsubishi Pajero Sport Medan</title>
  </head>
  <body>
    <?php require_once '../navbar.php'; ?>

    <!-- Slider -->
    <div class="swiper swiper-mitsubishi-new-pajero" style="margin-top: 73px">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/banner-pajero-sport.jpg' ?>" alt="Mitsubishi Pajero Sport" class="w-100 slider-1">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- Akhir Slider -->

    <!-- Price -->
    <div class="container mt-5">
      <h2 class="text-uppercase mmc-bold text-center text-black">Harga Pajero Sport Medan</h2>
      <p class="text-center text-muted">Lihat harga terbaru Pajero Sport untuk wilayah Medan dan sekitarnya khusus untuk anda pengunjung website <a href="<?= BASE_URL; ?>" target="_blank">hargamitsubishimedanterbaik.com</a></p>
      <table class="table table-striped table-bordered table-width text-center">
        <thead>
          <tr class="bg-danger text-white">
            <th scope="col">Tipe</th>
            <th scope="col">Harga OTR</th>          
          </tr>
        </thead>
        <tbody class="mmc-medium">
          <?php 
            $sql = $conn->query("SELECT tipe,harga FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0 ORDER BY harga");
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
      <p class="text-black mt-2 mmc-bold">Untuk info detail harga lebih lanjut dapat menghubungi kami disini <a href="https://wa.me/+6281260864570?text=Halo Bg Eben, Saya ingin bertanya lebih lanjut harga dari pajero sport. (Sumber website)" class="text-success mmc-bold" target="_blank"><i class="fa fa-lg fa-whatsapp"></i> 0812-6086-4570</a></p>
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
              <h2 class="mmc-bold text-center mt-4 mt-sm-0">Promo Pajero Sport</h2>
              <ol>
                <li>Program pilihan pembiayaan melalui PT. Dipo Star Finance (S&K berlaku):  </li>
                <ul>
                  <li>DP Ringan mulai 15%, atau</li>
                  <li>Bunga 0% tenor sampai dengan 1 Tahun (khusus varian Pajero Sport Dakar 4x2 AT Ultimate), atau</li>
                  <li>Gratis Perpanjangan SMART Package 1 Tahun / 20.000 km</li>
                </ul>
                <li>Gratis Kaca Film V-Kool</li>
                <li>Gratis Paket SMART Silver untuk Perawatan/Servis Berkala hingga 50.000 km atau 4 tahun: </li>
                <ul>
                  <li>Biaya Jasa (Untuk semua varian) </li>
                  <li>Suku cadang (sesuai dengan Service Manual Book)</li>
                  <li>Oli MMGO (sesuai dengan Service Manual Book)</li>
                  <li>Chemical item: diesel fuel system flush, engine flush</li>
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
        <h1 class="mmc-bold">Video Pajero Sport</h1>
        <p>Dapatkan video menarik tentang Mitsubishi Pajero Sport berikut.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EiLfkL0xUGQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <!-- Akhir Video -->

    <h2 class="mmc-bold text-center mt-5">360 Exterior Pajero Sport</h2>
    <div class="Sirv" data-src="https://andshant.sirv.com/new-pajero-sport/product.spin" mousewheelstep="0"></div>

    <h2 class="mmc-bold text-center mt-5 pt-4 text-white" style="background:black">Exterior Pajero Sport</h2>
    <div class="swiper swiper-exterior-pajero-sport text-white pb-4" style="background:black">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/1.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/2.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/3.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/4.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/5.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/6.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/7.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/8.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/exterior/9.jpg'; ?>">
        </div>
      </div>
    </div>

    <h2 class="mmc-bold text-center mt-5">Interior Pajero Sport</h2>
    <div class="swiper swiper-interior-pajero-sport">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/1.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/2.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/3.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/4.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/5.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/6.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/7.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/8.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/9.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/10.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/11.jpg'; ?>">
        </div>
        <div class="swiper-slide">
          <img class="w-100" src="<?= BASE_URL.DS.'assets/img/new-pajero-sport/interior/12.jpg'; ?>">
        </div>
      </div>
    </div>

    <div class="d-none d-sm-block container">
      <div class="row mt-5">
        <div class="col d-flex justify-content-center">
          <a href="<?=BASE_URL.DS.'assets/brochure/new-pajero-sport.pdf'?>" class="btn btn-lg btn-danger me-2" target="_blank"><i class="fa fa-lg fa-download"></i> Download brochure</a>
          <a href="https://wa.me/6281260864570?text=<?=$message?>" class="btn btn-lg btn-primary me-2" target="_blank"><i class="fa fa-lg fa-calculator"></i> Simulasi Kredit</a>
          <a href="javascript:void(0)" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#popupKonsultasi"><i class="fa fa-lg fa-whatsapp"></i> Konsultasi Pembelian</a>
        </div>
      </div>
    </div>

    <div class="container d-block d-sm-none">
      <div class="row mt-5">
        <div class="col">
          <a href="<?=BASE_URL.DS.'assets/brochure/new-pajero-sport.pdf'?>" class="btn btn-lg btn-danger mb-2 d-flex justify-content-center"><i class="fa fa-lg fa-download me-2"></i> Download brochure</a>
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
      new Swiper(".swiper-mitsubishi-pajero-sport", {
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

      new Swiper(".swiper-interior-pajero-sport", {
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

      new Swiper(".swiper-exterior-pajero-sport", {
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
        $(".slider-1").attr('src','<?= BASE_URL.DS.'assets/img/new-pajero-sport/banner-pajero-sport-mb.jpg' ?>')
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