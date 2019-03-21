jQuery(document).ready(function($) {

    var barraUnoElement = $("#line-skill-1");
    var valUno = barraUnoElement.attr('x2'); 
    /**/
    var barraDosElement = $("#line-skill-2");
    var valDos = barraDosElement.attr('x2'); 
    /**/
    var barraTresElement = $("#line-skill-3");
    var valTres = barraTresElement.attr('x2'); 
    /**/
    var barraCuatroElement = $("#line-skill-4");
    var valCuatro = barraCuatroElement.attr('x2'); 
    /**/
    var barraCincoElement = $("#line-skill-5");
    var valCinco = barraCincoElement.attr('x2'); 
    /**/
    var barraSeisElement = $("#line-skill-6");
    var valSeis = barraSeisElement.attr('x2'); 
    /**/
    var barraSieteElement = $("#line-skill-7");
    var valSiete = barraSieteElement.attr('x2'); 

    setInterval(function(){
        resetLines();
    }, 3000);

    function resetLines(){
        console.log(valUno);
        barraUnoElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraUnoElement.attr('x2', 0);
        barraDosElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraDosElement.attr('x2', 0);
        barraTresElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraTresElement.attr('x2', 0);
        barraCuatroElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraCuatroElement.attr('x2', 0);
        barraCincoElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraCincoElement.attr('x2', 0);
        barraSeisElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraSeisElement.attr('x2', 0);
        barraSieteElement.css({
            'background':'transparent',
            'stroke-width': '0px'
        });
        barraSieteElement.attr('x2', 0);

        drawSkills();

    }

    function drawSkills(){
        barraUnoElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraUnoElement.attr('x2', valUno);
        barraDosElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraDosElement.attr('x2', valDos);
        barraTresElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraTresElement.attr('x2', valTres);
        barraCuatroElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraCuatroElement.attr('x2', valCuatro);
        barraCincoElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraCincoElement.attr('x2', valCinco);
        barraSeisElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraSeisElement.attr('x2', valSeis);
        barraSieteElement.animate({
            'background':'rgba(238, 82, 83,1.0)',
            'stroke-width': '2px'
        }, 500);
        barraSieteElement.attr('x2', valSiete);

    }

    //menu responsive
    var menu = 1; 
    $(".box-nav-responsive button").on("click", function(){
        
        if(menu == 1){
            $(".box-nav-responsive button span").attr('class', 'icon ion-md-close');
            $(".box-nav-responsive ul").animate({
                'right': '0px'
            }, 500);
            menu = 2;
        }else{
            menu = 1;
            $(".box-nav-responsive button span").attr('class', 'icon ion-md-menu');
            $(".box-nav-responsive ul").animate({
                'right': '-200px'
            }, 500);
        }

    });

    //show content experience & studies
    $("#btn-uno-curriculum").on('click', function(){
        $("#view-cv-1").slideDown(300);
        $("#view-cv-2").slideUp(3);
    });

    $("#btn-dos-curriculum").on('click', function(){
        $("#view-cv-2").slideDown(300);
        $("#view-cv-1").slideUp(3);
    });

});