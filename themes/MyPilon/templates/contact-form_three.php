<?php
$title = get_field('form_title_3');
$form = get_field('form_3');
?>
<section id="main-form-three">
    <div class="container">
        <div class="main-form__wrapper">
            <div class="main-form__content">
                <h3 class="main-form_title"><?= $title ?? '' ?></h3>
                <?= $form ?? '' ?>
            </div>
        </div>
    </div>
</section>