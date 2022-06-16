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
    <title>Harga Produk Mitsubishi Medan</title>
  </head>
  <body style="background: #f2f2f2;">
    <?php require_once '../navbar.php'; ?>
    <div class="container-fluid fixed-top p-0" style="margin-top:73px;z-index:999">
      <marquee direction="left" scrollAmount="7" onmouseover="this.stop()" onmouseout="this.start()" style="background:white">        
        <p class="text-danger mmc-bold" style="font-style: italic;margin-bottom:0">PROMO Juni 2022, Harga Turun Drastis, Diskon Besar Besaran, Bunga Kredit 0% Dan Free Aksesoris. Promo Hanya Berlaku Setiap Pemesanan Melalui Website Ini.. <span class="text-primary mmc-bold">Ajukan penawaran sekarang <a class="btn btn-success" style="margin-left: 10px">Telepon Sales</a>
      </marquee>
    </div>
    <div class="container container-price">
      <h2 class="text-center text-uppercase mmc-bold">Harga OTR Produk Mitsubishi di Medan</h2>
      <div class="card mb-3" style="font-size: 14px">
        <div class="row no-gutters align-items-center">
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/new-xpander.png'?>" alt="Harga Mitsubishi New Xpander di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi New Xpander</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi New Xpander</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'new xpander' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi New Xpander dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Xpander." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi New Xpander Cross</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi New Xpander Cross</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'XPANDER CROSS' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Xpander Cross dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Xpander Cross." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/xpander-cross.png'?>" alt="Harga Mitsubishi Xpander Cross di Medan" class="w-100">
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/pajero-sport.png'?>" alt="Harga Mitsubishi Pajero Sport di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Pajero Sport</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Pajero Sport</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'PAJERO SPORT' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Pajero Sport dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Pajero Sport." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>    
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/l300.png'?>" alt="Harga Mitsubishi L300 di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi L300</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi L300</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'L300' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi L300 dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi L300." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>   
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Triton</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Triton</caption>
                <thead class="bg-danger text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'TRITON' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Triton dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Triton" style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>    
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/triton.png'?>" alt="Harga Mitsubishi Triton di Medan" class="w-100">
          </div>
        </div>
        <div class="row no-gutters align-items-center mt-5">
          <div class="col-md-4">
            <img src="<?=BASE_URL.DS.'assets/img/price/colt-diesel.png'?>" alt="Harga Mitsubishi Colt Diesel di Medan" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Colt Diesel</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Colt Diesel</caption>
                <thead class="bg-warning text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'COLT DIESEL' AND discontinue = 0 ORDER BY urutan");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Colt Diesel dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Colt Diesel." style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>   
        </div>
        <div class="row no-gutters align-items-center mt-5">    
          <div class="col-md-8 order-2 order-sm-1">
            <div class="card-body">
              <h5 class="card-title mmc-bold text-center">Mitsubishi Fuso</h5>
              <table class="table table-bordered">
                <caption> >> Daftar harga Mitsubishi Fuso</caption>
                <thead class="bg-warning text-white text-center">
                  <tr>                
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>              
                <?php
                  $queryHarga = $conn->query("SELECT tipe, merek, harga FROM tb_harga WHERE merek = 'FUSO' AND discontinue = 0 ORDER BY harga");
                  while ($row = $queryHarga->fetch_array()) :
                ?>
                  <tr>
                    <td><?=$row['tipe']?></td>                
                    <td><?= "Rp " . number_format($row["harga"], 0, ",", "."); ?></td>
                  </tr>            
                <?php
                  endwhile;
                ?>              
                </tbody>
              </table>
              <p class="card-text"><small class="text-muted">* Harga OTR dapat berubah-ubah.</small></p>
              <p class="card-text">Untuk info selengkapnya mengenai simulasi kredit Mitsubishi Fuso dapat menghubungi <b><a href="https://wa.me/+6282274190043?text=[WS]Halo Sardana Berlian. Saya ingin mengetahui simulasi kredit terbaru dari Mitsubishi Fuso" style="color: #1caa51"><i class="fa fa-lg fa-whatsapp"></i> 0812-7900-8217</a></b></p>
              <a class="btn btn-success">Telepon Sales</a>
              <a class="btn btn-primary">Simulasi Kredit</a>
            </div>
          </div>    
          <div class="col-md-4 order-1 order-sm-2">
            <img src="<?=BASE_URL.DS.'assets/img/price/fuso.png'?>" alt="Harga Mitsubishi Fuso di Medan" class="w-100">
          </div>
        </div>
      </div>  
    </div>

    <?php require_once '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://scripts.sirv.com/sirv.js"></script>
    <script src="../assets/js/script.js"></script>
  </body>
</html>