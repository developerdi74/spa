<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<div class="our-services">
	<div class="center">
		<div class="title-container text-center"><h3>Наши Услуги</h3></div>
</div></div>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main.usluga", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "main"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>