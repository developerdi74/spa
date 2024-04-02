<?
use Bitrix\Main\Type\Collection;
use Bitrix\Currency\CurrencyTable;
use Bitrix\Iblock;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
//echo'<pre>';print_r($arResult);echo'</pre>';
CModule::IncludeModule('iblock');

// Специалисты...
$arSelect = array( 'ID', 'NAME' );
$arFilter = array( 'IBLOCK_ID' => 6, 'ACTIVE' => 'Y' );
$arSort = array( 'NAME' => 'ASC', 'ID' => 'DESC' );
$res = CIBlockElement::GetList( $arSort, $arFilter, false, false, $arSelect );
while( $ob = $res->GetNext() ) {
  $arResult['PEOPLES'][] = array(
    'ID' => $ob['ID'],
    'NAME' => $ob['NAME']
  );
}

// Услуги...
$arSelect = array( 'ID', 'NAME' );
$arFilter = array( 'IBLOCK_ID' => 10, 'ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1 );
$arSort = array( 'NAME' => 'ASC', 'ID' => 'DESC' );
$res = CIBlockSection::GetList( $arSort, $arFilter, false, $arSelect, false );
while( $ob = $res->GetNext() ) {
  $arResult['SERVICES'][] = array(
    'ID' => $ob['ID'],
    'NAME' => $ob['NAME']
  );
}
?>