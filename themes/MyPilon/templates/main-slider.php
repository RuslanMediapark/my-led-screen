<?php
$hero_title = get_field('hero_title');
$hero_sub_title = get_field('hero_sub_title');
$hero_gallery = get_field('hero_gallery');
$hero_dignity = get_field('hero_dignity');
?>

<section id="hero">
    <div class="container">
        <div class="hero__block">
            <?php if ($hero_title) : ?>
            <h1 class="hero__block-title">
                <?= $hero_title ?? '' ?>
            </h1>
            <?php endif; ?>
            <?php if ($hero_sub_title) : ?>
            <h2 class="hero__block-subtitle">
                <?= $hero_sub_title ?? '' ?>
            </h2>
            <?php endif; ?>
            <?php if ($hero_gallery) : ?>
            <div class="hero__block-gallery">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($hero_gallery as $image) : ?>
                        <div class="swiper-slide">
                            <img src="<?= $image['url'] ?? '' ?>" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.999999 1L9 8.5L1 16" stroke="#171631" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L1 8.5L9 1" stroke="#171631" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </div>
            <?php endif; ?>
            <?php if ($hero_dignity) : ?>
            <div class="hero__block-dignity">
                <?php foreach ($hero_dignity as $dignity) : ?>
                <div class="hero__block-dignity-item">
                    <?php if ($dignity['image']) : ?>
                    <div class="hero__block-dignity-item-image">
                        <img class="style-svg" src="<?= $dignity['image']['url'] ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <?php if ($dignity['title']) : ?>
                    <div class="hero__block-dignity-item-title">
                        <?= $dignity['title'] ?? '' ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="hero__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="22" viewBox="0 0 39 22" fill="none">
                    <path d="M2 2C19.322 19.4309 20.8842 21.0029 19.5 19.61L37 2" stroke="#180C00" stroke-width="4" />
                </svg>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>