<?php
include 'db.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Anas - Blog</title>
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
      <h1 class="logo"><a href="index.html">DevFolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="/about.php">About</a></li>
          <li><a class="nav-link scrollto" href="/services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="/work.php">Work</a></li>
          <li><a class="nav-link scrollto active" href="/blog.php">Blog</a></li>
          <li>
            <?php
            if (isset($_SESSION["id"])) {
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
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">Blog</h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="#"><img src="assets/img/post-1.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title">
                  <a href="#">See more ideas about Travel</a>
                </h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta
                  dapibus. Praesent sapien massa, convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle" />
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="#"><img src="assets/img/post-2.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title">
                  <a href="#">See more ideas about Travel</a>
                </h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta
                  dapibus. Praesent sapien massa, convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle" />
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="#"><img src="assets/img/post-3.jpg" alt="" class="img-fluid" /></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title">
                  <a href="#">See more ideas about Travel</a>
                </h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta
                  dapibus. Praesent sapien massa, convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle" />
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">
              &copy; Copyright <strong>DevFolio</strong>. All Rights Reserved
            </p>
            <div class="credits">
              Designed by
              <a href="#">BootstrapMade</a>
            </div>
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