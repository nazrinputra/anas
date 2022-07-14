<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>DevFolio Bootstrap Portfolio Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
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
            <li><a class="nav-link scrollto" href="/blog.php">Blog</a></li>
            <li><a class="nav-link scrollto active" href="/login.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main" class="mt-5">
      <!-- ======= Contact Section ======= -->
      <section
        id="contact"
        class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(assets/img/overlay-bg.jpg)"
      >
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left">Send Message Us</h5>
                      </div>
                      <div>
                        <form
                          action="forms/contact.php"
                          method="post"
                          role="form"
                          class="php-email-form"
                        >
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input
                                  type="text"
                                  name="name"
                                  class="form-control"
                                  id="name"
                                  placeholder="Your Name"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input
                                  type="email"
                                  class="form-control"
                                  name="email"
                                  id="email"
                                  placeholder="Your Email"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control"
                                  name="subject"
                                  id="subject"
                                  placeholder="Subject"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea
                                  class="form-control"
                                  name="message"
                                  rows="5"
                                  placeholder="Message"
                                  required
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-md-12 text-center my-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">
                                Your message has been sent. Thank you!
                              </div>
                            </div>
                            <div class="col-md-12 text-center">
                              <button
                                type="submit"
                                class="button button-a button-big button-rouded"
                              >
                                Send Message
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="title-box-2 pt-4 pt-md-0">
                        <h5 class="title-left">Get in Touch</h5>
                      </div>
                      <div class="more-info">
                        <p class="lead">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Facilis dolorum dolorem soluta quidem expedita
                          aperiam aliquid at. Totam magni ipsum suscipit amet?
                          Autem nemo esse laboriosam ratione nobis mollitia
                          inventore?
                        </p>
                        <ul class="list-ico">
                          <li>
                            <span class="bi bi-geo-alt"></span> 329 WASHINGTON
                            ST BOSTON, MA 02108
                          </li>
                          <li>
                            <span class="bi bi-phone"></span> (617) 557-0089
                          </li>
                          <li>
                            <span class="bi bi-envelope"></span>
                            contact@example.com
                          </li>
                        </ul>
                      </div>
                      <div class="socials">
                        <ul>
                          <li>
                            <a href=""
                              ><span class="ico-circle"
                                ><i class="bi bi-facebook"></i></span
                            ></a>
                          </li>
                          <li>
                            <a href=""
                              ><span class="ico-circle"
                                ><i class="bi bi-instagram"></i></span
                            ></a>
                          </li>
                          <li>
                            <a href=""
                              ><span class="ico-circle"
                                ><i class="bi bi-twitter"></i></span
                            ></a>
                          </li>
                          <li>
                            <a href=""
                              ><span class="ico-circle"
                                ><i class="bi bi-linkedin"></i></span
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
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
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
