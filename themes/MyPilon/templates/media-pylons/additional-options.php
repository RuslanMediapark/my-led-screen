<?php
$additional_options_title = get_field('additional_options_title');
$additional_options_option = get_field('additional_options_option');
?>

<section id="additional-options">
    <div class="container">
      <?php if (!empty($additional_options_title)) : ?>
          <h2 class="section-title  animate__animated animate__fadeInUp" data-wow-offset="0"><?= $additional_options_title ?? '' ?></h2>
      <?php endif; ?>
      <?php if (!empty($additional_options_option)) : ?>
          <div class="additional-options__blocks">
            <?php foreach ($additional_options_option as $key => $option) : ?>
                <div class="additional-options__block animate__animated animate__fadeInUp" data-wow-offset="0" data-wow-delay="<?=$key?>s">
                  <?php if (!empty($option['image'])) : ?>
                      <div class="additional-options__block-image">
                          <img src="<?= $option['image']['url'] ?>" alt="">
                      </div>
                  <?php endif; ?>
                  <?php if (!empty($option['description_image'])) : ?>
                      <div class="additional-options__block-description_image">
                        <?= $option['description_image'] ?? '' ?>
                      </div>
                      <p class="additional-options__block-description"><?= $option['option_description'] ?? '' ?></p>
                  <?php endif; ?>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>