<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <?php include_once('../helper.php') ?>    
</head>
<body>
    <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php include_once('../nav_footer/header.php') ?>
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */
    /* -------------------------------------------------------------------------- */ -->
    <div class="wrap">
        <div class="map">
            <img src="img/bg.svg" class="bg" alt="bg">
            <div class="houses">
                <svg class="svg">
                    <polygon fill="red" class="hitbox" points="127,381 126,388 146,403 153,443 248,533 434,466 426,410 324,325 316,324" id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="487,270 607,347 607,353 596,357 600,409 434,465 426,410 324,324 318,323" id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="616,230 616,240 629,244 633,291 746,360 885,305 885,261 809,172" id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="896,147 1028,206 1028,216 1016,216 1015,261 885,304 885,259 810,173"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="999,116 1000,121 1010,127 1011,167 1129,224 1241,180 1241,136 1156,67"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="1359,96 1359,100 1349,106 1346,150 1244,180 1243,135 1157,67 1224,47"id="1"></polygon>
                    <polygon fill="red" class="hitbox id7" points="734,790 562,682 558,610 736,528 787,539 888,656 888,717"id="1"></polygon>
                    <polygon fill="red" class="hitbox id8" points="873,465 1058,574 1039,589 1035,645 890,716 785,537 735,527"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="988,425 989,433 1002,440 1002,489 1165,582 1309,513 1312,461 1213,365 1130,368"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="1280,308 1462,390 1464,395 1445,404 1440,452 1311,511 1217,364 1138,365"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="1384,266 1384,276 1396,279 1391,325 1553,397 1668,343 1671,298 1582,210 1530,208"id="1"></polygon>
                    <polygon fill="red" class="hitbox" points="1611,175 1785,239 1785,249 1771,254 1767,294 1669,340 1671,296 1585,211 1533,207"id="1"></polygon>
                </svg>
                <div class="block">
                    <img src="img/houses/home_1a.svg" alt="house1a" class="house h1a">
                </div>
                <div class="block">
                    <img src="img/houses/home 1b.svg" alt="house1b" class="house h1b">
                </div>
                <div class="block">
                    <img src="img/houses/home 2a.svg" alt="house2a" class="house h2a">
                </div>
                <div class="block">
                    <img src="img/houses/home 2b.svg" alt="house2b" class="house h2b">
                </div>
                <div class="block">
                    <img src="img/houses/home 3a.svg" alt="house3a" class="house h3a">
                </div>
                <div class="block">
                    <img src="img/houses/home 3b.svg" alt="house3b" class="house h3b">
                </div>
                <div class="block">
                    <img src="img/houses/home 4a.svg" alt="house4a" class="house h4a">
                </div>
                <div class="block">
                    <img src="img/houses/home 4b.svg" alt="house4b" class="house h4b">
                </div>
                <div class="block">
                    <img src="img/houses/home 5a.svg" alt="house5a" class="house h5a">
                </div>
                <div class="block">
                    <img src="img/houses/home 5b.svg" alt="house5b" class="house h5b">
                </div>
                <div class="block">
                    <img src="img/houses/home 6a.svg" alt="house6a" class="house h6a">
                </div>
                <div class="block">
                    <img src="img/houses/home 6b.svg" alt="house6b" class="house h6b">
                </div> 
            </div>
            <div class="pop-up-alert">
                <h1>?????????????????????? ????????????</h1>
                <p>?????? ?????????????????????? ???? ??????????</p>
                <span class="material-symbols-outlined arrow-icon">trending_flat</span>
            </div>
        </div>
        <div class="popUpWindow">
            <div class="popUp-header">
                <h2>????????????????</h2>
                <h3>????. ?????????????? ?????????? ??????????????, ??? 3</h3>
            </div>
            <div class="popUp-body">
                <ul>
                    <li>??????????????????:<b>5 100 000 ???</b></li>
                    <li>?????????? ??????????????:<b>115 ????</b></li>
                </ul>
                <p>?????????????? ???? ??????, ?????????? ???????????????????? ?????????????????? ????????????????????.</p>
            </div>
        </div>
        <div class="house-info hiden">
            <nav class="close-info-container">
                <div class="close-btn">
                    <img src="img/close.svg" alt="?????????????? ???????? ?? ?????????????????????? ???????????????????? ????????">
                    <span>??????????????</span>
                </div>
            </nav>
            <div class="house-card-info">
                <div class="popUp-header">
                    <h2>????????????????</h2>
                    <h3>????. ?????????????? ?????????? ??????????????, ??? 3</h3>
                </div>
                <div class="popUp-body">
                    <ul>
                        <li>?????????????? ????????:<b>115 ????</b></li>
                        <li>?????????????? ??????????????:<b>500 ????</b></li>
                        <li>????????????????????:<b>???????????? 2022</b></li>
                        <li>??????????????????:<b>5 100 000 ???</b></li>
                    </ul>
                </div>
                <div class="popUp-footer">
                    <button class="main-btn red">????????????</button>
                </div>
            </div>
            <div class="house-recipe">
                <img src="img/recipe.png" alt="???????????? ????????">
            </div>
            <div class="house-layout">
                <img src="img/1.png" alt="???????????? ???????? ????????">
                <img src="img/2.png" alt="???????????? ???????? ????????">
            </div>
        </div>
        <!-- <div class="test">X = 0; Y = 0;</div> -->
        <div class="mobile">
            <h1 class="title">??????????</h1>
            <h3 class="sub-title">??????????????????</h3>
            <div class="types">
                <div class="sold">
                    <div class="circle"></div>
                    <p>??????????????</p>
                </div>
                <div class="free">
                    <div class="circle"></div>
                    <p>????????????????</p>
                </div>
            </div>
            <div class="flats">
                <div class="flats-card">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">1</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">2</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">3</p>
                </div>
                <div class="flats-card">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">4</p>
                </div>
                <div class="flats-card">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">5</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">6</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">7</p>
                </div>
                <div class="flats-card">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">8</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">9</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">10</p>
                </div>
                <div class="flats-card sold">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">11</p>
                </div>
                <div class="flats-card">
                    <div class="card-text">
                        <p class="address">????. ??????????????, ???3</p>
                        <p>5 100 000 ???</p>
                    </div>
                    <p class="number">12</p>
                </div>
            </div>
        </div>
        <p class="mobile_footer">?? ???????????????????? ?? ?????????????????????? - <span>msoft</span></p>
    </div>
     <!--/* -------------------------------------------------------------------------- */
    /*                                   FOOTER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php include_once('../nav_footer/footer.php') ?>    
    <!--/* -------------------------------------------------------------------------- */
    /*                                   SCRIPTS                                  */
    /* -------------------------------------------------------------------------- */ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/popUpWindows.js"></script>
    <script src="js/script.js"></script>
</body>
</html>