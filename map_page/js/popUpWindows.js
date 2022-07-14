popUpWindows($('.hitbox'))
show = true

function setLocation(curLoc) {
    var newurl = window.location.protocol + "//" + window.location.host + '?id=' + curLoc;
    window.history.pushState({
        path: newurl
    }, '123', newurl);
}

// setLocation("1")

// window.addEventListener('mousemove', () => {
//     $('.popUpWindow').css({
//         top: (event.pageY),
//         left: (event.pageX + 20),
//         display: "grid"
//     })
// })


const popUp = document.querySelector('.popUpWindow')

document.querySelectorAll('.hitbox').forEach((elem) => {
    elem.addEventListener('mousemove', (event) => {
        if (elem.classList.contains('id7') || elem.classList.contains('id8')) {
            $('.popUpWindow').css({
                top: (event.pageY - 200),
                left: (event.pageX + 20)
            })
            $('.popUpWindow').fadeIn(300)
        } else {
            $('.popUpWindow').css({
                top: (event.pageY - 80),
                left: (event.pageX + 20)
            })
            $('.popUpWindow').fadeIn(300)
        }
    })
    elem.addEventListener('mouseleave', (e) => {
        if(!$(e.toElement).hasClass('popUpWindow')) {
            selected_house = null
            closePopUpWindow()
        }
    })
})

function popUpWindows() {
    $('.popUpWindow').on({
        mouseleave: function () {
            selected_house = null
            closePopUpWindow()
        }
    })
}
$('.hitbox').on('click', function () {
    $('.house-info').toggleClass('hiden')
    show = false
    if (selected_house !== null && selected_house !== undefined) {
        $('.map').css({
            'filter': 'blur(5px)',
            '-webkit-filter': 'blur(5px)',
            '-moz-filter': 'blur(5px)',
            '-o-filter': 'blur(5px)',
            '-ms-filter': 'blur(5px)'
        })
        // setLocation(selected_house)
        closePopUpWindow()

    }
})
$('.house-info .close-info-container .close-btn').on('click', function () {
    $('.house-info').toggleClass('hiden')
    $('.map').css({
        'filter': 'blur(0px)',
        '-webkit-filter': 'blur(0px)',
        '-moz-filter': 'blur(0px)',
        '-o-filter': 'blur(0px)',
        '-ms-filter': 'blur(0px)'
    })
    show = true
})

function closePopUpWindow() {
    $('.popUpWindow').fadeOut(100)
    show = true
}