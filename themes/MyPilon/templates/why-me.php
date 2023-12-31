<?php
$about_title = get_field('about_title', 7);
$about_blocks = get_field('about_block', 7);
?>

<section id="why-me">
    <div class="container">
        <div class="why-me-block">
          <?php if (!empty($about_title)) : ?>
              <h2 class="section-title animate__animated animate__fadeInUp" data-wow-offset="0"><?= $about_title ?? '' ?></h2>
          <?php endif; ?>
        </div>
      <?php if (!empty($about_blocks)) : ?>
          <div class="why-me-block-items">
            <?php foreach ($about_blocks as $key => $item) : ?>
                <div class="why-me-block-item animate__animated animate__fadeInUp" data-wow-offset="0" data-wow-delay="<?=$key?>s">
                  <?php if ($item['image']) : ?>
                      <div class="why-me-block-item-image">
                          <img src="<?= $item['image']['url'] ?>" alt="">
                      </div>
                  <?php endif ?>
                  <?php if ($item['title']) : ?>
                      <h3 class="why-me-block-item-title"><?= $item['title'] ?></h3>
                  <?php endif ?>
                  <?php if ($item['description']) : ?>
                      <p class="why-me-block-item-description"><?= $item['description'] ?></p>
                  <?php endif ?>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>