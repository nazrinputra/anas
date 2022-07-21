<?php
include 'db.php';

if (!$logged_in) {
  header("Location: login.php");
  exit();
}

if (isset($_POST['createButton'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $plate = $_POST['plate'];
  $model = $_POST['model'];
  $date = $_POST['date'];
  $service = $_POST['service'];

  $sqlCustomer = "SELECT * FROM customer WHERE phone='{$phone}' AND plate='{$plate}'";
  $resultCustomer = mysqli_query($connection, $sqlCustomer);
  $rowCustomer  = mysqli_fetch_array($resultCustomer);
  if (is_array($rowCustomer)) {
    $customer_id = $rowCustomer['id'];
  } else {
    $sqlInsertCustomer = "INSERT into customer (name, phone, plate, model) VALUES ('{$name}', '{$phone}', '{$plate}', '{$model}')";
    $sqlQueryInsertCustomer = mysqli_query($connection, $sqlInsertCustomer);

    if (!$sqlQueryInsertCustomer) {
      die("Database connection not established. " . mysqli_error($connection));
    } else {
      $customer_id = mysqli_insert_id($connection);
    }
  }

  $sqlBooking = "INSERT into booking (date, service, customer_id) VALUES ('{$date}', '{$service}', '{$customer_id}')";
  $sqlQueryBooking = mysqli_query($connection, $sqlBooking);

  if (!$sqlQueryBooking) {
    die("Database connection not established. " . mysqli_error($connection));
  }

  echo '<script>alert("Your booking has been placed. Thank you.");window.location.href="booking.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Anas - Create Booking</title>
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
          <li><a class="nav-link scrollto" href="/about.php">About</a></li>
          <li><a class="nav-link scrollto" href="/services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="/work.php">Work</a></li>
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
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col">
                  <div class="title-box-2">
                    <h5 class="title-left">Create Booking</h5>
                  </div>
                  <div>
                    <form action="" method="post" role="form" class="email-form">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required />
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone No" min="0" step="1" required />
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plate" id="plate" placeholder="Your Car Plate No" required />
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="model" id="model" placeholder="Your Car Model" required />
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="date" class="form-control" name="date" id="date" placeholder="Booking Date" min="<?php echo date('Y-m-d'); ?>" required />
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="service" id="service" placeholder="Your Desired Service" required />
                          </div>
                        </div>
                        <div class="col-md-12 text-center my-3">
                          <div class="error-message"><?php echo $error_message; ?></div>
                        </div>
                        <div class="col-md-12 text-center">
                          <button type="submit" name="createButton" class="button button-a button-big button-rouded">
                            Create
                          </button>
                        </div>
                      </div>
                    </form>
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