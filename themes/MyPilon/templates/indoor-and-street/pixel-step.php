<?php
$pixel_step_title = get_field('pixel_step_title');
$pixel_step_description = get_field('pixel_step_description');
$pixel_step_image = get_field('pixel_step_image');
?>

<section id="pixel-step">
<img class="transparent-two" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/transparent-two.png" />
    <div class="container">
      <?php if (!empty($pixel_step_title)) : ?>
          <h2 class="section-title animate__animated animate__fadeInUp"><?= $pixel_step_title ?? '' ?></h2>
      <?php endif; ?>
      <?php if (!empty($pixel_step_description)) : ?>
          <p class="pixel_step_description"><?= $pixel_step_description ?? '' ?></p>
      <?php endif; ?>
      <?php if (!empty($pixel_step_image)) : ?>
          <div class="pixel-step__image">
              <img src="<?= $pixel_step_image['url'] ?>" alt="">
          </div>
      <?php endif; ?>
    </div>
</section>