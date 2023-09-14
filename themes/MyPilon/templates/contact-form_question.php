<?php
$title = get_field('form_title_question', 7);
$image = get_field('form_image_question', 7);
$sub_title = get_field('form_sub_title_question', 7);
$form = get_field('form_question', 7);
?>
<section id="main-form-question">
<img class="delivery-bg" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/transparent-two.png" alt="">
    <div class="container">
        <div class="main-form-question__wrapper">
            <div class="left">
                <img class=form-question__image loading="lazy" src="<?= $image['url'] ?? '' ?>" alt="image">
            </div>
            <div class="right">
                <h3 class="question-headline"> <?= $title ?? '' ?> </h3>
                <p class="question-sub-title"> <?= $sub_title ?? '' ?> </p>
                <?= $form ?? '' ?>
            </div>
        </div>
    </div>
</section>