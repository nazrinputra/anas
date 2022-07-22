<?php
include 'db.php';

$sqlService = "SELECT * FROM service";
$resultService = mysqli_query($connection, $sqlService);

$sqlCustomer = "SELECT * FROM customer";
$resultCustomer = mysqli_query($connection, $sqlCustomer);
$countCustomer = mysqli_num_rows($resultCustomer)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Anas - Work</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Anas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="/services.php">Services</a></li>
          <li><a class="nav-link scrollto active" href="/work.php">Work</a></li>
          <li><a class="nav-link scrollto" href="/booking.php">booking</a></li>
          <li><a class="nav-link scrollto" href="/users.php">Users</a></li>
          <li>
            <?php
            if ($logged_in) {
            ?>
              <a class="nav-link scrollto" href="/logout.php">Logout</a>
            <?php
            } else {
            ?>
              <a class="nav-link scrollto" href="/login.php">Login</a>
            <?php
            }
            ?>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main" class="mt-5">
    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <?php
          while ($rowService = mysqli_fetch_array($resultService)) {
            $count = 0;
            $service_id = $rowService['id'];

            $sqlCount = "SELECT COUNT(*) AS count FROM booking WHERE service_id='{$service_id}'";
            $resultCount = mysqli_query($connection, $sqlCount);
            $rowCount = mysqli_fetch_array($resultCount);
            if ($rowCount['count']) {
              $count = $rowCount['count'];
            }
          ?>
            <!-- Counter item -->
            <div class="col-sm-4 col-lg-4 mb-5">
              <div class="counter-box pt-4 pt-md-0">
                <div class="counter-ico">
                  <span class="ico-circle"><?php echo $rowService['image'] ?></span>
                </div>
                <div class="counter-num">
                  <p data-purecounter-start="0" data-purecounter-end="<?php echo $count ?>" data-purecounter-duration="1" class="counter purecounter"></p>
                  <span class="counter-text"><?php echo strtoupper($rowService['name']) ?></span>
                </div>
              </div>
            </div>
            <!-- End Counter item -->
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <!-- End Counter Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                <?php
                if ($countCustomer != 0) {
                  while ($rowCustomer = mysqli_fetch_array($resultCustomer)) {
                ?>
                    <!-- Testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-box">
                        <div class="author-test">
                          <span class="author"><?php echo $rowCustomer['name'] ?></span>
                        </div>
                        <div class="content-test">
                          <p class="description lead">
                            Phone No: <?php echo $rowCustomer['phone'] ?> <br>
                            Car Plate No: <?php echo $rowCustomer['plate'] ?> <br>
                            Car Model: <?php echo $rowCustomer['model'] ?> <br>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Testimonial item -->
                  <?php
                  }
                } else {
                  ?>
                  <!-- Testimonial item -->
                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="content-test">
                        <p class="description lead">
                          There's no customer to display
                        </p>
                      </div>

                    </div>
                  </div>
                  <!-- Testimonial item -->
                <?php
                }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">
              &copy; Copyright <strong>Anas</strong> <?php echo date("Y"); ?>
              . All Rights Reserved
            </p>

          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>