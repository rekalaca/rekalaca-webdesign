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
      content="reszponzív, weboldalkészítés, webdesign, weblapkészítés, honlapkészítés, weblap karbantartás, Nyíregyháza, rekalaca webdesign, olcsó, kedvező áron, megbízható">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">  

</head>

<body>

  
    <!-- ======= Thanks Section ======= -->
  <section id="thanks">
    <div class="thanks-container">
      <a href="index.html" class="hero-logo"><img src="assets/img/newlogo/webdesign750.png" alt=""
          style="max-width: 300px;"></a>
      <h1 style="font-size: 28px; margin-top: 50px; color: white">Köszönöm érdeklődését!</h1>
      <h2 style="font-weight: 700; color: white;">Hamarosan felveszem Önnel a kapcsolatot!</h2 style="font-weight: 600;">
      <a href="index.html" class="btn-get-started scrollto">Vissza a Főoldalra!</a>
    </div>
  </section>
  <!-- End Hero -->

  

 

</body>

</html>

';


?>