<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "rekalaca@rekalaca-webdesign.hu";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="hu">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>rekalaca webdesign | reszponzív, mobilbarát weboldalak készítése!</title>
  <meta name="description"
    content="Reszponzív, mobilbarát Weboldalak tervezése és kivitelezése kedvező áron!/Nyíregyháza">
  <meta name="robots" content="index, folow">
  <link rel="canonical" href="https://www.rekalaca-webdesign.hu/">
  <meta name="keywords"
    content="reszponzív, weboldalkészítés, webdesign, weblapkészítés, honlapkészítés, weblap karbantartás, Nyíregyháza,rekalaca webdesign">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
  <script>
    $(function () {
      $("#header").load("header.html");
      $("#footer").load("footer.html");
    });
  </script>

</head>

<body>
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/newlogo/Rekalaca.png" alt=""
          style="max-width: 300px;"></a>
      <h1 data-aos="zoom-in">Köszönöm megkeresését!</h1>
      <h2 data-aos="fade-up">Hamarosan felveszem Önnel a kapcsolatot!</h2>
      <a data-aos="fade-up" href="index.html" class="btn-get-started scrollto">Vissza a Főoldalra!</a>
    </div>
  </section>
  <!-- End Hero -->




  <main id="main">


  <!-- ======= Footer Section ======= -->
  <div id="footer"></div>
  <!-- ======= End Footer Section ======= -->

</main><!-- End #main -->




<a href="#" class="back-to-top d-flex align-items-center justify-content-center upbutton"><i
    class="bi bi-arrow-up-short"></i></a>



<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>





</body>

</html>


';


?>