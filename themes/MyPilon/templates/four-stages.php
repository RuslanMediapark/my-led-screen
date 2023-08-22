<?php
$four_stages_title = get_field('four_stages_title');
$four_stages_blocks = get_field('four_stages_blocks');
?>

<section id="four_stages">
    <div class="container">
      <?php if (!empty($four_stages_title)): ?>
          <h2 class="four_stages__title">
            <?= $four_stages_title ?? '' ?>
      </h2>
      <?php endif; ?>
      <?php if (!empty($four_stages_blocks)) : ?>
          <div class="four_stages__blocks">
            <?php foreach ($four_stages_blocks as $block) : ?>
                <div class="four_stages__block">
                  <?php if (!empty($block['number_stage'])) : ?>
                    <span class="our_stages__block-number-stage">
                      <?= $block['number_stage'] ?? '' ?>
                    </span>
                  <?php endif ?>
                  <?php if (!empty($block['image'])) : ?>
                    <div class="four_stages__block-image">
                        <img class="style-svg" src="<?= $block['image']['url'] ?>" alt="">
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($block['title'])) : ?>
                    <h3 class="our_stages__block-title">
                      <?= $block['title'] ?? '' ?>
                    </h3>
                  <?php endif ?>
                  <?php if (!empty($block['text'])) : ?>
                    <p class="our_stages__block-text">
                      <?= $block['text'] ?? '' ?>
                    </p>
                  <?php endif ?>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>