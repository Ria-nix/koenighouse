<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../helper_admin.php')?>
    <sctipt src="script.js"></sctipt>
    <title>Редактирование «2 Таунхауса»</title>    
</head>
<body>
    <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php 
        $class_btn = '<a class="back_arrow" onClick="goBack()">Назад</a>'; 
        include_once('../nav/index.php'); 
    ?>   
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */
    /* -------------------------------------------------------------------------- */ -->

    <div class="content_wrap">
        <div class="content_proj">
            <p class="heading">РЕДАКТИРОВАНИЕ <span>«2 Таунхауса»</span></p>

            <div class="house_info">
                <!-- /* ------------------------------ all projects ------------------------------ */ -->
                <div class="bl_image">
                    <div class="slider">
                        <span class="arrow left"></span>
                        <span class="arrow right"></span>
                    </div>
                    <div class="under_one">
                        <p>Маркетинговое изображение</p>
                        <span class="trash"></span>
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
                            <input type="text" id="price" value="5 100 000" placeholder="5 100 000">
                            <p>РУБ.</p>
                        </div>  
                    </div>

                    <div class="bl_marketImg">
                        <label>Маркетинговые Изображения:</label>
                        <div class="wrap_input">
                            <input type="submit" class="download" value="Загрузить">
                            <input type="submit" class="delete" value="Удалить">
                        </div>  
                    </div>

                    <div class="bl_otherImg">
                        <label>Остальные Изображения:</label>
                        <div class="wrap_input">
                            <input type="submit" class="download" value="Загрузить">
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
</body>
</html>