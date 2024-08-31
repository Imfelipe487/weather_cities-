$(document).ready(function(){

    applyStyles();
    // Aplicar estilos al body
    $('body').css({
        'background-color': '#8147FD',
        'font-family': "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
        'color': '#fff'
    });

    // Aplicar estilos a la sección principal
    $('.section').css({
        'display': 'flex',
        'justify-content': 'center',
        'align-items': 'center',
        'background-color': '#A47BFB',
        'height': '90vh',
        'margin-top': '2rem',
        'margin-left': '25rem',
        'margin-right': '25rem',
        'text-align': 'center',
        'border-radius': '6px'
    });

    // Estilos para la clase show-weather
    $('.show-weather').css({
        'align-content': 'center',
        'align-items': 'center',
        'justify-content': 'center',
        'margin-bottom': '5px'
    });

    // Estilos para el título dentro de .show-weather
    $('.show-weather h1').css({
        'font-weight': 'bolder',
        'margin-bottom': '1rem'
    });

    // Estilos para la temperatura
    $('.show-weather .temp').css({
        'font-size': '60px',
        'font-weight': '400'
    });

    // Estilos para los párrafos y etiquetas
    $('.show-weather p, .show-weather label').css({
        'font-size': '20px',
        'font-weight': 'lighter'
    });

    // Estilo para la imagen del clima
    $('.show-weather img').css({
        'width': '150px'
    });

    // Estilos para la clase tasa
    $('.tasa').css({
        'display': 'flex'
    });

    // Margen para los elementos dentro de .tasa
    $('.tasa label, .tasa p').css({
        'margin': '1rem'
    });

    // Estilos para la clase conversion
    $('.conversion').css({
        'display': 'flex',
        'margin-bottom': '3rem'
    });

    // Margen para los elementos dentro de .conversion
    $('.conversion p').css({
        'margin': '1rem'
    });

    // Estilos para el formulario
    $('form').css({
        'justify-content': 'center',
        'align-items': 'center',
        'text-align': 'center',
        'background-color': '#A47BFB',
        'margin': '10rem',
        'padding': '2rem 7rem',
        'border-radius': '6px'
    });

    // Estilos para los labels y options dentro del formulario
    $('form label, form option').css({
        'color': 'black'
    });

    $('modal-body').css({
        'color': 'black'
    });


    applyStyles();

    $(window).resize(function() {
        applyStyles();
    });

    function applyStyles() {
        var windowWidth = $(window).width();

        // Establecer estilos básicos
        $('body').css({
            'background-color': '#8147FD',
            'font-family': "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
            'color': '#fff'
        });

        // Ajustes de tamaño y márgenes basados en el ancho de la ventana
        if (windowWidth >= 1200) {
            $('.section').css({
                'margin-left': '25rem',
                'margin-right': '25rem',
                'height': '90vh'
            });
        } else if (windowWidth >= 992) {
            $('.section').css({
                'margin-left': '15rem',
                'margin-right': '15rem',
                'height': '80vh'
            });
        } else if (windowWidth >= 768) {
            $('.section').css({
                'margin-left': '5rem',
                'margin-right': '5rem',
                'height': '70vh'
            });
        } else {
            $('.section').css({
                'margin': '1rem',
                'height': '60vh'
            });
        }

        // Ajuste de la fuente según el ancho de la ventana
        $('.show-weather .temp').css({
            'font-size': windowWidth >= 768 ? '60px' : '40px'
        });

        $('.show-weather p, .show-weather label').css({
            'font-size': windowWidth >= 768 ? '20px' : '16px'
        });

        $('form').css({
            'margin': windowWidth >= 768 ? '10rem' : '1rem',
            'padding-left': windowWidth >= 768 ? '7rem' : '2rem',
            'padding-right': windowWidth >= 768 ? '7rem' : '2rem',
            'background-color': '#A47BFB',
            'border-radius': '6px',
            'text-align': 'center'
        });

        // Otros ajustes de estilos
        $('.show-weather').css({
            'align-content': 'center',
            'align-items': 'center',
            'justify-content': 'center',
            'margin-bottom': '5px'
        });

        $('.show-weather h1').css({
            'font-weight': 'bolder',
            'margin-top': '3rem'
        });

        $('.show-weather img').css({
            'width': '150px'
        });

        $('.tasa, .conversion').css({
            'display': 'flex'
        });

        $('.tasa label, .tasa p, .conversion p').css({
            
        });
    }
});


