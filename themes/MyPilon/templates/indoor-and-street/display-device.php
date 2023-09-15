<?php
$display_device_subtitle = get_field('display_device_subtitle');
$display_device_description = get_field('display_device_description');
$display_device_image = get_field('display_device_image');
?>

<section id="display-device">
    <div class="container">
        <div class="display-device__content">
            <div>
                <h3 class="display-device__title"><?= $display_device_subtitle; ?></h3>
                <div class="display-device__description"><?= $display_device_description; ?></div>
            </div>
            <div class="display-device__image">
                <img src="<?= $display_device_image;?>"/>
            </div>
        
        </div>
</section>