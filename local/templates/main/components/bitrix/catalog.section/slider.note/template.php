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

<div class="articles-slider">
  <?foreach( $arResult['ITEMS'] as $arItem ):?>
    <div class="articles-slider-thumb">
      <div class="articles-slider-thumb-container">
        <span class="articles-slider-thumb-left-top"></span>
        <span class="articles-slider-thumb-right-top"></span>
        <span class="articles-slider-thumb-left-bottom"></span>
        <span class="articles-slider-thumb-right-bottom"></span>
        <span class="articles-slider-thumb-left-bg"></span>
        <span class="articles-slider-thumb-right-bg"></span>
        <span class="articles-slider-thumb-top-bg"></span>
        <span class="articles-slider-thumb-bottom-bg"></span>
        <?if( $arItem['PREVIEW_PICTURE'] ):?>
          <?if( $file = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE'], array('width'=>230,'height'=>230), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
            <img src="<?=$file['src']?>" width="230" height="230" alt="" style="margin-bottom:30px;">
          <?endif?>
        <?endif?>
        <h4><?=$arItem['NAME']?></h4>
        <p><?=$arItem['PREVIEW_TEXT']?></p>
      </div>
      <a class="articles-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
    </div>
  <?endforeach?>
</div>

<?if( $arResult['IBLOCK_ID'] == 12 ):?>
  <p class="text-center"><a class="button icon-arrow-right" href="/news/" title="">Все новости</a></p>
<?else:?>
  <p class="text-center"><a class="button icon-arrow-right" href="/articles/" title="">Все статьи</a></p>
<?endif?>