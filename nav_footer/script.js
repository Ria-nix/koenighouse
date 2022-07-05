"use script";

//* ================ TOGGLE BUTTON ================ *//

let bool = false;
function toggleButton(){   
    if(!bool){
        bool = true;
        $("#toggle_btn").removeClass('toggle_open').addClass('toggle_close');
        $(".sidebar").css('right', '0');
        $(".dark_fon").css('opacity', '1');
    }
    else{ closeFon();}
}

function closeFon(){
        bool = false;
        $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
        $(".sidebar").css('right', '-500px');
        $(".dark_fon").css('opacity', '0');
}

function bank(){
    this.window.open('https://www.sberbank.ru/ru/person');
}