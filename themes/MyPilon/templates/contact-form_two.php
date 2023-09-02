<?php
$image = get_field('form_image_2');
$title = get_field('form_title_2');
$sub_title = get_field('form_sub_title_2');
$form = get_field('form_2');
?>
<section id="main-form-two">
    <div class="container">
        <div class="main-form__wrapper">
            <div class="main-form__content">
                <h3 class="main-form_title"><?= $title ?? '' ?></h3>
                <p class="main-form_subtitle"><?= $sub_title ?? '' ?></p>
                <?= $form ?? '' ?>
            </div>
            <img class="main-form-image" loading="lazy" src="<?= $image['url'] ?? '' ?>" alt="image">
        </div>
    </div>
</section>