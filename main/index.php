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

        <!-- /* -------------------------------------------------------------------------- */
        /*                                  BENEFITS                                  */
        /* -------------------------------------------------------------------------- */ -->

        <div class="benefits" id="id_advantage">
            <article>
                <h2 class="main_txt">Преимуществa</h2>
                <main>
                    <div class="item fon green">
                        <p>Выгодные<br/>условия</p>
                        <i id="icon_folder" class="icon"></i>
                    </div>
                    <div class="item fon orange">
                        <p class="text">В наличии все<br/>коммуникации</p>
                        <i id="icon_room" class="icon"></i>
                    </div>
                    <div class="item fon green">
                        <p>Качественные<br/>материалы</p>
                        <i id="icon_build" class="icon"></i>
                    </div>
                    <div class="item fon orange">
                        <p>Дом под<br/>серый ключ</p>
                        <i id="icon_house" class="icon"></i>
                    </div>
                </main>
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