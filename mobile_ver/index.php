<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="wrap">
        <h1 class="title">Таунхаус</h1>
        <h3 class="sub-title">Ул. свободы, №3</h3>
        <div class="summary">
            <p class="title">Сводка</p>
            <div class="table">
                <div class="left">
                    <div class="house-area">
                        <p class="summary-name">Площадь дома:</p>
                        <p class="summary-value">115 м<sup>2</sup></p>
                    </div>
                    <div class="readiness">
                        <p class="summary-name">Готовность:</p>
                        <p class="summary-value">Апрель 2022</p>
                    </div>
                </div>
                <div class="right">
                    <div class="land-area">
                        <p class="summary-name">Площадь участка:</p>
                        <p class="summary-value">500 м<sup>2</sup></p>
                    </div>
                    <div class="price">
                        <p class="summary-name">Стоимость:</p>
                        <p class="summary-value">5 100 000 руб.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blueprint">
            <div class="title">
                <p>План</p>
            </div>
            <div class="house-blueprint">
                <img src="img/plan.png" alt="blueprint">
                <div class="zoom-icon">
                    <span class="material-symbols-outlined">zoom_in</span>
                </div>
            </div>
        </div>
        <div class="photo">
            <p class="title">Фото</p>
            <div class="gallery">
                <img src="img/house1.png" alt="house1">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
                <img src="img/house2.png" alt="house2">
            </div>
            <p class="more">Показать все</p>
        </div>
    </div>
    <div class="zoom">
        <div class="zoom-content">
            <p class="close-zoom">Закрыть</p>
            <img src="img/plan.png" alt="">
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>