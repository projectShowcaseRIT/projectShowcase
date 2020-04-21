<?php
  $path = './';
  include $path.'php/getAllDocuments.php';
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
