<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_slider/style.css">
    <?php include_once('../helper.php') ?>    
</head>
<body>
    <?php include_once('../nav_footer/header.php') ?>
    <div class="grid content">
        <div class="dark_fon none" onClick="closeFon()"></div>
        <div class="main_info">
            <div class="bl_text">
                <div class="wrap_text">                    
                    <a href="tel:+7412979333" class='telefon_call'>
                        <input type="submit" value="позвонить">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="benefits" id="id_advantage">
            <div class="wrap_benefits">
                <p class="main_txt">приеимущества</p>
                    <div class="benefits_items">
                    <div class="item folder">
                        <p>Выгодные <br>условия</p>
                        <span class="image_folder"></span>
                    </div>
                    <div class="item room">
                        <p>в наличии Все <br>коммуникации</p>
                        <span class="image_room"></span>
                    </div>
                    <div class="item tools">
                        <p>Качественные <br>материалы</p>
                        <span class="image_tools"></span>
                    </div>
                    <div class="item home">
                        <p>дом под <br>Серый ключ</p>
                        <span class="image_home"></span>
                    </div>
                </div> 
            </div>           
        </div> -->

        BENEFITS

        <div class="wrap">
            <article>
                <h2 class="title">Преимуществa</h2>    
                <div class="benefits">
                    <div class="item fon green">
                        <p class="text">Выгодные<br>условия</p>
                        <div id="folder" class="icon"></div>
                    </div>
                    <div class="item fon orange">
                        <p class="text">В наличии все коммуникации</p>
                        <div id="room" class="icon"></div>
                    </div>
                    <div class="item fon green">
                        <p class="text">Качественные материалы</p>
                        <div id="build" class="icon"></div>
                    </div>
                    <div class="item fon orange">
                        <p class="text">Дом под<br>серый ключ</p>
                        <div id="house" class="icon"></div>
                    </div>
                </div>
            </article>
        </div>

        <div class="projects slider-module" id="id_project"></div>        

        <div class="gallery" id="id_gallery">
            <div class="wrap_gallery">
                <p class="main_txt">фото</p>
                <div class="gallery_items">
                    <div class="item_photo item_1">
                        <div class="img_hover">
                            <span class="img_border">
                                <p class="img_txt">Для поддержания комфортной температуры дом оснащен автономной водяной системой отопления</p>
                            </span>                            
                        </div>
                    </div>
                    <div class="item_photo item_2">
                        <div class="img_hover">
                            <span class="img_border">
                                <p class="img_txt img_special_txt">Для поддержания комфортной температуры дом оснащен автономной водяной системой отопления</p>
                            </span>                            
                        </div>
                    </div>
                    <div class="item_photo item_3">
                        <div class="img_hover">
                            <span class="img_border">
                                <p class="img_txt img_special_txt">Для поддержания комфортной температуры дом оснащен автономной водяной системой отопления</p>
                            </span>                            
                        </div>
                    </div>
                    <div class="item_photo item_4">
                        <div class="img_hover">
                            <span class="img_border">
                                <p class="img_txt">Для поддержания комфортной температуры дом оснащен автономной водяной системой отопления</p>
                            </span>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <?php include_once('../nav_footer/footer.php') ?>
    
    <!--/* -------------------------------------------------------------------------- */
        /*                                   SCRIPTS                                  */
        /* -------------------------------------------------------------------------- */ -->

    <script src="slider.js"></script>
    <script src="../nav_footer/script.js"></script>  
    <script src="_content.js"></script>  

</body>
</html>