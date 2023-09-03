<?php
$our_partners_title = get_field('our_partners_title');
$our_partners_gallery = get_field('our_partners_gallery');
?>

<section id="our_partners">
    <div class="container">
        <div class="our_partners__wrapper">
            <?php if (!empty($our_partners_title)): ?>
                <h2 class="our_partners__title">
                    <?= $our_partners_title ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($our_partners_gallery)) : ?>
                <div class="our_partners-gallery">
                    <?php foreach ($our_partners_gallery as $image) : ?>
                        <img loading="lazy" src="<?= $image['url'] ?>" alt="image">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>