"use script";

//* ================ TOGGLE BUTTON ================ *//
let width = document.documentElement.clientWidth;
width >= 1020 ? $(".sidebar").removeClass('none') :  $(".sidebar").addClass('none');

let bool = false;
function toggleButton(){   
    if(!bool){
        bool = true;
        $("#toggle_btn").removeClass('toggle_open').addClass('toggle_close');
        $(".sidebar").removeClass('none');
    }
    else{
        bool = false;
        $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
        $(".sidebar").addClass('none');
    }
}