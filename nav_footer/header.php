
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../nav_footer/style/style.css">
    <title>nav</title>
</head>
<body>
    
<div class="layout_wrap layout_menu">
    <div class="main_wrap">

        <img src="../images/logo.svg" alt="logo">
        <div class="toggle_wrap" onClick="toggleButton()">
            <span class="toggle_open" id="toggle_btn"></span>
        </div>

        <div class="sidebar">
            <div class="menu">
                <a href="#" name="name_advantages">
                    <span class="icon_link" id="advantages"></span>
                    <p class="item_txt">Преимущества</p>
                    <span class="underline"></span>
                </a>
                <a href="#" name="name_projects">
                    <span class="icon_link" id="projects"></span>
                    <p class="item_txt">Проекты</p>
                    <span class="underline"></span>
                </a>
                <a href="#" name="name_gallery">
                    <span class="icon_link" id="gallery"></span>
                    <p class="item_txt">Галерея</p>
                    <span class="underline"></span>
                </a>                  
            </div>
            <div class="big_text">
                <p>Ипотека <span>2.7</span>%</p>
            </div>
            <div class="btn_home">
                <input type="submit" value="выбрать дом">
            </div>
            <div class="media_info">
                <div class="bl_address wrap_info">
                    <span class="icon_link" id="address"></span>
                    <div class="text_link">
                        <p class="name_address name">Адрес</p>
                        <span class="info_address info">г.Калининград,  ул.Свободы 45</span>
                    </div>
                </div>
                <div class="bl_tel wrap_info">
                    <span class="icon_link" id="telefon"></span>
                    <div class="text_link">
                        <p class="name_tel name">Телефон</p>
                        <span class="info_tel info">+7 (412) 979-333</span>
                    </div>
                </div>
                <div class="bl_email wrap_info">
                    <span class="icon_link" id="email"></span>
                    <div class="text_link">
                        <p class="name_email name">E-mail</p>
                        <span class="info_email info">support@koenighouse.ru</span>
                    </div>
                </div>
            </div>
        </div>                   
    </div>
</div>

</body>
</html>