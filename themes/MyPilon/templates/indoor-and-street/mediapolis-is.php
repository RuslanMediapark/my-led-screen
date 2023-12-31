<?php
$mediapolis_title = get_field('mediapolis_title');
$mediapolis_first_row_dignity = get_field('mediapolis_first_row_dignity');
$mediapolis_image = get_field('mediapolis_image');
$mediapolis_second_row_dignity = get_field('mediapolis_second_row_dignity');
$mediapolis_display = get_field('mediapolis_display');
?>

<section id="mediapolis_is">
    <img class="transparent-two" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/transparent-two.png" />
    <div class="container">
        <div class="mediapolis_is__block">
            <?php if (!empty($mediapolis_title)) : ?>
            <h2 class="section-title animate__animated animate__fadeInUp" data-wow-offset="0">
                <?= $mediapolis_title ?? '' ?>
            </h2>
            <?php endif; ?>
            <div class="mediapolis_is__block_content">
            <?php if (!empty($mediapolis_first_row_dignity)) : ?>
            <div class="mediapolis_is__block-first-row-dignity">
                <?php foreach ($mediapolis_first_row_dignity as $key => $item) : ?>
                <div class="mediapolis_is__block-item animate__animated animate__lightSpeedInLeft" data-wow-offset="0" data-wow-delay="<?=$key?>s">
                    <?php if (!empty($item['image'])) : ?>
                    <div class="mediapolis_is__block-first-row-dignity-image">
                        <img src="<?= $item['image']['url'] ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="mediapolis_is__block-description">
                        <?php if (!empty($item['title'])) : ?>
                        <h4 class="mediapolis_is__block-title"><?= $item['title'] ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($item['subtitle'])) : ?>
                        <p class="mediapolis_is__block-subtitle"><?= $item['subtitle'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($mediapolis_image)) : ?>
            <div class="mediapolis_is__block-image">
                <img src="<?= $mediapolis_image['url'] ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if (!empty($mediapolis_second_row_dignity)) : ?>
            <div class="mediapolis_is__block-second-row-dignity">
                <?php foreach ($mediapolis_second_row_dignity as $key => $item) : ?>
                <div class="mediapolis_is__block-item animate__animated animate__lightSpeedInRight" data-wow-offset="0" data-wow-delay="<?=$key?>s">
                    <?php if (!empty($item['image'])) : ?>
                    <div class="mediapolis_is__block-second-row-dignity-image">
                        <img src="<?= $item['image']['url'] ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="mediapolis_is__block-description">
                        <?php if (!empty($item['title'])) : ?>
                        <h4 class="mediapolis_is__block-title"><?= $item['title'] ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($item['subtitle'])) : ?>
                        <p class="mediapolis_is__block-subtitle"><?= $item['subtitle'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>