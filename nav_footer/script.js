"use script";

//* ================ TOGGLE BUTTON ================ *//

let bool = false;
function toggleButton(){   
    if(!bool){
        bool = true;
        $("#toggle_btn").removeClass('toggle_open').addClass('toggle_close');
        $(".sidebar").removeClass('none');
        $(".sidebar").css('display', 'flex');
        $(".dark_fon").removeClass('none');
        $("body").addClass('none_scroll');
    }
    else{
        bool = false;
        $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
        $(".sidebar").addClass('none');
        $(".sidebar").css('display', 'none');
        $(".dark_fon").addClass('none');
        $("body").removeClass('none_scroll');
    }
}