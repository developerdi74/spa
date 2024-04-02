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

//if( $arResult['IBLOCK_ID'] == 10 ) {
  $a = array();
  if( $arResult['DETAIL_PICTURE'] ) $a[] = $arResult['DETAIL_PICTURE']['ID'];
  if( $arResult['MORE_PHOTO'] ) foreach( $arResult['MORE_PHOTO'] as $arItem ) $a[] = $arItem['ID'];
  if( count($a) > 0 ) $arResult['PICS'] = $a;
//}

if( $arResult['DISPLAY_PROPERTIES']['PEOPLE_ID'] ) {
  $arSelect = array( 'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 6, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['PEOPLE_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['PEOPLE_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'TEXT' => $ob['PREVIEW_TEXT'],
      'FOTO' => ( $ob['PREVIEW_PICTURE'] ? $ob['PREVIEW_PICTURE'] : $ob['DETAIL_PICTURE'] ),
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
  }
}

if( $arResult['DISPLAY_PROPERTIES']['NOTES_ID'] ) {
  $arSelect = array( 'ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 4, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['NOTES_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['NOTES_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'TEXT' => $ob['PREVIEW_TEXT'],
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
  }
}


if( $arResult['DISPLAY_PROPERTIES']['ITEM_ID'] ) {
  $arSelect = array( 'ID', 'NAME', 'IBLOCK_SECTION_ID', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 10, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  $arSections = array();
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'SECTION_ID' => $ob['IBLOCK_SECTION_ID'],
      'PICTURE' => ( $ob['PREVIEW_PICTURE'] ? $ob['PREVIEW_PICTURE'] : $ob['DETAIL_PICTURE'] ),
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
    $arSections[$ob['IBLOCK_SECTION_ID']] = false;
  }
  //
  $arSelect = array( 'ID', 'NAME' );
  $arFilter = array( 'IBLOCK_ID' => 10, 'ACTIVE' => 'Y', 'ID' => array_keys($arSections) );
  $res = CIBlockSection::GetList( array(), $arFilter, false, $arSelect, false );
  while( $ob = $res->GetNext() ) {
    foreach( $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA'] as $k=>$arItem ) {
      if( $arItem['SECTION_ID'] == $ob['ID'] ) $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA'][$k]['SECTION_NAME'] = $ob['NAME'];
    }
  }
  //echo'<pre>';print_r($arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA']);echo'</pre>';
}

// Аппараты...
if( $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['~VALUE'] && is_array($arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['~VALUE'])) {
  $arSelect = array( 'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 11, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'TEXT' => $ob['PREVIEW_TEXT'],
      'PICTURE' => $ob['PREVIEW_PICTURE'],
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
  }
}

// Бренды...
if( $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['~VALUE'] && count($arResult['DISPLAY_PROPERTIES']['BRAND_ID']['~VALUE']) > 0 ) {
  $arSelect = array( 'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 2, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'TEXT' => $ob['PREVIEW_TEXT'],
      'PICTURE' => $ob['PREVIEW_PICTURE'],
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
  }
//print_r($arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA']);
}

// Препараты...
if( $arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['~VALUE'] && count($arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['~VALUE']) > 0 ) {
  $arSelect = array( 'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', 'DETAIL_PAGE_URL' );
  $arFilter = array( 'IBLOCK_ID' => 1, 'ACTIVE' => 'Y', 'ID' => $arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['~VALUE'] );
  $res = CIBlockElement::GetList( array(), $arFilter, false, false, $arSelect );
  while( $ob = $res->GetNext() ) {
    $arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['DATA'][] = array(
      'ID' => $ob['ID'],
      'NAME' => $ob['NAME'],
      'TEXT' => $ob['PREVIEW_TEXT'],
      'PICTURE' => ( $ob['PREVIEW_PICTURE'] ? $ob['PREVIEW_PICTURE'] : $ob['DETAIL_PICTURE'] ),
      'DETAIL_PAGE_URL' => $ob['DETAIL_PAGE_URL']
    );
  }
}

//if($USER->IsAdmin()):
    if( $arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['VALUE']) {
        $arSelect = array( 'ID', 'NAME', 'PROPERTY_PRICE', 'PROPERTY_UF_UNVERS_ID');
        $arFilter = array( 'IBLOCK_ID' => 19,
            'ACTIVE' => 'Y',
            'SECTION_ID' => $arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['VALUE'],
            "INCLUDE_SUBSECTIONS" => "Y"
        );
        $res = CIBlockElement::GetList( array('SORT'=>"asc"), $arFilter, false, false, $arSelect );
        while( $ob = $res->GetNext() ) {
            $arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['DATA'][] = array(
                'ID' => $ob['ID'],
                'NAME' => $ob['NAME'],
                'PRICE' => $ob['PROPERTY_PRICE_VALUE'],
                'UF_UNVERS_ID' => $ob['PROPERTY_UF_UNVERS_ID_VALUE'],
            );
        }
        //dd($arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['DATA']);
    }
//endif;

preg_match_all( '/<block>(.*?)<\/block>/i' , $arResult['DETAIL_TEXT'], $matches ); 
$arResult['DETAIL_TEXT_ARRAY'] = array();
if( is_array($matches[0]) && count($matches[0]) > 0 ) {
  foreach( $matches[0] as $a ) {
    $p = strpos( $arResult['DETAIL_TEXT'], $a );
    $arResult['DETAIL_TEXT_ARRAY'][] = substr( $arResult['DETAIL_TEXT'], 0, $p );
    $arResult['DETAIL_TEXT'] = substr( $arResult['DETAIL_TEXT'], $p+strlen($a) );
    $arResult['DETAIL_TEXT_ARRAY'][] = substr( substr( $a, 7 ), 0, -8 );
  }
  $arResult['DETAIL_TEXT_ARRAY'][] = $arResult['DETAIL_TEXT'];
}else{
  $arResult['DETAIL_TEXT_ARRAY'] = array($arResult['DETAIL_TEXT']);
}

/*
$arResult['DETAIL_TEXT'] = str_replace( 
  '<block>', 
  '<div class="text-container-important">
     <span class="text-container-important-left-top"></span>
     <span class="text-container-important-right-top"></span>
     <span class="text-container-important-left-bottom"></span>
     <span class="text-container-important-right-bottom"></span>
     <span class="text-container-important-left-top-two"></span>
     <span class="text-container-important-right-top-two"></span>
     <span class="text-container-important-left-bottom-two"></span>
     <span class="text-container-important-right-bottom-two"></span>
     <div class="text-container-important-container">
       <div class="text-container-important-title">
         <p><img src="'.SITE_TEMPLATE_PATH.'/images/text-container-important-title.png" alt=""></p>
       </div>',
  $arResult['DETAIL_TEXT']
);
$arResult['DETAIL_TEXT'] = str_replace( 
  '</block>', 
  '    <div class="text-container-important-title"></div>
     </div>
   </div>',
  $arResult['DETAIL_TEXT']
);
*/
?>