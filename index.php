<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Project Showcase</title>
    <meta name="description" content="Project Showcase">
    <meta name="author" content="Showcase Team">

    <!--[favicon]-->
    <link rel="icon" type="images/png" href="images/dhss_logo_pixels.png">

    <!--[stylesheet]-->
    <link rel="stylesheet" href="css/styles.css">

    <!--[typefaces]-->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat&display=swap" rel="stylesheet">

  </head>

  <body>
    <!--[background image]-->
    <img id="dhss_logo" src="images/dhss_logo_grey.png" alt="DHSS Logo"/>

    <!--[navigation bar start]-->
    <div id="navbar">
      <div id="navbar_content">
        <div id="navbar_left">
          <a href="#home">Home</a>
        </div>
        <div id="navbar_right">
          <a href="#project">Projects</a>
        </div>
      </div>
    </div>
    <!--[navigation bar end]-->

    <!--[ribbon start]-->
    <?php
      $path = './';
      include $path.'php/ribbon.php'
    ?>
    <!--[ribbon end]-->

    <!--[feature card start]-->
    <div id="feature_card">
      <?php
        $path = './';
        include $path.'php/card.php'
      ?>
      <img src="<?php echo $image?>" alt="placeholder">
      <div id="short_desc">
        <h3><?php echo $title ?></h3>
        <p><?php echo $short_desc ?></p>
      </div>
      <div id="gradient_overlay"></div>
    </div>
    <!--[feature card end]-->
    <script src="js/scripts.js"></script>
  </body>
</html>
