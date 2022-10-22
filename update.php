<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SCP Classified Files</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.9.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

    <?php
    include "connection.php";
    
    $id = $_GET['update'];
    $file = $connection->query("select * from scp WHERE id='$id'");
    $array = $file->fetch_assoc();
    ?>
    <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="images/scp_trans.png"> SCP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar navbar-fixed-top">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto  active" href="#">Updating「<?php echo $array['name']; ?>」</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<section class="cta">
        <div class="container">
                        <form  method="post" action="connection.php" class="php-email-form">
                            <input type="hidden" name="id" value="<?php echo $array['id']; ?>">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Item #:</label>
                                    <input class="form-control" name="item" id="item" type="text" value="<?php echo $array['item'];?>" />
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">File name:</label>
                                    <input class="form-control" name="name" id="name" type="text" value="<?php echo $array['name'];?>" />
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mt-3">
                                <label for="class">File class:</label>
                                <input class="form-control" name="class" id="class" type="text" value="<?php echo $array['class'];?>" />
                                
                                </div>
                                <div class="form-group col-md-6 mt-3">
                                    <label for="image">Photo URL:</label>
                                    <input class="form-control" name="image" id="image" type="text" value="<?php echo $array['image'];?>" />
                                    
                                </div>                                
                            </div>
                                
                            <div class="form-group mt-3">
                                <label for="containment">Special Containment Procedures:</label>
                                <textarea class="form-control" name="containment" id="containment" type="text" value=""><?php echo $array['containment'];?></textarea>
                                
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description" type="text" ><?php echo $array['description'];?></textarea>
                                
                            </div>
                            <input class="btn btn-danger rounded text-uppercase mt-3" type="submit" value="Update" name="update">
                            <a class="btn btn-danger text-uppercase  ms-5 mt-3" href="index.php">Cancel</a>
                        </form>
                    </div>
            </header>
        <hr class="m-0" />
    </div>
    </section>
      <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


          <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
        </body>
        </html