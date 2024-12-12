$(document).ready(function () {

    var logo = document.getElementsByClassName('navbar-brand')[0].getElementsByTagName('img')[0];
    logo.draggable = false;

    if($('.vw-principal').length){
        $('.line-select-principal').css({'display':'block'});
    }

    
    $('.link-principal').click(function(e){
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