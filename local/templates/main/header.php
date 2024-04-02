<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><!DOCTYPE html>
<html lang="en">
<head>

<!-- Yandex.Metrika counter -->
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
<noscript><div><img src="https://mc.yandex.ru/watch/43876804" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--  <meta name="yandex-verification" content="70100778010e035c" />
	<meta name="yandex-verification" content="ac1e679a18d1b685" /> -->

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery-1.10.2.1min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery-migrate-1.2.1.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery.formstyler.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery-ui.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/slick.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery.magnific-popup.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/jquery.mousewheel.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lib/enquire.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');?>
<script src="//code.jivo.ru/widget/yT521h1V4T" async></script>
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#5f978e">


</head>
<body>
    <?$APPLICATION->ShowPanel();?>

	<a href="https://spa-di.ru/certificate/" class="idea-podarok"></a>

<div class="page-container">
	<div class="content-container">

		<!--header-->
<header>
    <div class="center">
        <div class="header">
            <div class="header-logo">
                <a href="/" title="">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="">
                </a>
            </div>
            <div class="header-social">
                <p>
					<a class="icon-vk" onclick="ym(43876804,'reachGoal','vk')" href="https://vk.com/drugoeizmereniespa" title=""></a>
					<a class="icon-inst" onclick="ym(43876804,'reachGoal','inst')" href="https://www.instagram.com/drugoeizmereniespa/" title=""></a></p>
            </div>

            <div class="header-phone">
              <p><a class="button button-white icon-note" href="tel:+73519580111" title="" onclick="ym(43876804,'reachGoal','onlinezvonok')">+7 (3519) 580-111</a></p>
            </div>

			<? /*
            <?$APPLICATION->IncludeComponent( 'pitcom:feedback', 'zapis', false, false );?>
			*/ ?>
            <form method="get" action="/search/" class="header-search">
                <p><input placeholder="Поиск" name="q" type="search"><button></button></p>
            </form>

            <div class="header-nav">
                <a class="icon-drop" href="#" title=""><span class="icon-nav"><span></span></span>Меню</a>
            </div>

        </div>
    </div>
</header>

<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array( "ROOT_MENU_TYPE" => "top", "MENU_CACHE_TYPE" => "N", "MENU_CACHE_TIME" => "3600000", "MENU_CACHE_USE_GROUPS" => "N", "MENU_CACHE_GET_VARS" => array(), "MAX_LEVEL" => "2", "CHILD_MENU_TYPE" => "left", "USE_EXT" => "Y", "DELAY" => "N", "ALLOW_MULTI_SELECT" => "N" ), false );?>