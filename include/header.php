<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
  <!-- PNG format for modern browsers -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon.ico">
  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/favicon.ico">
  <title>Station Satcom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css?v=2.5">
  <link rel="stylesheet" href="assets/css/responsive.css?v=3.1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
  <div class="hero-section">
    <div class="navbar">
      <div class="navbar-left d-flex" style="align-items: center;">
        <a href="index.php">
          <img src="assets/images/Logo-01.png" alt="Station Satcom">
        </a>

        <div class="navbar-center" style="padding-left: 30px;">
          <a href="connectivity.php">CONNECTIVITY</a>
          <a href="it.php">IT & CYBERSECURITY</a>
          <a href="crew-engagement.php">CREW ENGAGEMENT</a>
          <a href="operational-product.php">OPERATIONAL TECHNOLOGIES</a>
        </div>
      </div>
      <div class="navbar-right">
        <a href="about-us.php">ABOUT</a>
        <a href="#">|</a>
        <a href="contact-us.php">CONTACT</a>

        <div class="hamburger" onclick="openNav()">
          <img src="assets/images/Menu.svg">
        </div>
      </div>
    </div>

    <div id="sideNav" class="side-nav">
      <span class="" onclick="closeNav()"><img src="assets/images/menu/cross.svg" class="close-btn"></span>
      <div class="nav-items">
        <a href="index.php">HOME</a>
        <a href="connectivity.php">CONNECTIVITY</a>
        <a href="it.php">IT & CYBERSECURITY</a>
        <a href="crew-engagement.php">CREW ENGAGEMENT</a>
        <a href="operational-product.php">OPERATIONAL TECHNOLOGIES</a>
        <a href="faq.php">FAQ</a>
        <a href="about-us.php">ABOUT</a>
        <a href="contact-us.php">CONTACT</a>
      </div>
    </div>