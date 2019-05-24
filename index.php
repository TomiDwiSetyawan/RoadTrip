<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Road Trip</title>
    <link rel="shortcut icon" href="img/logo.jpg">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle" style="position:fixed; right:5%"   data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.php">Home</a></li>
                        <!-- <li><a href="hotel.html">Hotel</a></li> -->
                        <li><a href="about.php">About</a></li>
                        <li><a href="destinasi.php">Trip</a></li>
                        <li><a href="documentation.php">Documentation</a></li>

                        <?php
                        if (isset($_SESSION['user'])) {
                          ?>
                          <li><a href="actions/logout.php">Logout</a></li>
                        <?php 
                      }
                      ?>

                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p> 98 Soekarno-Hatta Street<br> Malang 10016</p>
                          <p>roadtrip@yourdomain.com</p>
                          <p>(+1) 435 3533</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(img/1.cover.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <br><br>
            <h1 class="heading" data-aos="fade-up"><font face="Blenda Script">Welcome to <em>Road Trip </em></font></h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100"><font face="Gill Sans MT Condensed">- Plan Your Dream Vocation -</font></p>
            <br><br><br><br><br><br>
            <?php
            if (!isset($_SESSION['user'])) {
              ?>
            <p data-aos="fade-up" data-aos-delay="100"><a href="login.php" class="btn uppercase btn-outline-light d-sm-inline d-block">Login</a> <a href="register.php" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Register</a></p>
            <?php 
          }
          ?>
            

          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="section visit-section">
      <div class="container">
        <div class="row">
        <div class="col-md-6"></div>
          <div class="col-md-4">
            <h2 class="heading" data-aos="fade-right">Type Trip</h2>
            <br><br>
          </div>
        <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
            <img src="img/brm.png" alt="Image Open Trip" class="img-fluid">
            <h3><a href="trip.php">Open Trip</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              3,239 reviews
            </span>
          </div>
          <!-- <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100">
            <a href="restaurant.html"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="restaurant.html">Resort &amp; Spa</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-half"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              4,921 reviews
            </span>
          </div> -->
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="200">
            <img src="img/ce.jpg" alt="Image Private Trip" class="img-fluid">
            <h3><a href="trip.php">Private Trip</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              2,112 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="300">
            <img src="img/bond.png" alt="Image Outbound" class="img-fluid">
            <h3><a href="trip.php">Outbound</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
            </div>
            <span class="reviews-count float-right">
              6,421 reviews
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Indonesia so Beautiful</h2>
            <br><br>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">One's destination is never a place, but a new way of seeingthings.
              <br>
              Stuff your eyes with wonder, live as if you’d drop dead in ten seconds. See the world. It’s more fantastic than any dream made or paid for in factories.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="img/Slide - Gunung.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/Slide - Pantai.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/Slide - Air Terjun.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/Slide - Bawah Laut.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/Slide - Camping.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/Slide - Camping2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Facilities for Customer of Road Trip</h2>
            <!-- <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p> -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/facilities-1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <br>
                <!-- <span class="meta-post">February 26, 2018</span> -->
                <h2 class="mt-0 mb-3" style="text-align:center">Food, Drinks and Snacks</h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/facilities-2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <br>
                <!-- <span class="meta-post">February 26, 2018</span> -->
                <h2 class="mt-0 mb-3" style="text-align:center">Resort</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/facilities-3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <br>
                <!-- <span class="meta-post">February 26, 2018</span> -->
                <h2 class="mt-0 mb-3" style="text-align:center">Documentation</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/testimoni-1.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo; Makasih Road Trip buat pelayanannya selama di trip..puas banget.. liburan menarik, guidenya+supirnya ramah.. 
                  mau di repotin sama cewe2 rempong..hahaha..harganya murah tapi pelayanannya juara.. orangnya ramah2 banget..pokoknya bikin pengen holiday lagi..dan pake Road Trip lagi tentunya.. &rdquo;</p>
              </blockquote>
              <p><em>&mdash; Fita Fitria &mdash;</em></p>
              
            </div>
          </div>
          <!-- END col -->
          
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/testimoni-2.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>
                <p>&ldquo; Sangat menyenangkan dapat berwisata dengan fasilitas private trip ditemani oleh guide yang ramah. Fasilitas yang diberikan pun nyaman dari mulai akomodasi dan makan malam yang romantis. Terima Kasih Road Trip. Kami sangat senang menikmati perjalanan ini. &rdquo;</p>
              </blockquote>
              <p><em>&mdash; Eni Indriani &mdash;</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="img/testimoni-3.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Pelayanan Road Trip memang OK banget, nggak nyesel pakai Jasa Road Trip. Banyak bonus diluar paket tournya. Hehee… Kami sangat puas dengan pelayanan Road Tripl, terutama untuk flexyble waktunya. Pokoknya menyenangkan bikin ketagihan holiday lagi inssalah…! Dan tentunya dengan Road Trip lagi&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Dede Fiskurniawan &mdash;</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>
    </section>

    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <br><br>
            <p class="heading" data-aos="fade-right"><font size="7" face="Blenda Script">Road Trip</font></p>
          </div>
          <div class="col-md-3 mb-5">
            <!-- <ul class="list-unstyled link">
              <li><a href="#">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul> -->
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 98 Soekarno-Hatta Street, Malang 10016</span></p>
            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> <span> roadtrip@yourdomain.com</span></p>
          </div>
          <!-- <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div> -->
          <!-- <div class="col-md-3 mb-5">
            <br><br>
            <p class="heading" data-aos="fade-left"><font size="7" face="Blenda Script">Road Trip</font></p>
          </div> -->
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Projek 1 <br> by <a href="https://colorlib.com" target="_blank">Afifah | Aji | Tomi</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-instagram"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>