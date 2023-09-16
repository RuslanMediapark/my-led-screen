<?php
$hero_title = get_field('hero_title');
$hero_sub_title = get_field('hero_sub_title');
$hero_video_url = get_field('hero_video_url');
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
            <div class="hero-video">
                <iframe width="100%" height="560" src="<?= $hero_video_url ?>" style="border-radius: 20px; z-index: 10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <img class="circle-two" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/circle-2.png" />
</section>