<?php
$additional_options_title = get_field('additional_options_title');
$additional_options_option = get_field('additional_options_option');
?>

<section id="additional-options">
    <div class="container">
      <?php if (!empty($additional_options_title)) : ?>
          <h2 class="additional-options__title"><?= $additional_options_title ?? '' ?></h2>
      <?php endif; ?>
      <?php if (!empty($additional_options_option)) : ?>
          <div class="additional-options__blocks">
            <?php foreach ($additional_options_option as $option) : ?>
                <div class="additional-options__block">
                  <?php if (!empty($option['image'])) : ?>
                      <div class="additional-options__block-image">
                          <img src="<?= $option['image']['url'] ?>" alt="">
                      </div>
                  <?php endif; ?>
                  <?php if (!empty($option['description_image'])) : ?>
                      <div class="additional-options__block-description_image">
                        <?= $option['description_image'] ?? '' ?>
                      </div>
                      <p><?= $option['option_description'] ?? '' ?></p>
                  <?php endif; ?>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>