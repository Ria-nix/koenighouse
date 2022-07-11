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
        $("body").addClass('none_scroll');
    }
    else{ closeFon(); }
}

/* ----------------------------- close dark fon ----------------------------- */
function closeFon(){
    bool = false;
    $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
    $(".sidebar").css('right', '-250px');
    $(".dark_fon").addClass('none');
    $("body").removeClass('none_scroll');
}

/* --------------------- Open the page with "map-module" -------------------- */
function openPage(f_link){
    this.window.location.href = f_link;
}
function newWindow(s_link){
    this.window.open(s_link);
}


for(let elem of $('.menu a')){
    // elem.addEventListener('click', function(){
        console.log(elem);
    // })
}



/* ------------------------- scroll of active links ------------------------- */
// window.addEventListener('scroll', () => {
//     let distance = window.scrollY;
//     document.querySelectorAll(".section").forEach((el, i) => {
//         if (el.offsetTop - document.querySelector('.menu').clientHeight <= distance){
//             document.querySelectorAll('.menu a').forEach((el) => {
//                 if(el.classList.contains('active')){
//                     el.classList.remove('active');
//                 } 
//             })
//             document.querySelectorAll('.menu a')[i].querySelector('.underline').classList.add('active');           
//         }
//     })
// })