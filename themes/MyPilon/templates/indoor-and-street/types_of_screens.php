<?php
$types_of_screens_title = get_field('types_of_screens_title');
$types_of_screens_views = get_field('types_of_screens_views');
?>

<section id="types-of-screens">
    <div class="container">
      <?php if (!empty($types_of_screens_title)) : ?>
          <h2 class="section-title  animate__animated animate__fadeInUp" data-wow-offset="0"><?= $types_of_screens_title ?? '' ?></h2>
      <?php endif; ?>
      <?php if (!empty($types_of_screens_views)): ?>
          <div class="types-of-screens__blocks">
            <?php foreach ($types_of_screens_views as $key => $view): ?>
              <div class="types-of-screens__block animate__animated animate__backInRight" data-wow-offset="0" data-wow-delay="<?=$key?>s">
              <?php if (!empty($view['image'])) : ?>
                    <div class="types-of-screens__block-image">
                        <img src="<?= $view['image']['url'] ?>" alt="">
                    </div>
              <?php endif; ?>
              <?php if (!empty($view['title'])) : ?>
                    <h4 class="types-of-screens__block-title"> <?= $view['title'] ?></h4>
              <?php endif; ?>
              <?php if (!empty($view['description'])) : ?>
                    <div class="types-of-screens__block-description"> <?= $view['description'] ?></div>
              <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>
    </div>
</section>