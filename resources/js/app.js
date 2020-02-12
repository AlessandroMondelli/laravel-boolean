require('./bootstrap');

var $ = require('jquery'); //Richiamo jquery

$(document).ready(function() {

    $(document).on("click",".fas.fa-plus",function() { //Al click su più
        $(".faq .fa-plus").addClass("active"); //Aggiungo a tutte le domande il segno più
        $(".faq .fa-minus").removeClass("active"); //Tolgo a tutte le domande il segno Meno

        thisSwapSign($(this)); //Richiamo funzione per scambiare segni

        $(".faq p").slideUp('swing'); //Slide Up di tutte le risposte
        $(this).parent().siblings('p').slideDown('swing'); //Slide down della risposta scelta
    });

    $(document).on("click",".fas.fa-minus",function() { //Al click su meno
        thisSwapSign($(this));

        $(this).parent().siblings('p').slideUp('swing'); //Slide Up della risposta scelta
    });


    function thisSwapSign(thisEl) { //funzione per scambiare segni
        thisEl.removeClass("active"); //Nascondo il simbolo attuale
        thisEl.siblings("i").addClass("active"); //Mostro l'altro
    }
});
