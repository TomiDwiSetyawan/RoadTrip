<?php

include 'helper/connection.php';
session_start();

?>

<html>
    <!-- Include header.php that contain header informations -->
    <?php include 'actions/header.php' ?>
    <body class="site-hero overlay" style="background-image: url(img/admin-1.jpg)">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <li class="nav-link"><a href="adminhome.php">Home</a></li>
                        <li class="nav-link"><a href="adminlist.php">Order User</a></li>
                        <li class="nav-link"><a href="adminupload.php">Upload</a></li>
                        <li class="nav-link"><a href="admineditlist.php">List Trip</a></li>
                        <li class="nav-link"><a href="actions/logout.php">Logout</a></li>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
        <br>

        <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <br><br><br><br><br><br><br><br>
            <center><h1 class="heading" data-aos="fade-up" style="color: white; font-size: 120px;"><font face="Blenda Script">Welcome <i>Admin </i></font></h1></center>
          </div>
        </div>
      </div>
    
    

    </body>
</html>


