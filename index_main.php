<?php
    header("Location: https://covidlist.online/main");
    exit;

    $url = $_SERVER['HTTP_HOST'];
    // $new.=$_SERVER['REQUEST_URI'];   
    if($_SERVER['REQUEST_URI'] == '/admin'){
        header("Location:'.$url.'/admin/auth");
    }
?>