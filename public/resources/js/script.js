$(document).ready(function () {
    console.log("Comenzar a programar");

    $('.go-link').click(function(e){
        e.preventDefault();
        goLink('principal');
    })

    function goLink(view) {
        const dominio = $(location).attr('hostname');
        const puerto = $(location).attr('port');

        var url = `http://${dominio}:${puerto}/first_web_page/public/${view}`;

        $(location).attr('href', url);
    }
})