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

$cache = array();
foreach( $arResult['ITEMS'] as $k=>$arItem ) {
  if( !isset($cache[$arItem['IBLOCK_SECTION_ID']]) ) {
    $arFilter = array( 'IBLOCK_ID' => $arItem['IBLOCK_ID'], 'ID' => $arItem['IBLOCK_SECTION_ID'] );
    $res = CIBlockSection::GetList( array(), $arFilter, false, array('ID','NAME'), false );
    if( $ob = $res->GetNext() ) {
      $cache[$ob['ID']] = $ob['NAME'];
    }else{
      $cache[$ob['ID']] = false;
    }
  }
  $arResult['ITEMS'][$k]['SECTION_NAME'] = $cache[$arItem['IBLOCK_SECTION_ID']];
}
?>