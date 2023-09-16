<?php
$otherProductsTitle = get_field('other_products_title');
$otherProducts = get_field('other_products');
?>

<section id="other-products">

    <div class="container">
        <h2 class="section-title"><?= $otherProductsTitle ?? '' ?></h2>
        <div class="other-products__wrapper">
        <?php if (!empty($otherProducts)) : ?>
            <div class="other-products__blocks">
                <?php foreach ($otherProducts as $block) : ?>
                    <div class="other-products__block">
                        <?php if ($block['image']) : ?>
                        <div class="other-products__block-image">
                            <img src="<?= $block['image'] ?>" alt="">
                        </div>
                        <div class="other-products__info">
                            <?php endif; ?>
                            <?php if ($block['subtitle']) : ?>
                                <p class="other-products__block-title">
                                    <?= $block['subtitle'] ?>
                            </p>
                            <?php endif; ?>
                            <?php if ($block['description']) : ?>
                                <p class="other-products__block-text">
                                    <?= $block['description'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($block['link']) : ?>
                                <a href="<?= $block['link'] ?>" class="other-products__block-link">
                                    Подробнее
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>    
        </div>
    </div>
</section>