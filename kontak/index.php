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

    <!-- Lightbox -->
    <link rel="stylesheet" href="<?=BASE_URL.DS.'assets/css/lightbox.css'?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Kontak Jacky Mitsubishi Medan</title>
  </head>
  <body style="background: #f2f2f2;">
    <?php require_once '../navbar.php'; ?>
    <section class="kontak py-5" id="kontak" style="margin-top: 100px">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <img src="<?=BASE_URL.DS.'assets/img/kontak.jpg'?>" alt="Kontak Kami" class="w-100 img-promo-spesial">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="text-danger mmc-bold">KONTAK SAYA</h1>
            <p class="text-danger mmc-medium">Hubungi <span class="text-dark">Jacky</span> dibawah ini</p>
            <hr style="background:red;border-top: 2px solid rgba(0,0,0,.1);">
            <div class="row text-dark">
              <div class="col-sm-6 col-xs-12 d-flex align-items-center mt-4">
                <i class="fa fa-user fa-lg" style="font-size:60px;margin-right:5px"></i>
                <div class="container-profile-detail">
                  <h5 class="mmc-bold">SALES EXECUTIVE</h5>
                  <a class="mmc-bold text-danger page-scroll" href="#outer-container-profile">Jacky</a>
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
                  <a href="https://wa.me/+6282274190043?text=Halo Kak Hesti." class="mmc-bold text-danger">0812-7900-8217</a>
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

    <?php require_once '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://scripts.sirv.com/sirv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?=BASE_URL.DS.'assets/js/lightbox.js'?>"></script>
    <script src="<?=BASE_URL.DS.'assets/js/script.js'?>"></script>
  </body>
</html>