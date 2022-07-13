<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../helper_admin.php')?>
    <title>Проекты Koenighouse</title>    
</head>
<body>
     <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php 
        $class_btn = '<a href="../auth/index.php" class="exit">Выйти</a>';
        include_once('../nav/index.php');
    ?>
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */
    /* -------------------------------------------------------------------------- */ -->
    <div class="content_wrap">
        <div class="content_proj">
            <p class="heading">Проекты</p>

            <!-- /* ------------------------------ all projects ------------------------------ */ -->
            <div class="bl_projects">
                <!-- /* -------------------- the card with info about project -------------------- */ -->
                <div class="bl_card">
                    <div class="image"></div>
                    <div class="bl_text">
                        <p class="main_head"><span>Название:</span> 2 Таунхауса</p>
                        <p class="description"><span>Описание:</span> совершенно новый и невероятно архитектурно продуманный дом, который находится абсолютно не далеко от центра города и стоит настолько дешёво, что хватит ещё на мебель и технику, честное слово, отвечаю.</p>
                    </div>
                    <div class="btns">
                        <input type="submit" class="edit_btn" value="Редактировать">
                        <input type="submit" class="open_btn" value="Открыть">                
                    </div>
                </div>
                <!-- /* -------------------- THE END OF the card with info about project -------------------- */ -->

            </div>
            <!-- /* ------------------------------ THE END OF all projects ------------------------------ */ -->
        </div>        
    </div>
    <sctipt src="script.js"></sctipt>
</body>
</html>