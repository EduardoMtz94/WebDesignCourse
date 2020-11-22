$(document).ready(function () {

    if ($(window).width() <= 800) {
        return;
    }

    $(window).scroll(function (){
        var scroll = $(window).scrollTop();
        
        $('header .textos').css({
            'transform': 'translate(0px,'+ scroll/2 +'%)'
        });
        
        $('.acerca-de article').css({
            'transform': 'translate(0px, -'+ scroll/4 +'%)'
        });

        if (scroll >= $('#platillos').offset().top){
            $('#platillos').animate({
                opacity: 1,
                marginLeft: 0
            }, 1500);
        }

        if (scroll >= ($('#galeria').offset().top - 500 )){
            $('#galeria').animate({
                opacity: 1,
                marginRight: 0
            }, 1500);
        }

        if (scroll >= ($('#ubicacion').offset().top - 500 )){
            $('#ubicacion').animate({
                opacity: 1,
                padding: '60px 0'
            }, 1500);
        }
    });

    $(window).resize(function () {
        if ($(window).width() <= 800) {
            $('.acerca-de article').css({
                'transform': 'translate(0px, 0px)'
            });
        }
    });
});