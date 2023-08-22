<?php
$blocks_placement = get_field('blocks_placement');
?>

<section id="screen-placement">
    <?php if (!empty($blocks_placement)) : ?>
    <?php foreach ($blocks_placement as $block) : ?>
    <?php
      $block['position_image'] === 'left' ? $position = 'left' : $position = 'right';
      ?>
    <div class="screen-placement__block <?= $position ?>">
        <div class="container">
            <?php if (!empty($block['image'])) ?>
            <div class="screen-placement__block-image">
                <img src="<?= $block['image']['url'] ?>" alt="">
            </div>
            <div class="screen-placement__block-info">
                <?php if (!empty($block['title'])) : ?>
                <h2 class="screen-placement__block-info-title"><?= $block['title'] ?></h2>
                <?php endif; ?>
                <?php if (!empty($block['text'])) : ?>
                <p class="screen-placement__block-info-text"><?= $block['text'] ?></p>
                <?php endif; ?>
                <?php if (!empty($block['examples_images'])) : ?>
                <div class="screen-placement__block-info-example-text"> ПРИМЕРЫ:</div>
                <div class="screen-placement__block-info-example-wrapper">
                    <?php foreach ($block['examples_images'] as $image) : ?>
                    <div class="screen-placement__block-info-wrapper-image">
                        <img src="<?= $image['url'] ?>" alt="">
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if (!empty($block['link'])) : ?>
                <a class="btn screen-placement__block-info-link" href="<?= $block['link']['url'] ?>"
                   
                    >
                    ПОДРОБНЕЕ
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</section>