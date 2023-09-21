<?php
$main_module_title = get_field('main_module_title');
$main_module_subtitle = get_field('main_module_subtitle');
$main_module_dignity = get_field('main_module_dignity');
$main_module_mode_page = get_field('main_module_mode_page');
$main_module_dignity_title = get_field('main_module_dignity_title');
$main_module_image = get_field('main_module_image');
?>

<section id="main-module">
    <div class="container">
        <div class="main-module__block">
            <?php if (!empty($main_module_title)) : ?>
                <h1 class="main-module__block-left-title animate__animated animate__fadeInUp"><?= $main_module_title ?? '' ?></h1>
            <?php endif; ?>
            <?php if (!empty($main_module_subtitle)) : ?>
                <h2 class="main-module__block-left-subtitle"><?= $main_module_subtitle ?? '' ?></h2>
            <?php endif; ?>
            <?php if (!empty($main_module_dignity_title)) : ?>
                <p class="dignity_title"><?= $main_module_dignity_title ?></p>
            <?php endif; ?>
            <?php if (!empty($main_module_dignity)) : ?>
                <div class="main-module__block-left-dignity">
                    <?php foreach ($main_module_dignity as $key => $item) : ?>
                        <div class="main-module__block-item animate__animated animate__fadeInLeft" data-wow-delay="<?=$key?>s">
                            <?php if (!empty($item['image'])) : ?>
                                <div class="main-module__block-left-dignity-image">
                                    <img class="style-svg" src="<?= $item['image']['url'] ?>" alt="">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($item['title'])) : ?>
                                <div class="main-module__block-left-dignity-title">
                                    <p><?= $item['title'] ?? '' ?></p>
                                    <p><?= $item['description'] ?? '' ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <button class="btn" id="how-work-callback" data-fancybox="dialog" data-src="#dialog-content">
                Оставить заявку
            </button>
            <div class="main-module__block-right">
                <?php if ($main_module_mode_page === 'media-pilons') : ?>
                    <div class="main-module__block-right-images"></div>
                <?php else: ?>
                    <div class="block-right_image">
                        <img loading="lazy" src="<?= $main_module_image['url'] ?? '' ?>" alt="image">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>