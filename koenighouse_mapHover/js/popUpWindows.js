popUpWindows($('.pointer_block'))
selected_house = null

function setLocation(curLoc) {
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + 'house?id=' + curLoc;
    window.history.pushState({ path: newurl }, '123', newurl);
}
// setLocation("1")

function popUpWindows(elem_to_hover) {

    elem_to_hover.on({
        mouseenter: function() {
            hov = $(this)
            selected_house = $(this).attr('id')
            hovered_elem_position_left = hov.position().left - $('.popUpWindow').width()
            hovered_elem_position_top = hov.position().top - hov.width() / 2
            if (hovered_elem_position_top < 50)
                hovered_elem_position_top = hovered_elem_position_top + 50
            if (hovered_elem_position_top >= 350)
                hovered_elem_position_top = hovered_elem_position_top - 100
            if (hovered_elem_position_left <= 200)
                hovered_elem_position_left = hovered_elem_position_left + $('.popUpWindow').width() + hov.width()
            $('.popUpWindow').css({ top: hovered_elem_position_top, left: hovered_elem_position_left })
        },
        mouseleave: function(e) {
            if (!$(e.toElement).hasClass('popUpWindow')) {
                selected_house = null
                $('.popUpWindow').css({ top: -1000, left: -1000 })
            }
        }
    })
    $('.popUpWindow').on({
        mouseleave: function() {
            selected_house = null
            $('.popUpWindow').css({ top: -1000, left: -1000 })
        }
    })
}
$('#more-house-info').on('click', function() {
    $('.house-info').toggleClass('hiden')
    if (selected_house !== null && selected_house !== undefined) {
        $('.back').css({
            'filter': 'blur(5px)',
            '-webkit-filter': 'blur(5px)',
            '-moz-filter': 'blur(5px)',
            '-o-filter': 'blur(5px)',
            '-ms-filter': 'blur(5px)'
        })
        $('.test_container').css({ 'overflowX': 'hidden' })
        scroll_ = false
            // setLocation(selected_house)
    }
})
$('.house-info .close-info-container .close-btn').on('click', function() {
    $('.house-info').toggleClass('hiden')
    $('.back').css({
        'filter': 'blur(0px)',
        '-webkit-filter': 'blur(0px)',
        '-moz-filter': 'blur(0px)',
        '-o-filter': 'blur(0px)',
        '-ms-filter': 'blur(0px)'
    })
    $('.test_container').css({ 'overflowX': 'auto' })
    scroll_ = true

})
const slider = document.querySelector('.test_container');
let isDown = false;
var scroll_ = true
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    if (scroll_) {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    }
});
slider.addEventListener('mouseleave', () => {
    if (scroll_) {
        isDown = false;
        slider.classList.remove('active');
    }
});
slider.addEventListener('mouseup', () => {
    if (scroll_) {
        isDown = false;
        slider.classList.remove('active');
    }

});
slider.addEventListener('mousemove', (e) => {
    if (scroll_) {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
    }
});