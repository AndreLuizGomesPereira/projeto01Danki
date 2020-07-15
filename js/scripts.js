$(function () {
    // Aqui ira todo o nosso script em JavaScript
    $('nav.mobile').click(function () {
        var listaMenu = $('nav.mobile ul');
        listaMenu.slideToggle();
        // if (listaMenu.is(':hidden') == true)
        //     listaMenu.fadeIn();
        // else
        //     listaMenu.fadeOut();
    })
})