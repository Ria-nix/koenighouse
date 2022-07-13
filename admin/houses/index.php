<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../helper_admin.php')?>
    <title>Дома проекта «2 Таунхауса»</title>    
</head>
<body>
     <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php $class_btn = '<a class="back_arrow" onClick="goBack()">Назад</a>'; include_once('../nav/index.php'); ?>   
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */
    /* -------------------------------------------------------------------------- */ -->
    <div class="content_wrap">
        <div class="content_proj">
            <p class="heading">Дома проекта «2 Таунхауса»</p>
            <!-- /* ------------------------------ all houses ------------------------------ */ -->
            <div class="bl_projects">
                <!-- /* ------------------------------ the card with info about house ------------------------------ */ -->
                <div class="bl_card">
                    <div class="image"></div>
                    <div class="bl_text">
                        <p class="main_head"><span>Название:</span> 2 Таунхауса</p>
                    </div>
                    <div class="btns">
                        <input type="submit" class="edit_btn" value="Редактировать">            
                    </div>
                </div>
                <!-- /* -------------------- THE END OF the card with info about house -------------------- */ -->
            </div>
            <!-- /* ------------------------------ THE END OF all houses ------------------------------ */ -->
        </div>        
    </div>
</body>
</html>