<?if( $arItem == 'apparats' ):?>

  <?if( $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['DATA'] ):?>
    <div class="specialists">
      <div class="text-container-title text-center">
        <h4>Наши аппараты</h4>
      </div>
      <div class="center">
            <div class="specialists-slider">
              <?foreach( $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['DATA'] as $arItem ):?>
                <div class="specialists-slider-thumb">
                  <div class="specialists-slider-thumb-photo">
                    <?$file = CFile::ResizeImageGet( $arItem['PICTURE'], array('width'=>166,'height'=>166), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                    <img src="<?=$file['src']?>" alt="">
                  </div>
                  <div class="specialists-slider-thumb-description">
                    <h4><?=$arItem['NAME']?></h4>
                    <h6><?=$arItem['TEXT']?></h6>
                  </div>
                  <a class="specialists-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
                </div>
              <?endforeach?>
            </div>
      </div>
    </div>
  <?endif?>

<?elseif( $arItem == 'brands' ):?>

  <?if( $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA'] ):?>
    <div class="specialists">
      <div class="text-container-title text-center">
        <h4>Наши бренды</h4>
      </div>
      <div class="center">
            <div class="specialists-slider">
              <?foreach( $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA'] as $arItem ):?>
                <div class="specialists-slider-thumb">
                  <div class="specialists-slider-thumb-photo">
                    <?$file = CFile::ResizeImageGet( $arItem['PICTURE'], array('width'=>166,'height'=>166), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                    <img src="<?=$file['src']?>" alt="">
                  </div>
                  <div class="specialists-slider-thumb-description">
                    <h4><?=$arItem['NAME']?></h4>
                    <h6><?=$arItem['TEXT']?></h6>
                  </div>
                  <a class="specialists-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
                </div>
              <?endforeach?>
            </div>
      </div>
    </div>
  <?endif?>

<?elseif( $arItem == 'apparats&brands' ):?>

  <?$arData = array();?>
  <?if( $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['DATA'] ) $arData = array_merge( $arData, $arResult['DISPLAY_PROPERTIES']['APPARAT_ID']['DATA'] );?>
  <?if( $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA'] ) $arData = array_merge( $arData, $arResult['DISPLAY_PROPERTIES']['BRAND_ID']['DATA'] );?>
  <?if( count($arData) > 0 ):?>
    <?shuffle($arData)?>
    <div class="specialists">
      <?/*<div class="text-container-title text-center"><h4>Наши бренды</h4></div>*/?>
      <div class="center">
            <div class="specialists-slider">
              <?foreach( $arData as $arItem ):?>
                <div class="specialists-slider-thumb">
                  <div class="specialists-slider-thumb-photo">
                    <?$file = CFile::ResizeImageGet( $arItem['PICTURE'], array('width'=>166,'height'=>166), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                    <img src="<?=$file['src']?>" alt="">
                  </div>
                  <div class="specialists-slider-thumb-description">
                    <h4><?=$arItem['NAME']?></h4>
                    <h6><?=$arItem['TEXT']?></h6>
                  </div>
                  <a class="specialists-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
                </div>
              <?endforeach?>
            </div>
      </div>
    </div>
  <?endif?>

<?elseif( $arItem == 'photo-gallery' ):?>

  <?if( is_array($arResult['MORE_PHOTO']) && count($arResult['MORE_PHOTO']) > 0 ):?>
    <div class="center">
      <div class="main-slider">
        <div class="main-slider-container">
          <?foreach( $arResult['MORE_PHOTO'] as $arItem ):?>
            <?//if( $file = CFile::ResizeImageGet( $arItem['ID'], array('width'=>946,'height'=>600), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
            <?if( $file = CFile::ResizeImageGet( $arItem['ID'], array('width'=>985,'height'=>500), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
              <div class="main-slider-container-thumb">
                <div class="main-slider-container-thumb__image">
                  <img src="<?=$file['src']?>" alt="">
                  <span class="border-container"><span class="border-container__left-top"></span><span class="border-container__right-top"></span><span class="border-container__left-bottom"></span><span class="border-container__right-bottom"></span><span class="border-container__left-bg"></span><span class="border-container__right-bg"></span><span class="border-container__top-bg"></span><span class="border-container__bottom-bg"></span></span>
                  <?/*<span class="main-slider-container-thumb__image__bg"><img src="assets/img/background/main-slider-tmb-bg.png" alt=""></span>*/?>
                  <span class="corners"><span class="corners__left-top"></span><span class="corners__right-top"></span><span class="corners__left-bottom"></span><span class="corners__right-bottom"></span></span>
                </div>
                <div class="main-slider-container-thumb-description"></div>
              </div>
            <?endif?>
          <?endforeach?>
        </div>
      </div>
    </div>
  <?endif?>

<?endif?>