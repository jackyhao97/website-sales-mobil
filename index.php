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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Mitsubishi Medan</title>
  </head>
  <body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
