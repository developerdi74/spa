<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты компании БЬюти Инвест");
?>
<section>
	<div class="title-page text-center">
		<div class="center">
			<h1>Контакты</h1>
		</div>
	</div>
</section>
<section>
<div class="center">

 <?/*$GLOBALS["arrFilterIn_"] = array( "PROPERTY_STATUS" => 24 );*/?> 
<?/*$APPLICATION->IncludeComponent(
	"pitcom:catalog.filter",
	"salons",
	Array(
		"IBLOCK_TYPE" => "TIB_CONTENT",
		"IBLOCK_ID" => "9",
		"FILTER_NAME_IN" => "arrFilterIn_",
		"FILTER_NAME" => "arrF",
		"FIELD_CODE" => array(0=>"",),
		"PROPERTY_CODE" => array(0=>"TOWN",1=>"",),
		"FIELD_CODE_TEXT" => array(0=>"",1=>"",),
		"PROPERTY_CODE_TEXT" => array(0=>"",1=>"",),
		"PROPERTY_CODE_RANGE" => array(0=>"",1=>"",),
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SAVE_IN_SESSION" => "N",
		"PROPERTY_CODE_AVAILABILITY" => array(0=>"",1=>"",),
		"IGNORE_ACTIVE" => "N",
		"HIDDEN_NULL_FIELDS" => "N",
		"IS_MENU_CACHE" => "N",
		"PRICE_ID" => "",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);*/?> <?/*$GLOBALS["arrFilter"] = array( "PROPERTY_STATUS" => $GLOBALS["arrFilterIn_"]["PROPERTY_STATUS"] );*/?> 
<?/*if(strlen($_REQUEST["arrFilter_ff"]['NAME'])>0) $GLOBALS["arrFilter"]["PROPERTY_TOWN"] = $_REQUEST["arrFilter_ff"]['NAME'];*/?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"contact",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "TIB_CONTENT",
		"IBLOCK_ID" => "9",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array("WORKHOURS","ADDRESS","PHONES","EMAIL","COORDS","IS_MAIN"),
		"OFFERS_LIMIT" => "5",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array(),
		"USE_PRODUCT_QUANTITY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?>

</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>