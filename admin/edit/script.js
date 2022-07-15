 /* -------------------- выпадающий список с изображениями ------------------- */
function fallList(elem){
    $(elem).toggle('none');    
}

 /* ------------ show the modal window when have click on the img ------------ */
$('.none_empty').click(function(){    
    $('.modal_wrap').removeClass('none');
    $('body').addClass('none_scroll');

    /* ----------------- take the background url from scss file ----------------- */
    var bg = $(this).css('background-image');
    bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
    showImg(bg);    
})

/* ----------------------------- show the image ----------------------------- */
function showImg(srcImg){    
    console.log(srcImg);
    $('.mod_image img').attr('src', srcImg);
}

/* ------------------------- close the modal window ------------------------- */
function closeWindow(){
    $('body').removeClass('none_scroll');
    $('.modal_wrap').addClass('none');    
}