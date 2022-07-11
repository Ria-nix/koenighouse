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

/* --------------------- Open the page with link -------------------- */
function openPage(f_link){
    this.window.location.href = f_link;
}
function newWindow(s_link){
    this.window.open(s_link);
}

/* -------------------------------------------------------------------------- */
/*                           SCROLL LINKS BY WEBSITE                          */
/* -------------------------------------------------------------------------- */

// $(document).ready(function(){
//     $("#main_menu").on("click","a", function (event) {
//         event.preventDefault();
//         var id  = $(this).attr('href'),
//         top = $(id).offset().top;
//         $('body,html').animate({scrollTop: top}, 1000);
//     });
// });



// #id_advantage
// ../main/index.php#id_project
// http://localhost:3000/main/index.php#id_gallery

let links_me = document.querySelectorAll('.menu_link');

links_me.forEach((elem) => {
    elem.addEventListener('click', () => {
        console.log(elem);
        // if(elem )
    })
})

let url_href = window.location.href;
let url_host = window.location.hostname;
let url_pathname = window.location.pathname;

console.log(url_href);
console.log(url_host);
console.log(url_pathname);



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