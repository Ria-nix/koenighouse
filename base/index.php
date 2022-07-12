<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        $url = $_SERVER['HTTP_HOST'];
        // $new.=$_SERVER['REQUEST_URI'];   
        if($_SERVER['REQUEST_URI'] == '/admin'){
            header("Location:'.$url.'/main/index.php");
        }

    ?>
    <!-- <div class="wrap">
        <div class="menu">
            <a href="base/index.html#home">HOME</a>
            <a href="base/index.html#news">NEWS</a>
            <a href="base/index.html#gallery">GALLERY</a>
            <a href="base/index.html#theme">THEME</a>
            <a href="../new.html">new page</a>
        </div>
        <div class="content">
            <div class="bl_home" id="home">
                <h2>HOME</h2>
            </div>
            <div class="bl_news" id="news">
                <h2>NEWS</h2>
            </div>
            <div class="bl_gal" id="gallery">
                <h2>GALLERY</h2>
            </div>
            <div class="bl_theme" id="theme">
                <h2>THEME</h2>
            </div>
        </div>
    </div> -->
</body>
</html>