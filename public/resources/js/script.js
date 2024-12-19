window.onload = function () {
    $(".loader").fadeOut("slow");
};

$(document).ready(function () {
    const enlaces = ['.link-principal', '.link-nosotros', '.link-servicios', '.link-contactos'];
    const vistas = ['principal', 'nosotros', 'servicios', 'contactos'];
    const lineas = ['.line-select-principal', '.line-select-nosotros', '.line-select-servicios', '.line-select-contactos'];
    const vw = ['.vw-principal', '.vw-nosotros', '.vw-servicios', '.vw-contactos'];

    var logo = document.getElementsByClassName('navbar-brand')[0].getElementsByTagName('img')[0];
    logo.draggable = false;

    for (let i = 0; i < vistas.length; i++) {
        $(enlaces[i]).click(function (e) {
            e.preventDefault();
            goLink(vistas[i]);
        })
    }

    for (let i = 0; i < lineas.length; i++) {
        if ($(vw[i]).length) {
            var elemento = '';

            elemento += enlaces[i];

            $(elemento).addClass('linkActive');

            $(lineas[i]).css({ 'display': 'block' });

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
    }

    function goLink(view) {
        const dominio = $(location).attr('hostname');
        const puerto = $(location).attr('port');

        var url = `http://${dominio}:${puerto}/first_web_page/public/${view}`;

        $(location).attr('href', url);
    }

    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };
})
