//discontinued; no longer in use

<?php
  function createCard($title, $short_desc, $image, $long_desc)
  { ob_start(); ?>
    <div onclick="onClick(this)" class="card">
      <img src="<?php echo $image?>" alt="placeholder">
      <div class="short_desc">
        <h3><?php echo $title ?></h3>
        <p><?php echo $short_desc ?></p>
        <p><?php echo $long_desc ?></p>
      </div>
      <div class="gradient_overlay"></div>
      <p class="read_more">Read More</p>
    </div>
<?php
      return ob_get_clean();
  }
?>
