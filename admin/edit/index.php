<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modal_window/scss/style.css">
    <?php include_once('../helper_admin.php')?>
    <sctipt src="script.js"></sctipt>
    <title>Редактирование «2 Таунхауса»</title>    
</head>
<body> 
    <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php 
        $class_btn = '<a class="back_arrow">Назад</a>'; 
        include_once('../nav/index.php'); 
    ?>      
    <!-- /* -------------------------------------------------------------------------- */
    /*                                MODAL WINDOW                                */
    /* -------------------------------------------------------------------------- */ -->
    <?php  include_once('modal_window/index.php'); ?> 
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */0
    /* -------------------------------------------------------------------------- */ -->

    <div class="content_wrap">
        <div class="content_proj">
            <p class="heading">РЕДАКТИРОВАНИЕ <span>«2 Таунхауса»</span></p>

            <div class="house_info">
                <!-- /* ------------------------------ all projects ------------------------------ */ -->
                <div class="bl_image">
                    <div class="market_img">
                        <p class="names" onClick="fallList('.marketList')">Маркетинговые Изображения</p>
                        <div class="main_wrapImg marketList">
                            <div class="wrap_img none_empty">
                                <img src="../images/home.jpg" alt="">
                                <span class="no_imgTxt">Отсутствует изображение</span>
                            </div>
                            <div class="wrap_img empty">
                                <span class="no_imgTxt">Отсутствует изображение</span>
                            </div>
                        </div>                        
                    </div>

                    <div class="others_img">
                        <p class="names" onClick="fallList('.otherList')">Остальные Изображения</p>
                        <div class="main_wrapImg otherList">
                            <div class="wrap_img none_empty" id="1">
                                <img src="../images/home.jpg" alt="">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="2">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="3">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="4">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="5">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="6">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="7">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="8">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="9">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="10">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="11">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="12">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="13">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="14">
                                <span class="cross"></span>
                            </div>
                            <div class="wrap_img empty" id="15">
                                <span class="cross"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /* ------------------------- information about house ------------------------ */ -->
                <div class="bl_info">

                    <div class="bl_name">
                        <label for="name">НАЗВАНИЕ:</label>
                        <input type="text" id="name" value="2 Таунхауса" placeholder="2 Таунхауса">
                    </div>

                    <div class="bl_status">
                        <label for="status">СТАТУС:</label>
                        <div class="wrap_input">
                            <input type="checkbox" id="status">
                            <label for="status">Продано</label>
                        </div>                    
                    </div>

                    <div class="bl_price">
                        <label for="price">ЦЕНА:</label>
                        <div class="wrap_input">
                            <input type="number" id="price" value="5 100 000" placeholder="5 100 000">
                            <p>РУБ.</p>
                        </div>  
                    </div>

                    <div class="bl_marketImg">
                        <label>Маркетинговые Изображения:</label>
                        <div class="wrap_input">
                            <label for="files_market" class="download" multiple accept="image/*" onClick="downloadImg('#files_market')">Загрузить</label>
                            <input type="file" id="files_market">
                            <input type="submit" class="delete" value="Удалить">
                        </div>  
                    </div>

                    <div class="bl_otherImg">
                        <label>Остальные Изображения:</label>
                        <div class="wrap_input">
                            <label for="files_other" class="download" multiple accept="image/*">Загрузить</label>
                            <input type="file" id="files_other" >
                            <input type="submit" class="delete" value="Удалить">
                        </div>  
                    </div>

                    <div class="bl_description">
                        <label>ОПИСАНИЕ:</label>
                        <textarea>Совершенно новый и невероятно архитектурно продуманный дом, который находится абсолютно не далеко от центра города и стоит настолько дешёво, что хватит ещё на мебель и технику, честное слово, отвечаю.</textarea>
                    </div>

                    <div class="bl_saveInfo">
                        <input type="submit" class="saveInfo" value="Сохранить">
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <!-- /* --------------------------------- script --------------------------------- */ -->
    <script src="script.js"></script>
</body>
</html>