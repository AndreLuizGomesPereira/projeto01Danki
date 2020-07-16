$(function () {
    // Aqui ira todo o nosso script em JavaScript
    $('nav.mobile').click(function () {
        var listaMenu = $('nav.mobile ul');

        if (listaMenu.is(':hidden') == true) {
            
            var icone = $('botao-menu-mobile i');
            icone.removeClass('fas fa-bars');
            icone.addClass('fas fa-times');
            listaMenu.slideToggle();
        } else {
            
            var icone = $('botao-menu-mobile i');
            icone.removeClass('fas fa-times');
            icone.addClass('fas fa-bars');
            listaMenu.slideToggle();
        }
    })
})