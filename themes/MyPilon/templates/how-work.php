<?php
$how_work_image = get_field('how_work_image', 7);
$how_work_title = get_field('how_work_title', 7);
$how_work_subtitle = get_field('how_work_subtitle', 7);
$how_work_blocks = get_field('how_work_blocks', 7);
?>

<section id="how-work">
    <img class="item-three" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/item-three.png" alt="">

    <div class="container">
        <div class="how-work__wrapper">
            <div class="left">
                <img class="how-work__image" loading="lazy" src="<?= $how_work_image['url'] ?? '' ?>" alt="image">
            </div>
            <div class="right">
                <h2 class="how-work__title"><?= $how_work_title ?? '' ?></h2>
                <p class="how-work__subtitle"><?= $how_work_subtitle ?? '' ?></p>
                <?php if (!empty($how_work_blocks)) : ?>
                    <div class="how-work__blocks">
                        <?php foreach ($how_work_blocks as $key => $block) : ?>
                            <div class="how-work__block">
                                <p class="block-number"><?= $key + 1 ?></p>
                                <div class="block-content">
                                    <p class="block-content__title"><?= $block['block_title'] ?? '' ?></p>
                                    <p class="block-content__subtitle"><?= $block['block_subtitle'] ?? '' ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <button class="btn" id="how-work-callback" data-fancybox="dialog" data-src="#dialog-content">
                    Оставить заявку
                </button>
            </div>
        </div>
    </div>
</section>