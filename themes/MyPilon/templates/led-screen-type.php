<?php
$views_title = get_field('views_title');
$views_blocks = get_field('views_block');
?>

<section id="led-screen-type">
    <img class="item-two" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/item-two.png" />  
    <div class="container">
        <div class="led-screen-type-block">
          <?php if (!empty($views_blocks)) : ?>
              <h2 class="section-title"><?= $views_title ?? '' ?></h2>
          <?php endif; ?>
        </div>
      <?php if (!empty($views_blocks)) : ?>
          <div class="led-screen-type-block-items">
            <?php foreach ($views_blocks as $item) : ?>
                <div class="led-screen-type-block-item">
                  <?php if ($item['image']) : ?>
                      <div class="led-screen-type-block-item-image">
                          <img src="<?= $item['image']['url'] ?>" alt="">
                      </div>
                  <?php endif ?>
                  <?php if ($item['title']) : ?>
                      <h3 class="led-screen-type-block-item-title"><?= $item['title'] ?></h3>
                  <?php endif ?>
                  <?php if ($item['description']) : ?>
                      <p class="led-screen-type-block-item-description"><?= $item['description'] ?></p>
                  <?php endif ?>
                  <?php if ($item['link']) : ?>
                      <a
                        class="led-screen-type-block-item-link"
                        href="<?= $item['link']['url'] ?>">
                        Подробнее
                      </a>
                  <?php endif ?>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>