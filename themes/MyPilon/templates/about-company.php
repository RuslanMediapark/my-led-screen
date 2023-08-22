<?php
$about_company_title = get_field('about_company_title');
$about_company_video = get_field('about_company_video');
$about_company_caption_video = get_field('about_company_caption_video');
$about_company_blocks = get_field('about_company_blocks');
?>

<section id="about_company">
    <div class="container">
        <?php if (!empty($about_company_title)): ?>
        <h2 class="about_company__title">
            <?= $about_company_title ?? '' ?>
        </h2>
        <?php endif; ?>
        <?php if (!empty($about_company_blocks)) : ?>
        <div class="about_company__info">
            <div class="about_company__blocks">
                <?php foreach ($about_company_blocks as $block) : ?>
                <div class="about_company__block">
                    <?php if ($block['title']) : ?>
                    <h3 class="about_company__block-title">
                        <?= $block['title'] ?>
                    </h3>
                    <?php endif; ?>
                    <?php if ($block['text']) : ?>
                    <p class="about_company__block-text">
                        <?= $block['text'] ?>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php if (!empty($about_company_video)) : ?>
            <div class="about_company__media">
                <div class="about_company__media-video">
                    <div class="video-overlay" style="background: linear-gradient(94.27deg, <?=$colorOne?>b3 0%, <?=$colorTwo?>b3 100%);">
                        <svg width="75" height="88" viewBox="0 0 75 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M75 44L-4.07833e-06 87.3013L-2.92811e-07 0.698727L75 44Z" fill="white" />
                        </svg>

                    </div>
                    <video controls="controls" style="box-shadow: 0px 12px 32px -12px <?= $colorTwo?>80;">
                        <source src="<?= $about_company_video ?>" type='video/mp4'>
                    </video>

                </div>
                <?php if (!empty($about_company_caption_video)) : ?>
                <p class="about_company__media-caption">
                    <?= $about_company_caption_video ?? '' ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>