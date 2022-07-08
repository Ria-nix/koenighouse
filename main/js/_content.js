"use strict";

/* -------------------------------------------------------------------------- */
/*                           SCROLL LINKS BY WEBSITE                          */
/* -------------------------------------------------------------------------- */

$(document).ready(function(){
    $("#main_menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
});
