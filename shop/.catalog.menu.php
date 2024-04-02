<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections",
    "",
    Array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/shop/",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
        "IBLOCK_TYPE" => "shop",
        "IBLOCK_ID" => "20",
        "DEPTH_LEVEL" => "4",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000"
    ),
    false
);

if( count($aMenuLinks) > 0 ) {
    $a = array($aMenuLinks[0]);
    unset($aMenuLinks[0]);
    $aMenuLinks = array_merge( $a, $aMenuLinksExt, $aMenuLinks );
}else{
    $aMenuLinks = $aMenuLinksExt;
}
?>