$(window).on('load', function () {
    $(".formsBody").height($(document).height());
	$(".trigger_popup_fricc").click(function(){
		$('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
})

$(document).ready(function () {
    // $(".headerSpacer").outerHeight($("header").outerHeight());

    if ($(window).width() < 769) {
        $(".c-red").insertAfter(".c-green");
        $(".wc").each(function () {
            $(this).addClass('active');
        })
    }

    $(".mobMenu").click(function () {
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
            $(".menu").slideUp('fast');
        } else {
            $(this).addClass('opened');
            $(".menu").slideDown('fast');
        }
    })

    if ($(".wc").length > 0) {
        $(".wc").each(function () {
            $(this).height($(this).width());
        })
        $(window).resize(function () {
            $(".wc").each(function () {
                $(this).height($(this).width());
            })
        });
    };
    $(".acc").click(function () {
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
            $(this).find('div').slideUp('fast');
        } else {
            $(this).parent().find('.opened').removeClass('opened');
            $(this).parent().find('.acc>div').slideUp('fast');
            $(this).addClass('opened');
            $(this).find('div').slideDown('fast');
        }
    })

    $(".revealer").click(function () {
        if ($(this).parent().find('input').attr('type') == 'password') {
            $(this).parent().find('input').attr('type', 'text');
        } else {
            $(this).parent().find('input').attr('type', 'password');
        };
    })

    $(".phoneCode").click(function () {
        if ($(".phoneCodes").hasClass('opened')) {
            $(".phoneCodes").slideUp('fast');
            $(".phoneCodes").removeClass('opened')
        } else {
            $(".phoneCodes").slideDown('fast');
            $(".phoneCodes").addClass('opened')
        }
    })

    $(".phoneCodes>div").click(function () {
        var flag = $(this).find('img').attr('src');
        var code = $(this).find('.code').text();
        $(".flag1 img").attr('src', flag);
        $(".code1").text(code);

        $(".phoneCodes").slideUp('fast');
        $(".phoneCodes").removeClass('opened')
    })

    if ($(window).width() < 769) {



        if ($(".datesSlider").length > 0) {
            $(".datesSlider").slick({
                rtl: true,
                dots: true,
                arrows: false,
                infinite: false,
            });
        }
        if ($(".stagesSlider").length > 0) {
            $(".stagesSlider").slick({
                rtl: true,
                dots: true,
                arrows: false,
                infinite: false,
            });
        }
        if ($(".goalsSlider").length > 0) {
            $(".goalsSlider").slick({
                rtl: true,
                dots: true,
                arrows: false,
                infinite: false,
            });
        }
        $(".comps").prepend($('.comps a:last-child'))
    }
});

$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            if ($(".mobMenu").hasClass('opened')) {
                $(".mobMenu").click();
            }
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 120
                }, 1000);
                return false;
            }
        }
    });
});

// $(window).scroll(function () {
//     initHeaderSticky();
// });
function initHeaderSticky() {
    var thershold = 100;
    st = $(window).scrollTop();
    if (st >= thershold) {
        $("header").addClass('sticky');
    } else {
        $("header").removeClass('sticky');
    }
}

function validate(form) {
    $(form).find('input[req]').each(function () {
        if ($(this).val() == '') {
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });
    return $(form).find('.error').length > 0 ? false : true;
}
