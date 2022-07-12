<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php include_once('../helper_admin.php')?>
    <title>Авторизация Koenighouse</title>
</head>
<body>
     <!--/* -------------------------------------------------------------------------- */
    /*                                   HEADER                                   */
    /* -------------------------------------------------------------------------- */ -->
    <?php include_once('../nav/index.php') ?>
    <!--/* -------------------------------------------------------------------------- */
    /*                                   CONTENT                                  */
    /* -------------------------------------------------------------------------- */ -->
    <div class="grid_wrap">
        <form action="">
            <img src="../images/Logo.svg" alt="logo">
            <div class="fields">
                <input type="text" placeholder="Введите логин" require>
                <input type="password" placeholder="Введите пароль" require>
            </div>
            <input class="come_in" type="submit" value="Войти">
        </form>
    </div>
</body>
</html>