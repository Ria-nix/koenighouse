const more = document.querySelector('.more')
const gallery = document.querySelector('.gallery')
const images = document.querySelectorAll('.gallery > img')

let ammountOfImages = gallery.getElementsByTagName('*').length
console.log(ammountofImages);

more.addEventListener('click', () => {
    if(!gallery.classList.contains('showed')) {
        let imageAmmount = images.length
        gallery.style.height = `${(imageAmmount * 186) + ((imageAmmount - 1) * 13)}px`
        gallery.classList.toggle('showed')
    }else {
        gallery.classList.toggle('showed')
        gallery.style.height = "365px"
    }
})

// ----------------------------------------

const zoom = document.querySelector('.zoom')
const close = document.querySelector('.close-zoom')
const zoomIcon = document.querySelector('.zoom-icon')
const body = document.querySelector('body')

zoomIcon.addEventListener('click', () => {
    zoom.classList.toggle('opened')
    body.classList.toggle('zoom-opened')
})

close.addEventListener('click', () => {
    zoom.classList.toggle('opened')
    body.classList.toggle('zoom-opened')
})