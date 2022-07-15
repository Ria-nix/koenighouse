 /* -------------------- выпадающий список с изображениями ------------------- */
function fallList(elem){
    $(elem).toggle('none');    
}

 /* ------------ show the modal window when have click on the img ------------ */
$('.none_empty').click(function(){    
    $('.modal_wrap').removeClass('none');
    $('body').addClass('none_scroll');
    // showImg($('.modal_wrap').attr('src'));
    // console.log($('.modal_wrap').attr('src'));
})

function showImg(srcImg){
    console.log(srcImg);
    $('.mod_image img').attr('src', srcImg);
}


function closeWindow(){
    $('body').removeClass('none_scroll');
    $('.modal_wrap').addClass('none');    
}