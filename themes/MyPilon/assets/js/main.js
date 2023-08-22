const colorOne = $('body').attr('data-color-one');
const colorTwo = $('body').attr('data-color-two');
const footerColor = $('body').attr('data-footer-color');

$(document).ready(function () {

    new Swiper(".hero-slider", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            clickable: true,
            el: ".swiper-pagination",
        },
    });

    new Swiper(".project-slider", {
        slidesPerView: 'auto',
        spaceBetween: 36,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            clickable: true,
            el: ".swiper-pagination",
        },
    });

    new Swiper(".solution-slider", {
        slidesPerView: 'auto',
        spaceBetween: 36,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            clickable: true,
            el: ".swiper-pagination",
        },
    });

    new Swiper(".our-partner-slider", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            639: {
                slidesPerView: 2
            },
            959: {
                slidesPerView: 4
            }
        }
    });

    $('select').niceSelect();

    $("input[type='tel']").keypress(function (e) {
        var keycode = e.keyCode ? e.keyCode : e.which;
        if (/[^\d\b+ ()-]/.test(String.fromCharCode(keycode))) {
            e.preventDefault();
        }
    });

    $('input[type="tel"]').mask('+7 (999) 999-9999');

    $('.current_page_item a').css('color', colorOne);
    $(':root').css('--swiper-theme-color', colorTwo);
    $(':root').css('--color-one', colorOne);
    $(':root').css('--color-two', colorTwo);
    $(':root').css('--footer-color', footerColor);

    $('.video-overlay svg').click(function () {
        $(this).parent().hide(600);
        $('.about_company__media-video video')[0].play()
    })

    if ($('.main-module__block-right-images').length) {
        $.get(`${window.location.origin}/wp-json/acf/v3/pages/13`, function (data) {
            const dataImages = data.acf.main_module_gallery_image;
            const formatedImages = dataImages.map((item) => item.url);
            $('.main-module__block-right-images').spritespin({
                source: formatedImages,
                width: 335,
                height: 594,
                responsive: true,
                frameTime: 40,
                plugins: [
                    '360',
                    'wheel',
                    'drag',
                ]
                // reverse interaction direction
            });
        })
    }

    // $('select[name="screen_type"]').change(function (e) {
    //     if (e.target.value === 'Модульный') {
    //         $('#width-range').attr('step', 320);
    //         $('#height-range').attr('step', 160);
    //     } else {
    //         $('#width-range').attr('step', 640);
    //         $('#height-range').attr('step', 640);
    //     }
    // })
    $('input[type=range]').on('input', function (e) {
        var min = e.target.min,
            max = e.target.max,
            val = e.target.value;

        $(e.target).css({
            'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
        });
    }).trigger('input');

    $('.hamburher').click(function() {
        $('.overview').show();
        $('.side-menu').addClass('show')
    })

    $('#close-menu').click(function() {
        $('.side-menu').removeClass('show')
        setTimeout(() => {
            $('.overview').hide();

        }, 500)
    })

    setTimeout(() => {

        const svgGradient = $('.style-svg linearGradient');
        const svgPaths = $('.style-svg path');
        svgPaths.map((_, item) => {
            if ($(item).attr('fill').search('url') === -1) {
                $(item).attr('fill', colorOne)
            }

        })
        svgGradient.map((_, item) => {
            const stop = $(item).children('stop');

            $(stop[0]).attr('stop-color', colorOne);
            $(stop[1]).attr('stop-color', colorTwo);
        })

    }, 1000)

    $('.calulator_content input, .calulator_content select, #lead-data-form input').change(function() {
        const trueName = $(this).attr('true-name');
        $(`[name="${trueName}"]`).val($(this).val())
      })
      let values = [];

      function initForm() {
        const fields = $('.calulator_content form input, .calulator_content form select');
        fields.map((_,item) => {
            const initTrueName = $(item).attr('true-name');
            $(`[name="${initTrueName}"]`).val($(item).val())
        })
      }

      initForm();
      $('[true-name="options"]').change(function() {

          $(this).attr("checked", !$(this).attr("checked"));
          values.push($(this).val())
          if($(this).attr("checked") !== 'checked') {
             
            const uniq = values.filter(item => item !== $(this).val())
            values = uniq;
          }
        const trueName = $(this).attr('true-name');
        $(`[name="${trueName}"]`).val(values)
      })

      $('.send-calc-form').on('click',(function(e) {
        //   e.preventDefault();
          $('[value="calc-submit"]').click();
          alert('Форма отправлена')
      }))
})

$(window).ready(function () {
    setTimeout(() => {

        const svgGradient = $('.style-svg linearGradient');
        const svgPaths = $('.style-svg path');
        svgPaths.map((_, item) => {
            if ($(item).attr('fill').search('url') === -1) {
                $(item).attr('fill', colorOne)
            }

        })
        svgGradient.map((_, item) => {
            const stop = $(item).children('stop');

            $(stop[0]).attr('stop-color', colorOne);
            $(stop[1]).attr('stop-color', colorTwo);
        })

    }, 200)
})