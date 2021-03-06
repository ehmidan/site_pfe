<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap links/css/bootstrap.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./main.css">
  <title>Document</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="200">
  <div class="backnav ">
    <nav class="navbar navbar-expand-lg navbar-light  row m-0 fixed-top">
      <a class="navbar-brand col-6" href="#home"><img src="./image/logo car.png" class="logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-6 mr-lg-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item  mr-lg-5">
            <a class="nav-link font-weight-bold" href="#home">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mr-lg-5">
            <a class="nav-link font-weight-bold" href="#vihcules">VEHICLES</a>
          </li>
          <li class="nav-item mr-lg-5">
            <a class="nav-link font-weight-bold" href="#bienifites">OUR BENEFITS</a>
          </li>
          <li class="nav-item mr-lg-5">
            <a class="nav-link font-weight-bold" href="#">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="row justify-content-center align-items-center p-0" id="home">
    <div class="col-11 row p-0 m-0 home_body ">
      <div class="col-lg-6 col-12 order-lg-1 order-2 mt-lg-5 text-center ">
        <img src="./image/Titel.png" class="titel mt-lg-5 mb-lg-3" alt="">
        <h5 class="mt-lg-5 mt-3">Here you can rent a car of any brand</h5>
        <p class="mt-3 mb-5">The car rental revolution: no more paperwork or endless
          waiting lines,<br> premium cars guaranteed end your virtual
          key directly in our company.</p>
      </div>

      <div class="col-lg-6 col-12 order-lg-2 order-1 align-self-center">
        <div id="carouselExampleControls" class="carousel slide  p-0 m-0" data-ride="carousel">
          <div class="carousel-inner p-0 m-0">
            <div class="carousel-item active">
              <img src="./image/kisspng-bmw-x6-car-bmw-x7-bmw-1-series-bmw-x6-png-clipart-5a777a0e376162.8385051215177794702269.png" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
              <img src="./image/kisspng-car-volkswagen-polo-1-0-mpi-48kw-trendline-bmt-vol-vw-polo-5b16bb1055e220.0857038815282163363518.png" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
              <img src="./image/kisspng-chevrolet-camaro-car-chevrolet-chevelle-chevrolet-yellow-camaro-png-hd-5a7826dd661665.9010042415178237094182.png" class="d-block " alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
      <div class="col-12 row justify-content-center order-3 scrollDown_block">
        <div class="scrollDown">
          <a href="#vihcules">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- vihcules  -->

  <div class="row justify-content-center align-items-center p-0 " id="vihcules">
    <div class="col-11 row p-0 m-0 vihcules_body">
      <div class="col-12 order-lg-1 order-2 mt-lg-5 text-center ">
        <img src="./image/Titel_2.png" class="titel2 mt-lg-12 mb-lg-3" alt="">

        <!-- Slider -->
        <div class="row justify-content-center">
          <div class="swiper-container mySwiper col-11">
            <div class="swiper-wrapper">
              <?php
              include "connect.php";
              $Get_Cars = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number NOT IN (SELECT Rigestration_Number FROM reservation WHERE CURRENT_TIMESTAMP BETWEEN Date_Start AND Date_End)");
              $Get_Cars->execute();

              while ($Car = $Get_Cars->fetch()) {

              ?>

                <div class="swiper-slide">
                  <img src="<?= $Car["CarImage"] ?>" />
                </div>
              <?php } ?>

              <div class="swiper-pagination"></div>
            </div>
          </div>


          <div class="col-12 row justify-content-center order-3 scrollDown_block2">
            <div class="scrollDown">
              <a href="#bienifites">
                <span></span>
                <span></span>
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our bienefits -->

  <div class="row justify-content-center align-items-center p-0" id="bienifites">
    <div class="col-11 row p-0 m-0 binefits_body ">
      <div class="col-lg-8 col-12 order-lg-1 order-1 mt-lg-5 text-center ">
        <div class="col-12">
          <img src="./image/titel3.png" class="titel mt-lg-2 mb-lg-3" alt="">
        </div>
        <div>
          <img src="./image/wheels.png" class="wheels col-12" alt="">
        </div>
      </div>

      <div class="col-lg-4 col-12 order-lg-2 order-2 align-self-center">
        <div class="bbb_advs">
          <div class="row justufy-content-end ">
            <div class="col-lg-9 bbb_adv_col">
              <!-- bbb_adv Item -->
              <div class="bbb_adv d-flex flex-row align-items-center mt-5">
                <div class="bbb_adv_content">

                  <div class="bbb_adv_text">Free fuel for new cliets</div>
                </div>
                <div class="ml-auto">
                  <div class="bbb_adv_image"> <img src="./image/Fual.png" class="col-12" alt=""></div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 bbb_adv_col">
              <!-- bbb_adv Item -->
              <div class="bbb_adv d-flex flex-row align-items-center" id="hover_binifiets">
                <div class="bbb_adv_content">
                  <div class="bbb_adv_text text-light">Quality tires for any season</div>
                </div>
                <div class="ml-auto">
                  <div class="bbb_adv_image"><img src="./image/Quality.png" class="col-12" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 bbb_adv_col">
            <!-- bbb_adv Item -->
            <div class="bbb_adv d-flex flex-row align-items-center">
              <div class="bbb_adv_content">

                <div class="bbb_adv_text">Customer satisfaction rates</div>
              </div>
              <div class="ml-auto">
                <div class="bbb_adv_image"><img src="./image/customer.png" class="col-12" alt=""></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="col-12 row justify-content-center order-3 scrollDown_block3">
      <div class="scrollDown">
        <a href="#vihcules">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
  </div>
  </div>





  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./bootstrap links/js/popper.min.js"></script>
  <script src="./bootstrap links/js/jquery-3.5.1.min.js"></script>
  <script src="./bootstrap links/js/bootstrap.js"></script>
  <script src="./app.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },

    });
  </script>

</body>

</html>