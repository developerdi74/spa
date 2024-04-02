<?php
$url = $_SERVER['REQUEST_URI'];
$title = "";
$scriptC=0;
if(strpos($url, "cosmetolog") !== false){
    $title = "Консультация косметолога Другое измирение";
    $scriptC=1;
}
if(strpos($url, "carbon_peeling") !== false){
    $title = "Карбоновый пилинг Другое измирение";
}

?>
<!doctype html>
<html lang="ru">
<head>
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(43876804, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../template/css/bootstrap.min.css">
    <link rel="stylesheet" href="../template/css/main.css">
    <?if($scriptC == 1):?>
        <link rel="stylesheet" href="../template/css/cosmetolog.css">
    <?endif?>
    <title><?=$title?></title>
</head>
<body>
<header>
    <div class="container-fluid p-0 bg-theme">
        <div class="header row align-items-center">
            <div class="logo col-xs-12 col-sm-6 col-md-7 col-lg-9 p-0">
                <a href="/"><img src="../template/images/logo.png" alt=""></a>
            </div>
            <div class="social col-2 col-sm-2 col-md-2 col-lg-1 left-border-white">
                <a href="" class="icon icon-vk"></a>
                <a href="" class="icon icon-insta"></a>
            </div>
            <div class="phone col-12 col-sm-4 col-md-3 col-lg-2 text-lg-right p-0">
                <a href="tel:+7(3519) 580-111">+7(3519) 580-111</a>
            </div>
        </div>
    </div>
</header>
<main>