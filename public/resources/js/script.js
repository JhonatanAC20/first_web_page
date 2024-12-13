window.onload = function () {
    $(".loader").fadeOut("slow");
};

$(document).ready(function () {
    var logo = document.getElementsByClassName('navbar-brand')[0].getElementsByTagName('img')[0];
    logo.draggable = false;

    if ($('.vw-principal').length) {

        const $link_principal = $('.link-principal');

        $link_principal[0].style.setProperty('color', '#ff0c0c', 'important');

        $('.line-select-principal').css({ 'display': 'block' });
    }

    if ($('.vw-nosotros').length) {

        const $link_nosotros = $('.link-nosotros');

        $link_nosotros[0].style.setProperty('color', '#ff0c0c', 'important');

        $('.line-select-nosotros').css({ 'display': 'block' });
    }

    if ($('.vw-servicios').length) {
        const $link_servicios = $('.link-servicios');

        $link_servicios[0].style.setProperty('color', '#ff0c0c', 'important');

        $('.line-select-servicios').css({ 'display': 'block' });
    }

    if ($('.vw-contactos').length) {
        const $link_contactos = $('.link-contactos');

        $link_contactos[0].style.setProperty('color', '#ff0c0c', 'important');

        $('.line-select-contactos').css({ 'display': 'block' });
    }

    $('.link-principal').click(function (e) {
        e.preventDefault();
        goLink('principal');
    })

    $('.link-nosotros').click(function (e) {
        e.preventDefault();
        goLink('nosotros');
    })

    $('.link-servicios').click(function (e) {
        e.preventDefault();
        goLink('servicios');
    })

    $('.link-contactos').click(function (e) {
        e.preventDefault();
        goLink('contactos');
    })

    function goLink(view) {
        const dominio = $(location).attr('hostname');
        const puerto = $(location).attr('port');

        var url = `http://${dominio}:${puerto}/first_web_page/public/${view}`;

        $(location).attr('href', url);
    }
})