<?php
$mediapolis_title = get_field('mediapolis_title');
$mediapolis_first_row_dignity = get_field('mediapolis_first_row_dignity');
$mediapolis_image = get_field('mediapolis_image');
$mediapolis_second_row_dignity = get_field('mediapolis_second_row_dignity');
$mediapolis_display = get_field('mediapolis_display');
?>

<section id="mediapolis_is">
    <div class="container">
        <div class="mediapolis_is__block <?= $mediapolis_display ?>">
            <?php if (!empty($mediapolis_title)) : ?>
            <h2 class="mediapolis_is__main-title">
                <?= $mediapolis_title ?? '' ?>
            </h2>
            <?php endif; ?>
            <div class="mediapolis_is__block_content">
            <?php if (!empty($mediapolis_first_row_dignity)) : ?>
            <div class="mediapolis_is__block-first-row-dignity">
                <?php foreach ($mediapolis_first_row_dignity as $item) : ?>
                <div class="mediapolis_is__block-item">
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
                <?php foreach ($mediapolis_second_row_dignity as $item) : ?>
                <div class="mediapolis_is__block-item">
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