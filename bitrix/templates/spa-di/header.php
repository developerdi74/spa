<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>

<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i|PT+Serif:400,400i,700,700i&amp;subset=cyrillic-ext" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ion.rangeSlider.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css"/>
	
    
	<!--jQuery-->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.3.1.min.js"></script>
	
	<!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>


</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">
	
<?$APPLICATION->ShowPanel()?>

	<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"template", 
	array(
		"HIDE_ON_BASKET_PAGES" => "N",
		"PATH_TO_AUTHORIZE" => "",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "Y",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_PRODUCTS" => "N",
		"SHOW_REGISTRATION" => "N",
		"SHOW_TOTAL_PRICE" => "N",
		"COMPONENT_TEMPLATE" => "template",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_PRICE" => "Y",
		"SHOW_SUMMARY" => "Y",
		"POSITION_HORIZONTAL" => "right",
		"POSITION_VERTICAL" => "top",
		"MAX_IMAGE_SIZE" => "70"
	),
	false
);?>
 

<div class="<? if ($APPLICATION->GetCurPage(false) !== '/certificate/'): ?>header__page<? endif; ?>">
	<header class="header"> 
		<div class="header__phone">
			
			<a href="tel:+73519580111" oclick="ym(43876804,'reachGoal','phone-cert')">
				<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php",Array(),Array("MODE"=>"text"));?>
			</a> &nbsp;  &nbsp;

			<a style="color: #18a38d;" href="/">
				spa-di.ru
			</a>

		</div>
		<div class="header__logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Другое измерение" /></a></div>
<?if($USER->IsAuthorized()):?>
        <div class="links">
            <button class="btn btn-primary open-search">
                Поиск
            </button>
        </div>
<?endif;?>
		<div class="header__social" style="padding-left:116px;">
				<a class="header__ico" href="https://www.instagram.com/drugoeizmereniespa/"><img src="<?=SITE_TEMPLATE_PATH?>/images/instagram.png" /></a>
				<a class="header__ico" href="https://vk.com/drugoeizmereniespa"><img src="<?=SITE_TEMPLATE_PATH?>/images/vk.png" /></a>
			</div>
	</header>
</div>
<?if($USER->IsAuthorized()):?>
    <div class="wrapper search-input-shop" style="<?=$_GET['q']?"":"display: none";?>">
        <form action="/shop/" method="get" class="form-search">
            <input type="text" name="q" value="<?=$_GET['q']?>" placeholder="Введите текст">
            <input class="btn btn-primary" type="submit" value="Найти">
        </form>
    </div>

    <div class="container-menu-catalog">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "shop-catalog-menu", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "4",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "COMPONENT_TEMPLATE" => "horizontal_multilevel"
        ),
        false
    );?>
    </div>

    <div class="wrapper">
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            Array()
        );?>
    </div>
<?endif;?>
<? if($APPLICATION->GetCurPage() != "/certificate/"):?>
<div class="main-title">
    <h1><?=$APPLICATION->ShowTitle(true);?></h1>
</div>
<? endif;?>