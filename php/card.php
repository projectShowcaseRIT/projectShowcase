<div onclick="onClick(this)" class="card">
  <?php
    $path = './';
    include $path.'php/card_info.php'
  ?>
  <img src="<?php echo $image?>" alt="placeholder">
  <div class="short_desc">
    <h3><?php echo $title ?></h3>
    <p><?php echo $short_desc ?></p>
  </div>
  <div class="gradient_overlay"></div>
  <p class="read_more">Read More</p>
</div>
