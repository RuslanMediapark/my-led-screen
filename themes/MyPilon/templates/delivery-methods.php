<?php
$delivery_title = get_field('delivery_title', 7);
$delivery_blocks = get_field('delivery_blocks', 7);
$delivery_background = get_field('delivery_background', 7);
?>

<section id="delivery-methods">
<img class="delivery-bg" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/delivery-bg.png" alt="">
    <div class="container">
        <?php if (!empty($delivery_title)): ?>
            <h2 class="section-title animate__animated animate__fadeInUp" data-wow-offset="0">
                <?= $delivery_title ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($delivery_blocks)) : ?>
            <div class="delivery-methods__blocks">
                <?php foreach ($delivery_blocks as $block) : ?>
                    <div class="delivery-methods__block animate__animated animate__backInRight" data-wow-offset="0">
                        <?php if ($block['image']) : ?>
                        <div class="delivery-methods__block-image">
                            <img src="<?= $block['image']['url'] ?>" alt="">
                        </div>
                        <div class="delivery-methods__info">
                            <?php endif; ?>
                            <?php if ($block['title']) : ?>
                                <h3 class="delivery-methods__block-title">
                                    <?= $block['title'] ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($block['text']) : ?>
                                <p class="delivery-methods__block-text">
                                    <?= $block['text'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>