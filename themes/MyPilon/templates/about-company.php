<?php
$about_company_image = get_field('about_company_image');
$about_company_text = get_field('about_company_text');
?>

<section id="about_company">
    <div class="container">
        <h2 class="about_company__title">О нас</h2>
        <div class="about_company__wrapper">
            <div class="left">
                <div class="about_company__text"><?= $about_company_text ?? '' ?></div>
            </div>
            <div class="right">
                <img loading="lazy" src="<?= $about_company_image['url'] ?? '' ?>" alt="image">
            </div>
        </div>
    </div>
</section>