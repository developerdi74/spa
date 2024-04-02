<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//echo'<pre>';print_r($arResult);echo'</pre>';
?>

<div class="services-slider">

  <?foreach( $arResult['ITEMS'] as $arItem ):?>

    <div class="services-slider-thumb">
      <div class="services-slider-thumb-photo">
        <?if( $file = CFile::ResizeImageGet( ( $arItem['PREVIEW_PICTURE'] ? $arItem['PREVIEW_PICTURE'] : $arItem['DETAIL_PICTURE'] ), array('width'=>213,'height'=>240), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
          <img src="<?=$file['src']?>" alt="">
        <?else:?>
          <img src="<?=SITE_TEMPLATE_PATH?>/images/tmb-service-noimage.png" alt="">
        <?endif?>
      </div>
      <div class="services-slider-thumb-description">
        <h6><?=$arItem['SECTION_NAME']?></h6>
        <h4><?=$arItem['NAME']?></h4>
      </div>
      <a class="services-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
    </div>

  <?endforeach?>

</div>
