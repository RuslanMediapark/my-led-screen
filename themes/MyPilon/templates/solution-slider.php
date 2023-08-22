<?php
$solution_slider_title = get_field('solutions_slider_title');
$solution_slider_description = get_field('solutions_description');
$solution_slider_subtitle = get_field('solutions_subtitle');
$solution_slider_images = get_field('solutions_slider_images');
?>

<section id="solution_slider">
    <div class="container">
        <div class="solution_slider-block">
            <?php if (!empty($solution_slider_title)) : ?>
            <h2 class="solution_slider-block-title"><?= $solution_slider_title ?? '' ?> </h2>
            <?php endif; ?>
            <?php if (!empty($solution_slider_description)) : ?>
            <p class="solution_slider-block-description"><?= $solution_slider_description ?? '' ?> </p>
            <?php endif; ?>
            <?php if (!empty($solution_slider_subtitle)) : ?>
            <h3 class="solution_slider-block-subtitle"><?= $solution_slider_subtitle ?? '' ?> </h3>
            <?php endif; ?>
            <?php if ($solution_slider_images) : ?>
            <div class="solution_slider-block">
                <div class="swiper-container solution-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($solution_slider_images as $image) : ?>
                        <div class="swiper-slide">
                            <img src="<?= $image['url'] ?? '' ?>" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next">
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                    <div class="swiper-pagination"></div>

                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>