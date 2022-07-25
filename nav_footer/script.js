/* -------------------------------------------------------------------------- */
/*                                TOGGLE BUTTON                               */
/* -------------------------------------------------------------------------- */
let bool = false;
function toggleButton() {
    if (!bool) {
        bool = true;
        $("#toggle_btn").removeClass('toggle_open').addClass('toggle_close');
        $(".sidebar").css('right', '0');
        $(".dark_fon").removeClass('none');
        $("body").addClass('none_scroll');
    } else { closeFon(); }
}

/* ----------------------------- close dark fon ----------------------------- */
function closeFon() {
    bool = false;
    $("#toggle_btn").removeClass('toggle_close').addClass('toggle_open');
    $(".sidebar").css('right', '-250px');
    $(".dark_fon").addClass('none');
    $("body").removeClass('none_scroll');
}

/* --------------------- Open the page with link -------------------- */
function openPage(f_link) {
    this.window.location.href = f_link;
}

function newWindow(s_link) {
    this.window.open(s_link);
}

/* -------------------------------------------------------------------------- */
/*                           SCROLL LINKS BY WEBSITE                          */
/* -------------------------------------------------------------------------- */

for(let link_menu of $('.menu_link')){
    link_menu.addEventListener('click', function(){ 
        $('html, body').css('scroll-behavior', 'smooth');
        closeFon();
    });
}