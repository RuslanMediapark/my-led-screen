<?
$calc_title = get_field('calc_title');
$calc_image = get_field('calc_image');
$select_type_screen = get_field('select_type_screen');
$select_pixel_step = get_field('select_pixel_step');
$select_garancy = get_field('select_garancy');
$select_type_control = get_field('select_type_control');
$select_additional_params = get_field('select_additional_params');
$select_install_type = get_field('select_install_type');
?>

<section id="calculator">
    <div class="container">
        <h2 class="calulator_title animate__animated animate__fadeInUp" data-wow-offset="0"><?=$calc_title?></h2>
        <div class="calulator_content">
        <div class="calculator_image">
                <img src="<?=$calc_image;?>" alt="calculator">
            </div>
            <form action="">
                <h3>Конфигуратор экрана</h3>
                <div class="form-control">
                    <h4 for="screen_type">Тип экрана</h4>
                    <select name="screen_type" true-name="type-screen">
                        <? foreach($select_type_screen as $type):?>
                        <option value="<?=$type;?>"><?=$type?></option>
                        <? endforeach;?>
                    </select>
                </div>
                <div class="form-control">
                    <h4 for="screen_type">Шаг пикселя</h4>
                    <select name="screen_type" true-name="pixel-step">
                        <? foreach($select_pixel_step as $pixel):?>
                        <option value="<?=$pixel;?>"><?=$pixel?></option>
                        <? endforeach;?>
                    </select>
                </div>
                <div class="form-control">
                    <h4 for="screen_type">Ширина (мм)</h4>
                    <input type="range" id="width-range" true-name="width" min="640" max="81920" value="640" step="320"
                        oninput="this.nextElementSibling.value = this.value">
                    <output class="width-value">10240</output>

                </div>
                <div class="form-control">
                    <h4 for="screen_type">Высота (мм)</h4>
                    <input type="range" id="height-range" true-name="height" min="640" max="81920" value="640" step="160"
                        oninput="this.nextElementSibling.value = this.value">
                    <output class="height-value">10240</output>
                </div>

                <div class="form-control">
                    <h4 for="screen_type">Другой размер</h4>
                    <input type="text" id="other" true-name="other-size" placeholder="ШxВ (мм)">
                </div>

                <div class="form-control">
                    <h4 for="screen_type">Гарантия</h4>
                    <select name="screen_type" true-name="guarantee">
                        <? foreach($select_garancy as $garancy):?>
                        <option value="<?=$garancy;?>"><?=$garancy?></option>
                        <? endforeach;?>
                    </select>
                </div>
                <div class="form-control">
                    <h4 for="screen_type">Управление</h4>
                    <select name="screen_type" true-name="control">
                        <? foreach($select_type_control as $control):?>
                        <option value="<?=$control;?>"><?=$control?></option>
                        <? endforeach;?>
                    </select>
                </div>
                <div class="form-control">
                    <h4 for="screen_type">Монтаж</h4>
                    <select name="screen_type" true-name="mounting">
                        <? foreach($select_install_type as $install):?>
                        <option value="<?=$install;?>"><?=$install?></option>
                        <? endforeach;?>
                    </select>
                </div>
                <div class="form-control full">
                    <h4 for="screen_type">Доп. параметры</h4>
                    <div class="checkbox-group">

                        <? foreach($select_additional_params as $params):?>
                        <div class="checkbox-item">
                            <input type="checkbox" true-name="options" value="<?=$params?>" name="group1[]" />
                            <span class="checkmark"></span>
                            <label><?=$params?></label>
                        </div>
                        <? endforeach;?>
                    </div>
                </div>
                <div class="btn full calc-submit" data-fancybox data-src="#lead-data-form">РАССЧИТАТЬ</div>

            </form>

        </div>
        <div class="hidden-form">
                <?= do_shortcode('[contact-form-7 id="be78a81" title="Калькулятор"]')?>
            </div>
    </div>
	
	    <div id="lead-data-form" style="display: none; background-image: linear-gradient(94.27deg, <?= $colorOne;?>f2 0%, <?= $colorTwo; ?>f2 100%), url(<?= $image;?>);">
        <h3>Введите Ваши данные</h3>
        <form>
            <div class="form-data">
                <input type="text"  placeholder="Ваше имя" name="f-calc-user" true-name="calc-name">
            </div>
            <div class="form-data">
                <input type="tel" placeholder="Ваш телефон" name="f-calc-phone" true-name="calc-phone">
            </div>
            <div class="form-data">
                <input type="submit" class="send-calc-form" value="Отправить">
            </div>
        </form>
    </div>
</section>