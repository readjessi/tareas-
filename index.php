<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Paleteria "Rey Mono1"</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" type="fonts/style.css">
</head>
<body>
	<!--barra-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
         <a class="nav-link" href="q_somos.html" >¿Quienes somos?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Productos.html">Productos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Saber mas...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://www.facebook.com/REY-MONO-104318117788008/?ref=settings"><img src="include/Facebook.png">Facebook</a>
          <a class="dropdown-item" href="https://www.instagram.com/p_el_rey_mono/?hl=es-la"><img src="include/instagram.png">Instagram</a>
          <a class="dropdown-item" href="https://twitter.com/ELREYMONO4"><img src="include/Twitter.png">twitter</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UC3vu-VoBBdcfgqiFrWL0yyA"><img src="include/Youtube.png">Youtube</a>
        </div>
      </li>
    </ul>
  </div>

</nav>
<!--carrucel-->
 <style>
    body {
     background:url('img/fondo2.jpeg')  no-repeat;
    background-size:cover;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 450px;
      height: 450px;

    }
  </style>
  </head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(img/img1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img6.jpeg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img7.jpeg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img8.jpeg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img9.jpeg)"></div>
      <div class="swiper-slide" style="background-image:url(img/img10.jpeg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

<script  src="js/jquery-3.4.1.min.js"></script>
<<script src="js/bootstrap.min.js"></script>
</body>
</html>