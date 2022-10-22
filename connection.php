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
        
        
        <?php
        $user = "a27037902_user";
        $pw = "Toiohomai1234";
        $db = "a27037902_database";

        $connection = new mysqli('localhost', $user, $pw, $db);
        $all_files = $connection->query("select * from scp");

        

        if (isset($_POST['submit'])) {
            $item = $connection->real_escape_string($_POST['item']);
            $name = $connection->real_escape_string($_POST['name']);
            $class = $connection->real_escape_string($_POST['class']);
            $containment = $connection->real_escape_string($_POST['containment']);
            $description = $connection->real_escape_string($_POST['description']);
            $image = $connection->real_escape_string($_POST['image']);

            $insert = "insert into scp(item,name,class,containment,description,image) values('$item','$name','$class','$containment','$description','$image')";
            if ($connection->query($insert) === TRUE) {
                echo " 
                <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>File Added Successfully</h1>
                    <a href='index.php' class='btn btn-danger'>Back to Home page</a>
                    <a href='create.php' class='btn btn-danger ms-3'>Add One More File</a>
                </div>
                </section>
                
                  <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->

                                ";
            } else {
                echo "
                <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>Error Submitting Data</h1>
                    <a href='index.php' class='btn btn-primary'>Back to Home page</a>
                    <a href='create.php' class='btn btn-primary ms-3'>Try Again</a>
                </div>
                </section>
                
                <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                    ";
            }
        } //end isset POST (insert content)

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $item = $connection->real_escape_string($_POST['item']);
            $name = $connection->real_escape_string($_POST['name']);
            $class = $connection->real_escape_string($_POST['class']);
            $containment = $connection->real_escape_string($_POST['containment']);
            $description = $connection->real_escape_string($_POST['description']);
            $image = $connection->real_escape_string($_POST['image']);
            $update = "update scp set item='$item',name='$name',class='$class', containment='$containment',description='$description', image='$image' where id='$id'";
            
            
            if ($connection->query($update) === TRUE) {
                echo "
                
                <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>File Updated Successfully</h1>
                    <a href='index.php' class='btn btn-danger'>Back to Home page</a>
                </div>
                </section>
                <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                                ";
            } else {
                echo "
                    <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>Error Submitting Data</h1>
                    <a href='index.php' class='btn btn-danger'>Back to Home page</a>
                </div>
                </section>
                
                <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                                ";
            }
        } //end isset  POST (update record)

        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];

            $delete = "Delete from scp where id=$id";

            if ($connection->query($delete) === TRUE) {
                echo "
                    <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>File Deleted</h1>
                    <a href='index.php' class='btn btn-danger'>Back to Home page</a>
                </div>
                </section>
                
                <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                                ";
            } else {
                echo "
                                <section id='hero' class='d-flex align-items-center'>
                <div class='container position-relative' data-aos='fade-up' data-aos-delay='500'>
                <h1>Error Deleting Data</h1>
                    <a href='index.php' class='btn btn-danger'>Back to Home page</a>
                </div>
                </section>
                
                <footer id='footer'>
                    <div class='container'>
                      <div class='copyright'>
                        &copy; Copyright <strong><span>SCP FOUNDATION</span></strong>. All Rights Reserved
                      </div>
                      <div class='credits'>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
                                ";
            }
        }
        //end isset GET(delete record)



        ?>
          <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
        </body>
</html>

