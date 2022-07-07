"use script";

/* -------------------------------------------------------------------------- */
/*                                TOGGLE BUTTON                               */
/* -------------------------------------------------------------------------- */
let bool = false;
function toggleButton(){   
    if(!bool){
        bool = true;
        $("#toggle_btn").removeClass('toggle_open').addClass('toggle_close');
        $(".sidebar").css('right', '0');
        $(".dark_fon").removeClass('none');
    }
    else{ closeFon();}
}
/* ----------------------------- close dark fon ----------------------------- */
function closeFon(){
        bool = false;
        $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
        $(".sidebar").css('right', '-250px');
        $(".dark_fon").addClass('none');
}
/* ------------------------- Open the website with bank ------------------------ */
function bank(){
    this.window.open('https://www.sberbank.ru/ru/person');
}
/* --------------------- Open the page with "map-module" -------------------- */
function openHouses(){
    this.window.open('../map_module/index.php');
}

/* ------------------------- scroll of active links ------------------------- */
window.addEventListener('scroll', () => {
    let distance = window.scrollY;
    document.querySelectorAll(".section").forEach((el, i) => {
        if (el.offsetTop - document.querySelector('.menu').clientHeight <= distance){
            document.querySelectorAll('.menu a').forEach((el) => {
                if(el.classList.contains('active')){
                    el.classList.remove('active');
                } 
            })
            document.querySelectorAll('.menu a')[i].querySelector('.underline').classList.add('active');           
        }
    })
})