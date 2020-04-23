<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Showcase</title>
    <meta name="description" content="Project Showcase">
    <meta name="author" content="Showcase Team">

    <!--[favicon]-->
    <link rel="icon" type="images/png" href="images/dhss_logo_pixels.png">

    <!--[stylesheet]-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/card_style.css">

    <!--[mobile stylesheet]-->
    <link rel="stylesheet" href="css/mobile.css">

    <!--[typefaces]-->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat&display=swap" rel="stylesheet">

    <style>
      #card_container {
        position: absolute;
        top: 40vh;
        left: 50%;
        height: 100%;
        width: 100%;
      }

      @media screen and (max-width: 930px) {
        #card_container {
          display: flex;
          left: 0;
          justify-content: center;
        }
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

    <!--[ribbon start]-->
    <?php
      $path = './';
      include $path.'php/ribbon.php'
    ?>
    <!--[ribbon end]-->

    <!--[feature card start]-->
    <div id="card_container">
      <?php
        $path = './';
        include $path.'php/random_card_info.php';
        include $path.'php/card.php';

        foreach($collection as $element){
          $title = $element->title;
          $short_desc = $element->short_desc;
          $image = $element->image;
          $long_desc = $element->long_desc;
          echo createCard($title, $short_desc, $image, $long_desc);
        }
      ?>

      <div id="modal_content">
        <img id="img01"/>
        <p id="long_desc"></p>
        <span id="close_button">&times;</span>
      </div>

    </div>
    <!--[feature card end]-->

    <script src="js/modal_script.js"></script>
  </body>
</html>
