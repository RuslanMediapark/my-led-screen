<?php
get_header();
$pageColors = get_field('page_colors', get_the_ID());
$colorOne = $pageColors['color_one'];
$colorTwo = $pageColors['color_two'];

include 'templates/main-slider.php';
include 'templates/indoor-and-street/mediapolis-is.php';
include 'templates/solution-slider.php';
include 'templates/contact-form.php';
include 'templates/indoor-and-street/display-device.php';
include 'templates/indoor-and-street/screens_size.php';
include 'templates/indoor-and-street/calculator-form.php';
include 'templates/indoor-and-street/types_of_screens.php';
include 'templates/indoor-and-street/pixel-step.php';
include 'templates/projects-slider.php';
include 'templates/why-me.php';
include 'templates/contact-form_two.php';
include 'templates/how-work.php';
include 'templates/delivery-methods.php';
include 'templates/other-products.php';
include 'templates/contact-form_question.php';

get_footer();



