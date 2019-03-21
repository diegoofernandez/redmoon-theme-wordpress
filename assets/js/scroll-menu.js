jQuery(document).ready(function($){

    $(document).ready(function(){

        $(window).scroll(function(){
            if($(this).scrollTop() > 100){
                $('nav').css({
                    'background': 'rgba(238, 82, 83,1.0)'
                });
            }else{
                $('nav').css({
                    'background': 'transparent'
                });
            }
        });

    });

    var typed = new Typed('#typed', {
        stringsElement: '#tipeador',
        typeSpeed: 80,
        backSpeed: 10,
        loop: true
    });

});