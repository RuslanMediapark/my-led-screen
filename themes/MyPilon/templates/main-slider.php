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
        </div>
    </div>
    <img class="circle-two" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/circle-2.png" />
</section>