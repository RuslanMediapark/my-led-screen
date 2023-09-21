<?php
$project_slider_title = get_field('project_slider_title');
$project_slider_images = get_field('project_slider_images');
?>

<section id="project_slider">
    <div class="container">
        <div class="project_slider-block">
            <?php if (!empty($project_slider_title)) : ?>
            <h2 class="section-title animate__animated animate__fadeInUp"><?= $project_slider_title ?? '' ?> </h2>
            <?php endif; ?>
            <?php if (!empty($project_slider_images)) : ?>
            <div class="project_slider-block">
                <div class="swiper-container project-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($project_slider_images as $project_slide) : ?>
                        <div class="swiper-slide">
                            <img src="<?= $project_slide['url'] ?? '' ?>" alt="">
                            <div class="description">
                                <h6><?= $project_slide['caption'] ?? '' ?></h6>
                                <p><?= $project_slide['description'] ?? '' ?></p>
                            </div>
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