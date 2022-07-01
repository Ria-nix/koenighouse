    <div class="layout_wrap layout_menu">
    <div class="main_wrap">

        <img src="../images/logo.svg" alt="logo">
        <div class="toggle_wrap" onClick="toggleButton()">
            <span class="toggle_open" id="toggle_btn"></span>
        </div>

        <div class="sidebar">
            <div class="menu" id="main_menu">
                <a href="#id_advantage" name="name_advantages">
                    <span class="icon_link" id="advantages"></span>
                    <p class="item_txt">Преимущества</p>
                    <span class="underline"></span>
                </a>
                <a href="#id_project" name="name_projects">
                    <span class="icon_link" id="projects"></span>
                    <p class="item_txt">Проекты</p>
                    <span class="underline"></span>
                </a>
                <a href="#id_gallery" name="name_gallery">
                    <span class="icon_link" id="gallery"></span>
                    <p class="item_txt">Галерея</p>
                    <span class="underline"></span>
                </a>                  
            </div>
            <div class="big_text" onClick="bank()">
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
<script src="script.js"></script>