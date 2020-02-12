require('./bootstrap');

var $ = require('jquery'); //Richiamo jquery

$(document).ready(function() {

    $(".fa-plus").click(function() {
        $(this).removeClass("active");
        alert("SO");
    });

});
