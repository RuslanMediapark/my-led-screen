<?php
$title = get_field('form_title_3');
$form = get_field('form_3');
?>
<section id="main-form-three" class="form-transparent-bg">
    <div class="container">
        <div class="main-form__wrapper animate__animated animate__backInRight">
        <img class="form-bg" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/form-bg.png" alt="">
            <div class="main-form__content">
                <h3 class="main-form_title"><?= $title ?? '' ?></h3>
                <?= $form ?? '' ?>
            </div>
        </div>
    </div>
</section>