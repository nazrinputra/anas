<?php
include 'db.php';

$sql = "SELECT * FROM booking";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Anas - Booking</title>
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
  <link href="assets/vendor/fullcalendar/main.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href=" assets/css/style.css" rel="stylesheet" />
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
          <li><a class="nav-link scrollto" href="/work.php">Work</a></li>
          <li><a class="nav-link scrollto active" href="/booking.php">booking</a></li>
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
    <div id='calendar' class="p-5 m-5"></div>
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
  <script src="assets/vendor/fullcalendar/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'dayGridMonth,timeGridWeek,timeGridDay',
          center: 'title',
          right: 'create today,prev,next'
        },
        customButtons: {
          create: {
            text: 'create booking',
            click: function() {
              window.location.href = "create_booking.php";
            }
          },
        },
        events: [
          <?php
          while ($row = mysqli_fetch_array($result)) {
            $customer_id = $row['customer_id'];
            $sqlCustomer = "SELECT * FROM customer WHERE id={$customer_id}";
            $resultCustomer = mysqli_query($connection, $sqlCustomer);
            $rowCustomer = mysqli_fetch_array($resultCustomer);

            $service_id = $row['service_id'];
            $sqlService = "SELECT * FROM service WHERE id={$service_id}";
            $resultService = mysqli_query($connection, $sqlService);
            $rowService = mysqli_fetch_array($resultService);

            $title = $rowCustomer['plate'] . " - " . $rowService['name'];
          ?> {
              title: '<?php echo $title ?>',
              url: 'view_booking.php?id=<?php echo $row['id'] ?>',
              start: '<?php echo $row['date'] ?>',
            },
          <?php
          }
          ?>
        ],
      });
      calendar.render();
    });
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>