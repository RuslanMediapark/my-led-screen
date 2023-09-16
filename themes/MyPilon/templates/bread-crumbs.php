<section class="bread-crumbs">
    <?php if (!$mainPage) : ?>
        <div class="container">
            <div class="bread-crumbs__content">
                Главная - <span><?= $pageName ?? '' ?></span>
            </div>
        </div>
    <?php endif; ?>
</section>