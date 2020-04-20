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
    <link rel="stylesheet" href="css/card_style.css">

    <!--[typefaces]-->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat&display=swap" rel="stylesheet">

    <style>
      .card {
        position: relative;
      }
    </style>
  </head>

  <body>
    <!--[background image]-->
    <img id="dhss_logo" src="images/dhss_logo_grey.png" alt="DHSS Logo"/>

    <!--[navigation bar start]-->
    <?php
      $path = './';
      include $path.'php/navigation.php'
    ?>
    <!--[navigation bar end]-->

    <!--[card display start]-->
    <div id="card_container">
      <div id="navigation_offset">
        <?php
          $path = './';
          include $path.'php/displayCollection.php'
        ?>
      </div>
    </div>
    <!--[card display end]-->

    <script src="js/modal_script.js"></script>
  </body>
</html>
