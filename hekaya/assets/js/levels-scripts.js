let app = new Vue({
    el: '#app',
    data: function () {
        return {
            activeMenu: 1,
            showQuestions: false,
        }
       
    },
    watch: {
        activeMenu: function (val) {
            this.showQuestions = false;
            setTimeout(function () {
                setmenuHeight();
            }, 400)
        }
    }
})

$(document).ready(function () {
    setmenuHeight();
    $(".mobMenu").click(function () {
        if ($(this).hasClass('opened')) {
                        $(this).addClass('opened');
                        $(".levelsMenu").slideDown('fast');
                        $(".levelsMenu").css('display','block');
        } else {
                        $(this).removeClass('opened');
                        $(".levelsMenu").slideUp('fast');
                        $(".levelsMenu").css('display','none');
        }
    });

    $(".check i").click(function () {

    })


    document.getElementById('vid').addEventListener('ended', vidHandler, false);
 
    function vidHandler(e) {
        $(e.target).parents(".video_div").find(".solve_btn").show()
        $("#solve_btn1").slideDown();
        $(e.target).parents(".video_div").addClass("inActive");
    }
})
$(document).on('click', ".check i", function () {
    $(this).parent().find('.active').removeClass('active');
    if (!$(this).hasClass('active')) {
        $(this).addClass('active');
    }
});

function update()
{
$user_id=document.getElementById('user_id').value;
 xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "update/"+$user_id,true);
xmlhttp.send();
}
function setmenuHeight() {
    if ($(window).width() > 768) {
        $(".levelsMenu").height('');
        var headerHeight = $("header").height();
        $(".levelsMenu").height($(document).height() - headerHeight - 40);
    } else {
        if ($(".mobMenu").hasClass('opened')) {
            $(".mobMenu").removeClass('opened');
            $(".levelsMenu").slideUp('fast');
        }

        if ($("#mob_dates").length > 0) {
            if (!$("#mob_dates").hasClass('.slick-initialized')) {
                $("#mob_dates").slick({
                    rtl: true,
                    dots: true,
                    arrows: false,
                    infinite: false,
                });
            }
        }
    }
}
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لا يمكنك تجاهل الاجابة على سؤال");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("SELECT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لا يمكنك تجاهل الاجابة على سؤال");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
});
