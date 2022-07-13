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
                        <label for="">НАЗВАНИЕ:</label>
                        <input type="text">
                    </div>

                    <div class="bl_status">
                        <label for="">СТАТУС:</label>
                        <div class="wrap_input">
                            <input type="checkbox">
                            <p>Продано</p>
                        </div>                    
                    </div>

                    <div class="bl_name">
                        <label for="">ЦЕНА:</label>
                        <div class="wrap_input">
                            <input type="checkbox">
                            <p>РУБ.</p>
                        </div>  
                    </div>

                    <div class="bl_name">
                        <label for="">Маркетинговые Изображения:</label>
                        <div class="wrap_input">
                            <input type="submit" class="download" value="Загрузить">
                            <input type="submit" class="delete" value="Удалить">
                        </div>  
                    </div>

                    <div class="bl_name">
                        <label for="">Остальные Изображения:</label>
                        <div class="wrap_input">
                            <input type="submit" class="download" value="Загрузить">
                            <input type="submit" class="delete" value="Удалить">
                        </div>  
                    </div>

                    <div class="bl_name">
                        <label for="">ОПИСАНИЕ:</label>
                        <textarea name="" id="">
                            Совершенно новый и невероятно архитектурно продуманный дом, который находится абсолютно не далеко от центра города и стоит настолько дешёво, что хватит ещё на мебель и технику, честное слово, отвечаю.
                        </textarea>
                    </div>

                    <div class="bl_saveInfo">
                        <input type="submit" class="saveInfo">
                    </div>
                </div>
            </div>
            

        </div>        
    </div>
</body>
</html>