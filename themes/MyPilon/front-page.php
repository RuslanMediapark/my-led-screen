<?php
get_header();
$pageId = 0;
$pageColors = get_field('page_colors', get_the_ID());
$colorOne = $pageColors['color_one'];
$colorTwo = $pageColors['color_two'];
?>
<main>
<?php
include 'templates/main-slider.php';
include 'templates/contact-form.php';
include 'templates/led-screen-type.php';
include 'templates/projects-slider.php';
include 'templates/screen-placement.php';
include 'templates/contact-form_two.php';
include 'templates/our-partners.php';
include 'templates/solution-slider.php';
include 'templates/contact-form_three.php';
include 'templates/delivery-methods.php';
include 'templates/four-stages.php';
include 'templates/about-company.php';
include 'templates/product-quality.php';
?>
</main>
<?php get_footer(); ?>