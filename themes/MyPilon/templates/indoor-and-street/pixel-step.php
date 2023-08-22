<?php
$pixel_step_title = get_field('pixel_step_title');
$pixel_step_image = get_field('pixel_step_image');
?>

<section id="pixel-step">
    <div class="container">
      <?php if (!empty($pixel_step_title)) : ?>
          <h2 class="pixel-step__title"><?= $pixel_step_title ?? '' ?></h2>
      <?php endif; ?>
      <?php if (!empty($pixel_step_image)) : ?>
          <div class="pixel-step__image">
              <img src="<?= $pixel_step_image['url'] ?>" alt="">
          </div>
      <?php endif; ?>
    </div>
</section>