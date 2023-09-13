<?php
$main_module_title = get_field('main_module_title');
$main_module_subtitle = get_field('main_module_subtitle');
$main_module_dignity = get_field('main_module_dignity');
?>

<section id="main-module">
    <div class="container">
        <div class="main-module__block">
              <?php if (!empty($main_module_title)) : ?>
                  <h1 class="main-module__block-left-title"><?= $main_module_title ?? '' ?></h1>
              <?php endif; ?>
              <?php if (!empty($main_module_subtitle)) : ?>
                  <h2 class="main-module__block-left-subtitle"><?= $main_module_subtitle ?? '' ?></h2>
              <?php endif; ?>
              <?php if (!empty($main_module_dignity)) : ?>
                  <div class="main-module__block-left-dignity">
                    <?php foreach ($main_module_dignity as $item) : ?>
                      <div class="main-module__block-item">
                      <?php if (!empty($item['image'])) : ?>
                            <div class="main-module__block-left-dignity-image">
                                <img class="style-svg" src="<?= $item['image']['url'] ?>" alt="">
                            </div>
                      <?php endif; ?>
                      <?php if (!empty($item['title'])) : ?>
                            <div class="main-module__block-left-dignity-title">
                                <p><?= $item['title'] ?? '' ?></p>
                                <p><?= $item['description'] ?? ''?></p>
                            </div>
                      <?php endif; ?>
                      </div>
                    <?php endforeach; ?>
                  </div>
              <?php endif; ?>

              <div class="main-module__block-right">
                <div class="main-module__block-right-images">
                </div>
            </div>          
        </div>
    </div>
</section>