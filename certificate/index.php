<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подарочный сертификат в спа-центр \"Другое измерение\"");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "TIB_CONTENT",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>



<section class="advan-block wrapper">
<div class="advan-block__item">
	<div class="advan-block__img">
		<img src="/bitrix/templates/spa-di/images/pr1.png" alt="">
	</div>
	<div class="advan-block__text">
		Полезный подарок в любой ситуации
	</div>
</div>
<div class="advan-block__item">
	<div class="advan-block__img">
		<img src="/bitrix/templates/spa-di/images/pr2.png" alt="">
	</div>
	<div class="advan-block__text">
		Доставка в пределах Магнитогорска
	</div>
</div>
<div class="advan-block__item">
	<div class="advan-block__img">
		<img src="/bitrix/templates/spa-di/images/pr3.png" alt="">
	</div>
	<div class="advan-block__text">
		Отправим электронный сертификат на почту
	</div>
</div>
<div class="advan-block__item">
	<div class="advan-block__img">
		<img src="/bitrix/templates/spa-di/images/pr4.png" alt="">
	</div>
	<div class="advan-block__text">
		Срок действия сертификата 6 месяцев
	</div>
</div>
 </section>


<h1 class="main-title">подобрать подарочный сертификат</h1>

<?/*
<div class="tub-block wrapper" style="margin-bottom: 45px;">
	<div class="tub-block__item tub-block__item-activ" id="sum">
		На сумму
	</div>
	<div class="tub-block__item" id="proc">
		На процедуру
	</div>
	<div class="tub-block__item" id="spa">
		Спа-программы
	</div>
	<div class="tub-block__item" id="whom">
		Кому
	</div>
</div>
*/?>
<?$APPLICATION->IncludeFile(SITE_DIR."include/certificate.php",Array(),Array("MODE"=>"php"));?>


		
<h2 class="main-title">Выбрать подарочный сертификат</h2>
 <? if( $_REQUEST["SECTION_ID"] == "") $_REQUEST["SECTION_ID"] = "81" ?> 
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"template",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/cart/",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "template",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "TIB_CATALOG",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(),
		"LAZY_LOAD" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_FIELD_CODE" => array(0=>"",1=>"",),
		"OFFERS_LIMIT" => "5",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "6",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false},{'VARIANT':'1','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE_MOBILE" => array(),
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
<div class="opacity-block">
	<h2 class="main-title">О подарочных сертификатах</h2>
	<div class="opacity-block__text wrapper">
		<p>
			Приобретая подарочный сертификат в наш спа-центр, вы можете быть уверены, с подарком точно угодите.
		</p>
		<p>
			Эстетические услуги, уходовые программы, СПА-ритуалы... Из всего многообразия эксклюзивных услуг вы можете выбрать необходимые, включив в сертификат любую услугу из нашего меню или же составив индивидуальную СПА-программу. Либо, по желанию, просто приобрести сертификат с определённым номиналом, а обладатель сертификата выберет то, что ему по душе.
		</p>
		<p>
			«Подарочный сертификат» – превосходный вариант корпоративного подарка. Может быть, вы планируете отметить сотрудников за их достижения или поздравить с праздником? Тогда подарочный сертификат на услуги нашего центра превосходный выбор! Поверьте, такой подарок несомненно оценят высоко.
		</p>
		<p>
			Повод подарить сертификат может быть официальный: день рождения, свадьба, Новый год, День влюблённых, День Защитника Отечества, Международный женский день, именины или день ангела. Но можно подарить сертификат просто так, без повода. Спонтанный подарок, тем более такого уровня, всегда приятно получать
		</p>
		<p>
			Информацию о приобретении сертификатов вы можете уточнить по телефону +7 (3519) 580-111.
		</p>
	</div>
</div>
<h2 class="main-title">Вопрос-ответ</h2>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"template",
	Array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "template",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"DETAIL_TEXT",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>