<?php
if (empty($_GET["house_id"])) \inc\artemy\v1\json_output\JsonOutput::error("House Id пустой");
$house = \DB\HousesQuery::create()->findOneById($_GET["house_id"]);
if ($house === null) \inc\artemy\v1\json_output\JsonOutput::error("Не найден house Id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="mobile_ver/scss/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    
    <?php include_once('src/public/page/helper.php') ?>

    <title>Купить таунхаус в Калининграде по адресу<?= $house->getAddress() ?></title>
</head>

<body>
<!--/* -------------------------------------------------------------------------- */
/*                                   HEADER                                   */
/* -------------------------------------------------------------------------- */ -->
<?php include_once('src/public/page/nav_footer/header.php') ?>
<div class="wrap content">
<div class="dark_fon none" onClick="closeFon()"></div>
    <h1 class="title"><?= $house->getName() ?></h1>
    <h3 class="sub-title"><?= $house->getAddress() ?></h3>
    <div class="summary">
        <p class="title">Сводка</p>
        <div class="table">
            <div class="left">
                <div class="house-area">
                    <p class="summary-name">Площадь дома:</p>
                    <p class="summary-value"><?= $house->getLivingSpace() ?> м<sup>2</sup></p>
                </div>
                <div class="readiness">
                    <p class="summary-name">Готовность:</p>
                    <p class="summary-value"><?php
                        $date = $house->getDoReady();
                        $intlFormatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
                        $intlFormatter->setPattern('LLLL Y');

                        echo $intlFormatter->format($date);
                        ?></p>
                </div>
            </div>
            <div class="right">
                <div class="land-area">
                    <p class="summary-name">Площадь участка:</p>
                    <p class="summary-value"><?= $house->getLandArea() ?> м<sup>2</sup></p>
                </div>
                <div class="price">
                    <p class="summary-name">Стоимость:</p>
                    <p class="summary-value"><?= $house->getPrice() ?> руб.</p>
                </div>
            </div>
        </div>
        <a href="tel:+7412979333" class="buy_btn">Купить</a>
    </div>
    <div class="blueprint">
        <div class="title">
            <p>План</p>
        </div>
        <div class="house-blueprint">
            <img src="/api/GET/v1/house/image/plan?house_id=<?= $house->getId() ?>" alt="blueprint">
            <div class="zoom-icon">
                <span class="material-symbols-outlined">zoom_in</span>
            </div>
        </div>
    </div>
    <div class="photo">
        <p class="title">Фото</p>
        <div class="gallery">
            <div class="image-container">
                <img src="/api/GET/v1/house/image/main1?house_id=<?= $house->getId() ?>" alt="house1">
            </div>
            <div class="image-container">
            <img src="/api/GET/v1/house/image/main2?house_id=<?= $house->getId() ?>" alt="house2">
            </div>
            <?php
            $other_images = \DB\HouseImagesQuery::create()->findByHouseId($house->getId());
            foreach ($other_images as $image) { ?>
                <div class="image-container">
                    <img src="/api/GET/v1/house/image/other?image_id=<?= $image->getId() ?>" alt="other image">
                </div>
            <?php } ?>
        </div>
        <p class="more">Показать все</p>
    </div>
</div>
<div class="zoom">
    <div class="zoom-content">
        <p class="close-zoom">Закрыть</p>
        <img src="/api/GET/v1/house/image/plan?house_id=<?= $house->getId() ?>" alt="blueprint">
    </div>
</div>
<script src="js/script.js"></script>
</body>

</html>