<?php
$image = get_field('form_image');
$title = get_field('form_title');
$sub_title = get_field('form_sub_title');
$form = get_field('form');
?>
<section id="main-form">
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