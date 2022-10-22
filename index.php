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

<body>
  <?php include 'connection.php'; ?>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="images/scp_trans.png"> SCP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar navbar-fixed-top">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Classified Files</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach ($all_files as $link) : ?>
                <li>
                  <a class="nav-link scrollto" href="index.php?link='<?php echo $link['name']; ?>'">
                    <?php echo $link['name']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="create.php">Add Files</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">


    <?php

    if (isset($_GET['link'])) {
      $name = trim($_GET['link'], "'");

      // run sql command to retrieve record based on GET value
      $record = $connection->query("select * from scp where name='$name'");

      // turn record into an associative array
      $array = $record->fetch_assoc();

      // variables to hold our update and delete url strings
      $id = $array['id'];
      $update = "update.php?update=" . $id;
      $delete = "connection.php?delete=" . $id;

      echo "
           <section id='portfolio-details' class='portfolio-details'>
           <div class='container'>
     
             <div class='row gy-4'>
     
               <div class='col-lg-4'>
                 <div class='portfolio-details-slider swiper'>
                   <div class='swiper-wrapper align-items-center'>
     
                     <div class='swiper-slide'>
                       <img data-aos='fade-right' src='{$array['image']}' alt=''>
                     </div>
     
                   </div>
                   <div class='swiper-pagination'></div>
                 </div>
               </div>
     
               <div class='col-lg-8' data-aos='zoom-in'>
                 <div class='portfolio-info'>
                   <h3><strong>Item #: </strong>{$array['item']}</h3>
                   <ul>
                     <li><h3><strong>Name: </strong>{$array['name']}</h3></li>
                     <li><h3><strong>Class: </strong>{$array['class']}</h3></li>                   
                   </ul>
                 </div>
         </section>
              <section class='portfolio-details'>
              <div class='container' data-aos='zoom-in'>
        
                <div class='portfolio-info'>
                  <h3>Special Containment Procedures:</h3>
                  <p> {$array['containment']}</p>
                  <h3>Description:</h3>
                  <p> {$array['description']}</p>
                  <a class='cta-btn btn-danger text-center' href='{$update}'>UPDATE</a>
                  <a class='cta-btn btn-danger text-center ms-5' href='{$delete}'>DELETE</a>
                </div>
                   </section>

           
           
           ";
    }
     else
     {
         //default view that the user sees when visiting for the first time
         echo "
         <section id='hero' class='d-flex align-items-center'>
         <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
           <h1>SCP Foundation</h1>
           <h2>Access by unauthorized personnel is strictly prohibited perpetrators will be tracked, located, and detained</h2>
         </div>
       </section>
         ";
     }

    ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>