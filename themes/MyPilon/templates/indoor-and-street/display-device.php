<?php
$display_device_title = get_field('display_device_title');
?>

<section id="display-device">
    <div class="container">
        <div class="display-device__block">
            <?php if (!empty($display_device_title)) : ?>
            <h2 class="display-device__block-title">
                <?= $display_device_title ?? '' ?>
            </h2>
            <?php endif; ?>
            <div class="display-device_show">
                <div class="display-device_show-one">
                    <div class="dashed-cursor screen">
                        <p>Экран</p>
                        <span class="dashed-line" style="border-color: <?= $colorOne;?>"></span>
                        <span class="cursor-circle"></span>
                    </div>
                    <div class="dashed-cursor module">
                        <p>Модуль</p>
                        <span class="dashed-line" style="border-color: <?= $colorOne;?>"></span>
                        <span class="cursor-circle"></span>
                    </div>
                    <div class="dashed-cursor cabinet">
                        <p>Кабтнет</p>
                        <span class="dashed-line" style="border-color: <?= $colorOne;?>"></span>
                        <span class="cursor-circle"></span>
                    </div>
                    <img src="../wp-content/themes/MyPilon/assets/images/led-1.png" alt="">
                </div>
                <div class="display-device_show-two">
                    <div class="dashed-cursor step">
                        <p>Шаг пикселя</p>
                        <div class="spets-lines">
                            <div class="spets-line"> <span class="dashed-line" style="border-color: <?= $colorOne;?>"></span>
                                <span class="cursor-circle"></span>
                            </div>

                            <div class="spets-line">
                                <span class="dashed-line" style="border-color: <?= $colorOne;?>"></span>
                                <span class="cursor-circle"></span>
                            </div>

                        </div>
                    </div>
                    <img src="../wp-content/themes/MyPilon/assets/images/led-2.png" alt="">
                    <p class="image-caprion" style="color: <?= $colorTwo?>;">Чем меньше шаг пикселя, тем выше <br> разрешение картинки</p>
                </div>
            </div>
        </div>
    </div>
</section>