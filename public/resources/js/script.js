window.onload = function () {
    $(".loader").fadeOut("slow");
};

$(document).ready(function () {
    const vistas = ['principal', 'nosotros', 'servicios', 'contactos'];
    const vw = ['.vw-principal', '.vw-nosotros', '.vw-servicios', '.vw-contactos'];

    var enlacesArr = [];

    $('#navbarNav ul li .nav-link').each(function () {
        enlacesArr[enlacesArr.length] = $(this).attr('class');
    });

    for (let i = 0; i < enlacesArr.length; i++) {
        let enlace = '';

        enlace += enlacesArr[i].substring(9, enlacesArr[i].length);

        $(`.${enlace}`).click(function (e) {
            e.preventDefault();
            goLink(vistas[i]);
        })
    };

    var logo = document.getElementsByClassName('navbar-brand')[0].getElementsByTagName('img')[0];
    logo.draggable = false;

    var lineasArr = [];

    $('#navbarNav ul li div').each(function () {
        lineasArr[lineasArr.length] = $(this).attr('class');
    });

    for (let i = 0; i < lineasArr.length; i++) {
        if ($(vw[i]).length) {
            var elemento = '';

            elemento += enlacesArr[i].substring(9, enlacesArr[i].length);

            $(`.${elemento}`).addClass('linkActive');

            $(`.${lineasArr[i]}`).css({ 'display': 'block' });

            switch (i) {
                // Vista de nosotros 
                case 1:
                    var secciones = [];

                    $('.about-us .container .row').each(function () {
                        secciones[secciones.length] = $(this).attr('id');
                    })

                    $('.objectives-values .container .row .section-box').each(function () {
                        secciones[secciones.length] = $(this).attr('id');
                    })

                    window.onload = function () {
                        for (let i = 0; i < secciones.length; i++) {
                            if ($(`#${secciones[i]}`).isInViewport()) {
                                $(`#${secciones[i]}`).addClass('animate__backInUp');

                            }
                        }

                        $(".loader").fadeOut("slow");

                        $(window).on('resize scroll', function () {
                            for (let i = 0; i < secciones.length; i++) {
                                if ($(`#${secciones[i]}`).isInViewport()) {
                                    $(`#${secciones[i]}`).addClass('animate__backInUp');
                                }
                            }
                        });
                    };

                    break;

                // Vista de servicios
                case 2:
                    $('.footer').css({ 'display': 'none' })

                    setTimeout(() => {
                        $('.footer').css({ 'display': 'block' })
                    }, 200);

                    var elemArr = [];

                    $('.container section').each(function () {
                        elemArr[elemArr.length] = $(this).attr('id');
                    })

                    for (let i = 0; i < elemArr.length; i++) {
                        setTimeout(() => {
                            $(`#${elemArr[i]}`).addClass('animate__fadeInDown');
                            $(`#${elemArr[i]}`).css({ 'display': 'block' });
                        }, 60);
                    }
                    break;
                default:
                    break;
            }
        }
    };

    function goLink(view) {
        const dominio = $(location).attr('hostname');
        const puerto = $(location).attr('port');

        var url = `http://${dominio}:${puerto}/first_web_page/public/${view}`;

        $(location).attr('href', url);
    };

    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var libros = {
        tipos: ['terror', 'accion', 'fantasia'],
        ver_tipos: function () {
            var i = 0;

            while (i < this.tipos.length) {
                console.log(this.tipos[i]);
                i = i + 1;
            }
        },

        existentes: ['Harry Potter', 'El señor de los anillos', 'La milla verde', 'Winnie the pooh', 'Caillou'],

        ver_existencia: function () {
            var i = 0;

            while (i < this.existentes.length) {
                console.log(this.existentes[i]);
                i = i + 1;
            }
        }
    };

    libros.tipos.shift();
    libros.ver_tipos();
    libros.ver_existencia();

    console.log(libros);
})
