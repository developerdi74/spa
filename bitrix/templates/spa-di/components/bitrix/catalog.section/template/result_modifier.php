<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"tree", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "N",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "tree",

	),
	false
);