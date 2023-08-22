<?php

$background_image = get_field('background_image_2');

if (!empty($background_image)) {
  $image = $background_image['url'];
}

$title = get_field('form_title_2');
$form = get_field('form_2');

?>
<section id="main-form-two">
    <div class="container">
        <svg id="cross-svg" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 7.59961L32.231 25.6308M25.6311 0.999724L7.59989 32.2307" stroke="<?= $colorOne;?>"
                stroke-width="4" />
        </svg>

        <div class="main-form__block"
            style="background-image: linear-gradient(94.27deg, <?= $colorOne;?>f2 0%, <?= $colorTwo; ?>f2 100%), url(<?= $image;?>);">
            <?php if (!empty($title)) : ?>

            <svg id="circles" width="70" height="43" viewBox="0 0 70 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle r="2.43671" transform="matrix(1 0 0 -1 2.43671 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 2.43671 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 2.43671 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 2.43671 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 2.43671 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 39.6519 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 39.6519 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 39.6519 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 39.6519 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 39.6519 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 11.7405 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 11.7405 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 11.7405 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 11.7405 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 11.7405 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 48.9557 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 48.9557 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 48.9557 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 48.9557 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 48.9557 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 21.0443 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 21.0443 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 21.0443 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 21.0443 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 21.0443 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 58.2595 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 58.2595 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 58.2595 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 58.2595 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 58.2595 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 30.3481 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 30.3481 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 30.3481 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 30.3481 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 30.3481 39.6519)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 67.5633 2.4367)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 67.5633 11.7405)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 67.5633 21.0443)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 67.5633 30.3481)" fill="white" fill-opacity="0.2" />
                <circle r="2.43671" transform="matrix(1 0 0 -1 67.5633 39.6519)" fill="white" fill-opacity="0.2" />
            </svg>

            <div class="main-form__block-title"><?= $title ?? '' ?></div>
            <?php endif ?>
            <?php if (!empty($form)) : ?>
            <div class="main-form__block-form"><?= $form ?? '' ?></div>
            <?php endif ?>

            <svg id="first-bg-svg" width="474" height="300" viewBox="0 0 474 300" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M227.696 -264.059C280.952 -257.917 338.162 -266.545 382.001 -235.688C426.132 -204.626 447.266 -151.339 461.712 -99.3418C475.636 -49.226 479.035 3.67624 462.172 52.8808C445.49 101.557 404.488 133.924 369 171.184C324.088 218.337 292.64 294.286 227.696 299.062C163.084 303.814 116.576 238.623 70.438 193.141C30.8197 154.086 -7.81078 111.252 -18.255 56.609C-28.0442 5.39325 6.10664 -40.9047 15.9146 -92.1169C27.7889 -154.118 -3.84445 -234.747 45.165 -274.537C93.6653 -313.914 165.634 -271.217 227.696 -264.059Z"
                    fill="url(#paint2_linear)" />
                <defs>
                    <linearGradient id="paint2_linear" x1="367.5" y1="205.5" x2="3.50005" y2="-336.5"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="<?= $colorOne;?>0d" stop-opacity="0.05" />
                        <stop offset="1" stop-color="<?= $colorOne;?>" />
                    </linearGradient>
                </defs>
            </svg>

            <svg id="second-bg-svg" width="370" height="200" viewBox="0 0 370 200" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M247.696 26.9409C300.952 33.0831 358.162 24.455 402.001 55.3116C446.132 86.3739 467.266 139.661 481.712 191.658C495.636 241.774 499.035 294.676 482.172 343.881C465.49 392.557 424.488 424.924 389 462.184C344.088 509.337 312.64 585.286 247.696 590.062C183.084 594.814 136.576 529.623 90.438 484.141C50.8197 445.086 12.1892 402.252 1.74499 347.609C-8.04425 296.393 26.1066 250.095 35.9146 198.883C47.7889 136.882 16.1556 56.2532 65.165 16.4631C113.665 -22.9137 185.634 19.7831 247.696 26.9409Z"
                    fill="url(#paint3_linear)" />
                <defs>
                    <linearGradient id="paint3_linear" x1="43" y1="6.04774e-06" x2="390.5" y2="285"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="<?= $colorTwo; ?>0d" stop-opacity="0" />
                        <stop offset="1" stop-color="<?= $colorTwo; ?>" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
</section>