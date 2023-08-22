<?php
get_header();
?>

<?
$pageColors = get_field('page_colors', get_the_ID());
$colorOne = $pageColors['color_one'];
$colorTwo = $pageColors['color_two'];

include 'templates/media-pylons/main-module.php';
include 'templates/contact-form.php';
include 'templates/indoor-and-street/mediapolis-is.php';
include 'templates/indoor-and-street/where-to-put-the-screens.php';
include 'templates/indoor-and-street/types_of_screens.php';
include 'templates/indoor-and-street/pixel-step.php';
include 'templates/media-pylons/additional-options.php';
include 'templates/projects-slider.php';
include 'templates/contact-form_two.php';
include 'templates/our-partners.php';

get_footer();