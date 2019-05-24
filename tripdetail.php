<?php
include 'helper/connection.php';
session_start();

$id_trip = $_GET['id_trip'];

$query = "SELECT * FROM list_trip lt INNER JOIN detail_trip dt ON lt.id_detail = dt.id_detail WHERE lt.id_trip = '$id_trip'";
// die($query);
$result = mysqli_query($con, $query);
$row = '';
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
} else {
  echo "Tidak Trip";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Road Trip</title>
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
          <div class="col-4 site-logo" data-aos="fade"></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle" style="position:fixed; right:5%" data-aos="fade">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="active"><a href="trip.php">Trip</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/<?= $row['foto'] ?>)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up"><?= $row['nama_trip'] ?></a></h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Hello Friends and Happy Holiday to You All</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    
    <section class="section bg-light post">
      <div class="container">
          <div class="container">
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                  <h1 class="heading" data-aos="fade-up"><?= $row['nama_trip'] ?></a></h1>
                  <br><br>
                  <!-- <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p> -->
                  <a href="#" class="mb-4 d-block"><img src="img/<?= $row['foto_galeri'] ?>" alt="Image placeholder" class="img-fluid"></a>
                </div>
              </div>

              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                <h5 data-aos="fade-up"><?= $row['detail'] ?></a></h5>
                </div>
              </div>
            </div>
          </div>
          <!-- END content -->

          <p data-aos="fade-up" data-aos-delay="100" style="text-align:center"> <a href="trip.php" >Back</a></p>

          <form action="actions/booking.php">
                <input type="hidden" name="id_trip" value="<?= $row['id_trip'] ?>">
                <div class="row">
                  <div class="col-md-5"></div>
                  <div class="col-md-2">
                  <input type="number" min = "1" max="<?=$row['jml']?>" name="jumlah" class="form-control mb-3" data-aos="fade-up" data-aos-delay="100" placeholder="Jumlah Booking Trip" style="width: 100%" >
                  </div><h4 class="text-danger" style="padding-top: 7px"><?php echo $row["jml"]; ?></h4> <br><br>
                </div>
                <p data-aos="fade-up" data-aos-delay="100" style="text-align:center"> <input type="submit" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block" value="Booking"></p>
          </form>

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
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>