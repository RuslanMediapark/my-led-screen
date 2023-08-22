<?php
$screens_size_title = get_field('screens_size_title');
$screens_size_image = get_field('screens_size_image');
?>

<section id="screens-size">
    <div class="container">
      <?php if (!empty($screens_size_title)) : ?>
          <h2 class="screens-size__title"><?= $screens_size_title ?? '' ?></h2>
      <?php endif; ?>
        <div class="screens-size__block">
            <div class="screens-size__block-configuration">
                <!-- TODO -->
            </div>
          <?php if (!empty($screens_size_image)) : ?>
              <div class="screens-size__block-image">
                  <img src="<?= $screens_size_image['url'] ?>" alt="">
              </div>
          <?php endif; ?>
        </div>
    </div>
</section>