<?php
$our_partners_title = get_field('our_partners_title');
$our_partners_gallery = get_field('our_partners_gallery');
?>

<section id="our_partners">
    <div class="container">
        <?php if (!empty($our_partners_title)): ?>
        <h2 class="our_partners__title">
            <?= $our_partners_title ?? '' ?>
        </h2>
        <?php endif; ?>
        <?php if (!empty($our_partners_gallery)) : ?>
        <div class="swiper-container our-partner-slider">
            <div class="swiper-wrapper">
                <?php foreach ($our_partners_gallery as $image) : ?>
                <div class="our_partners__gallery_image swiper-slide">
                    <img src="<?= $image['url'] ?>" alt="">
                </div>
                <?php endforeach; ?>
            </div>
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
        <?php endif; ?>
    </div>
</section>