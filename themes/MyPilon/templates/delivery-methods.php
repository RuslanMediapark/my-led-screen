<?php
$delivery_title = get_field('delivery_title');
$delivery_blocks = get_field('delivery_blocks');
$delivery_background = get_field('delivery_background');
?>

<section id="delivery-methods">
<img class="delivery-bg" src="<? bloginfo('template_url'); ?>/assets/images/bg-items/delivery-bg.png" alt="">
    <div class="container">
        <?php if (!empty($delivery_title)): ?>
            <h2 class="delivery-methods__title">
                <?= $delivery_title ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($delivery_blocks)) : ?>
            <div class="delivery-methods__blocks">
                <?php foreach ($delivery_blocks as $block) : ?>
                    <div class="delivery-methods__block">
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