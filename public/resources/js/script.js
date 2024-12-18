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

            if (i == 2) {
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
            }
        }
    }

    function goLink(view) { 
        const dominio = $(location).attr('hostname');
        const puerto = $(location).attr('port');

        var url = `http://${dominio}:${puerto}/first_web_page/public/${view}`;

        $(location).attr('href', url);
    }
})