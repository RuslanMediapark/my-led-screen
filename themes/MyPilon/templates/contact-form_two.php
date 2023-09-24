<?php
$image = get_field('form_image_2', 7);
$title = get_field('form_title_2', 7);
$sub_title = get_field('form_sub_title_2', 7);
$form = get_field('form_2', 7);
?>
<section id="main-form-two" class="form-transparent-bg">
    <div class="container">
        <div class="main-form__wrapper animate__animated animate__backInLeft" data-wow-offset="0">
        <img class="form-bg" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/form-bg.png" alt="">
            <div class="main-form__content">
                <h3 class="main-form_title"><?= $title ?? '' ?></h3>
                <p class="main-form_subtitle"><?= $sub_title ?? '' ?></p>
                <?= $form ?? '' ?>
            </div>
            <img class="main-form-image" loading="lazy" src="<?= $image['url'] ?? '' ?>" alt="image">
        </div>
    </div>
</section>