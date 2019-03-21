//$ = jQuery.noConflict();
jQuery(document).ready(function($) {
    
    const seleccion = document.getElementById('menus-options');

    seleccion.addEventListener('click', e => {
        const elemento = e.target,
              menus = Array.from(seleccion.querySelectorAll('p')),
              i = menus.indexOf(elemento);

        switchMenu(i+1); 
    });

    const switchMenu = data => {
        const elementoPadre = document.getElementById('padre-options');
        const elementosDentro = elementoPadre.querySelectorAll('div');

        switch(data){
            case 1:
                removedorClases(elementosDentro);
                $("#view-home-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 2:
                removedorClases(elementosDentro);
                $("#view-header-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 3:
                removedorClases(elementosDentro);
                $("#view-contacto-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 4:
                removedorClases(elementosDentro);
                $("#view-social-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 5:
                removedorClases(elementosDentro);
                $("#view-footer-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 6:
                removedorClases(elementosDentro);
                $("#view-sobre-mi-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 7:
                removedorClases(elementosDentro);
                $("#view-mis-servicios-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 8:
                removedorClases(elementosDentro);
                $("#view-mi-curriculum-options").addClass('Box-Theme-Options-Main-View');
                break;
            case 9:
                removedorClases(elementosDentro);
                $("#view-estadisticas-options").addClass('Box-Theme-Options-Main-View');
                break;
        }

    }

    const removedorClases = data => {
        const recorredor = Array.from(data); 

        recorredor.forEach(element => {
            element.classList.remove('Box-Theme-Options-Main-View');
        });

    }

});
