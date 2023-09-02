<?php
$title = get_field('form_title_question');
$image = get_field('form_image_question');
$sub_title = get_field('form_sub_title_question');
$form = get_field('form_question');
?>
<section id="main-form-question">
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