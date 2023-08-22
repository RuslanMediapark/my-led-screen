<?php
$where_to_put_the_screens_title = get_field('where_to_put_the_screens_title');
$where_to_put_the_screens_screen_locations = get_field('where_to_put_the_screens_screen_locations');
?>

<section id="where_to_put">
    <div class="container">
        <div class="where_to_put__block">
            <?php if (!empty($where_to_put_the_screens_title)) : ?>
            <h2 class="where_to_put__block-title">
                <?= $where_to_put_the_screens_title ?? '' ?>
            </h2>
            <?php endif; ?>
            <?php if (!empty($where_to_put_the_screens_screen_locations)) : ?>
            <?php
            $count_locations = count($where_to_put_the_screens_screen_locations);
            $count_locations <= 4 ? $css_class = 'less_than_four' : $css_class = 'more_than_four';
            ?>
            <div class="where_to_put__block-locations <?= $css_class ?>">
                <?php foreach ($where_to_put_the_screens_screen_locations as $location) : ?>
                <div class="where_to_put__block-locations-item">
                <?php if (!empty($location['image'])) : ?>
                    <img src="<?= $location['image']['url'] ?>" alt="">
                    <?php if (!empty($location['title'])) : ?>
                    <h4 class="where_to_put__block-locations-title">
                        <?= $location['title'] ?? '' ?>
                    </h4>
                    <?php endif; ?>
                <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>