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

<div class="section">
  <div class="center">
    <div class="section-container">

      <span class="section-container-left-top"></span>
      <span class="section-container-right-top"></span>
      <span class="section-container-left-bottom"></span>
      <span class="section-container-right-bottom"></span>
      <span class="section-container-left-bg"></span>
      <span class="section-container-right-bg"></span>
      <span class="section-container-top-bg"></span>
      <span class="section-container-bottom-bg"></span>

      <?if( $arResult['IBLOCK_ID'] == 10 ):?>

        <?if( $arResult['SECTION']['PATH'] ):?>
          <p class="breadcrumbs">
          <?foreach( $arResult['SECTION']['PATH'] as $k=>$a ):?>
            <a href="<?=$a['SECTION_PAGE_URL']?>" title=""<?if( $k == count($arResult['SECTION']['PATH'])-1 ):?> class="nz"<?endif?>><?=$a['NAME']?></a>
          <?endforeach?>
          </p>
        <?endif?>

        <?//DATE_ACTIVE_TO
        //<p class="date"><span class="icon-note">12 декабря</span></p>?>
        <div class="title-page"><h1><?=$arResult['NAME']?></h1></div>

        <?if( $arResult['PICS'] ):?>
          <div class="main-slider">
            <span class="section-container-left-top"></span>
            <span class="section-container-right-top"></span>
            <span class="section-container-left-bottom"></span>
            <span class="section-container-right-bottom"></span>

            <span class="section-container-left-bg"></span>
            <span class="section-container-right-bg"></span>
            <span class="section-container-top-bg"></span>
            <span class="section-container-bottom-bg"></span>

            <div class="main-slider-container">
              <?//foreach( $arResult['PICS'] as $a ):?>
              <div class="main-slider-container-thumb">
                <?//$file = CFile::ResizeImageGet( $a, array('width'=>985,'height'=>500), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                <?$file = CFile::ResizeImageGet( ( $arResult['DETAIL_PICTURE'] ? $arResult['DETAIL_PICTURE'] : $arResult['PREVIEW_PICTURE'] ), array('width'=>985,'height'=>500), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                <img src="<?=$file['src']?>" alt="<?=$arResult['NAME']?>">
                <?/*<img src="assets/img/thumbnails/tmb-main-slider.png" alt="">*/?>
              </div>
              <?//endforeach?>
            </div>
          </div>
        <?endif?>

        <?if( $arResult['DISPLAY_PROPERTIES']['UNIVERS_ID']['VALUE'] ):?>
          <p class="text-center">
            <a class="button button-big button-green icon-note-big js-universe-widget-good" id="open_block_save"  data-universe-good-id="<?=$arResult['DISPLAY_PROPERTIES']['UNIVERS_ID']['VALUE']?>">Оставьте онлайн заявку на запись</a>
          </p>
        <?endif;?>
        <?
        //Кнопка записи
          //$APPLICATION->IncludeComponent( 'pitcom:feedback', 'zapis', array('Q2'=>'Y'), false );
        ?>

      <?else:?>

        <?if( $arResult['DATE_ACTIVE_FROM'] ):?><p class="date"><span class="icon-note"><?=$arResult['DATE_ACTIVE_FROM']?></span></p><?endif?>

        <div class="title-page"><h1><?=$arResult['NAME']?></h1></div>

        <?/*if( $arResult['DETAIL_PICTURE'] ):?>
          <div class="main-slider main-slider-full-style">
            <div class="main-slider-container">
              <div class="main-slider-container-thumb">
                <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
              </div>
            </div>
          </div>
        <?endif*/?>

        <?if( $arResult['PICS'] ):?>
          <div class="main-slider">
            <span class="section-container-left-top"></span>
            <span class="section-container-right-top"></span>
            <span class="section-container-left-bottom"></span>
            <span class="section-container-right-bottom"></span>

            <span class="section-container-left-bg"></span>
            <span class="section-container-right-bg"></span>
            <span class="section-container-top-bg"></span>
            <span class="section-container-bottom-bg"></span>

            <div class="main-slider-container">
              <?foreach( $arResult['PICS'] as $a ):?>
              <div class="main-slider-container-thumb">
                <?$file = CFile::ResizeImageGet( $a, array('width'=>985,'height'=>500), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
                <img src="<?=$file['src']?>" alt="">
                <?/*<img src="assets/img/thumbnails/tmb-main-slider.png" alt="">*/?>
              </div>
              <?endforeach?>
            </div>
          </div>
        <?endif?>

      <?endif?>


      <div class="about">
        <div class="text-container">
          <div class="text-container-inside">

            <?//=$arResult['DETAIL_TEXT']?>
            <?foreach( $arResult['DETAIL_TEXT_ARRAY'] as $arItem ):?>
              <?if( in_array( $arItem, array('apparats','brands','photo-gallery','apparats&brands') ) ) include 'subtext.php'; else echo $arItem;?>
            <?endforeach?>
        
            <?if( $arResult['IBLOCK_ID'] == 4 ):?>
              <div class="text-container-social">
                <p>Понравилась статья? Поделитесь с друзьями! <a class="icon-f" href="#" title=""></a><a class="icon-vk" href="#" title=""></a> </p>
              </div>
            <?endif?>
     
          </div>
        </div>
        <?if( $arResult['DISPLAY_PROPERTIES']['TIME']['VALUE'] ):?>
          <div class="text-container-inside date" style="text-align:left;margin-top:30px;"><span class="icon-note">Время: <?=$arResult['DISPLAY_PROPERTIES']['TIME']['VALUE']?></span></div>
        <?endif?>
      </div>

      <?if( $arResult['DISPLAY_PROPERTIES']['PEOPLE_ID']['DATA'] ):?>
        <div class="specialists">
          <div class="text-container-title text-center">
            <h4>Наши специалисты</h4>
          </div>
          <div class="center">
            <div class="specialists-slider">
              <?foreach( $arResult['DISPLAY_PROPERTIES']['PEOPLE_ID']['DATA'] as $arItem ):?>
                <div class="specialists-slider-thumb">
                  <div class="specialists-slider-thumb-photo">
                    <?$file = CFile::ResizeImageGet( $arItem['FOTO'], array('width'=>166,'height'=>166), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 )?>
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


      <?if( $arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE'] /*&& !isset($arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['DATA'])*/ ):?>
        <div class="section-container">
          <span class="section-container-left-top"></span>
          <span class="section-container-right-top"></span>
          <span class="section-container-left-bottom"></span>
          <span class="section-container-right-bottom"></span>
          <span class="section-container-left-bg"></span>
          <span class="section-container-right-bg"></span>
          <span class="section-container-top-bg"></span>
          <span class="section-container-bottom-bg"></span>
          <div class="title-container"><h4>Прейскурант цен</h4></div>
          <table>
            <tr>
              <th>Услуга</th>
              <th>Цена</th>
            </tr>
            <?if( !isset($arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['DATA']) ):?>
                <?foreach( $arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE'] as $k=>$a ):?>
                  <tr>
                    <td><?=$a?></td>
                    <td>
                        <p class="table-price">
                        <?
                                $regexp = "/\((.*?)\)/";
                                $string = $arResult['DISPLAY_PROPERTIES']['PRICE']['DESCRIPTION'][$k];
                                preg_match_all($regexp, $string, $matches);
                                foreach ($matches[1] as $newPrice) {
                                    echo $newPrice;
                                    echo '<span class="oldPrice">';
                                    echo $price = str_replace("(".$newPrice.")", "", $arResult['DISPLAY_PROPERTIES']['PRICE']['DESCRIPTION'][$k]);
                                    echo '</span>';
                                }
                                if( trim($newPrice) == '' ){
                                    echo $arResult['DISPLAY_PROPERTIES']['PRICE']['DESCRIPTION'][$k];
                                    $newPrice = "";
                                }
                                $newPrice = '';
                        ?>
                        </p>
                    </td>
                  </tr>
                <?endforeach?>
            <?else:?>
                <?foreach( $arResult['DISPLAY_PROPERTIES']['PRICE_SECTION']['DATA'] as $k=>$a ):
                    if($a["PRICE"]==0) continue;?>
                    <tr>
                        <td><?=$a["NAME"]?>
                            <? /*<a class="js-universe-widget-good" id=""  data-universe-good-id="<?=$a["UF_UNVERS_ID"]?>"><?=$a["NAME"]?></a> */?>
                        </td>
                        <td>
                            <p class="table-price">
                                <?=$a["PRICE"];?> руб.
                            </p>
                        </td>
                    </tr>
                <?endforeach?>
            <?endif;?>
          </table>
            
            
        <?if( $arResult['DISPLAY_PROPERTIES']['UNIVERS_ID']['VALUE'] ):?>
          <p class="text-center">
            <a class="button button-big button-green icon-note-big js-universe-widget-good" id=""  data-universe-good-id="<?=$arResult['DISPLAY_PROPERTIES']['UNIVERS_ID']['VALUE']?>">Оставьте онлайн заявку на запись</a>
          </p>
        <?else:?>
        <p class="text-center">
            <a class="button button-big button-green icon-note-big" id="open_block_save">Оставьте онлайн заявку на запись</a>
        </p>
        <?endif;?>
        </div>
      <? endif;?>
      <?if( $arResult['DISPLAY_PROPERTIES']['MORE_PHOTO_SMALL'] ):?>
        <?$APPLICATION->SetAdditionalCSS($templateFolder.'/jgallery/css/font-awesome.min.css');?>
        <?$APPLICATION->SetAdditionalCSS($templateFolder.'/jgallery/css/jgallery.min.css?v=1.6.1');?>
        <?$APPLICATION->AddHeadScript($templateFolder.'/jgallery/js/jgallery.js?v=1.6.1');?>
        <?$APPLICATION->AddHeadScript($templateFolder.'/jgallery/js/tinycolor-0.9.16.min.js');?>
        <div id="gallery">
          <?foreach( $arResult['DISPLAY_PROPERTIES']['MORE_PHOTO_SMALL']['FILE_VALUE'] as $arItem ):?>
            <a href="<?=$arItem['SRC']?>"><img src="<?=$arItem['SRC']?>" alt=""></a>
          <?endforeach?>
        </div>
        <script type="text/javascript">
          $( function() {
            $('#gallery').jGallery({
              backgroundColor: '#fff',
              textColor: '#424242',
              //browserHistory: true,
              //autostartAtImage: 4,
              //zoomSize: 'original',
              //showGallery: function() {
                //$('.jgallery .full-screen')
                //.unbind( 'click' )
                //.click( function() { location = '<?=$arResult['SECTION_PAGE_URL']?>'; });
              //},
              tooltipSeeAllPhotos: 'Смотреть все фотографии',
              tooltipToggleThumbnails: 'Показать / спрятать ленту фотографий',
              tooltipSlideshow: 'Слайдшоу',
              tooltipRandom: 'Случайное воспроизведение',
              tooltipZoom: 'Увеличить',
              tooltipFullScreen: 'Во весь экран'
            });
          });
        </script>
      <?endif?>

        <? $url = $APPLICATION->GetCurPage();

        if(strripos($url,'fitnes')){
            require $_SERVER['DOCUMENT_ROOT'] .'/include/rule.php';
        }?>
    </div>
  </div>
</div>
<?if( $arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['DATA'] ):?>
  <div class="services">
    <div class="center">

      <div class="title-container">
        <h4>Препараты</h4>
      </div>

      <div class="services-slider">

        <?foreach( $arResult['DISPLAY_PROPERTIES']['PRODUCT_ID']['DATA'] as $arItem ):?>
          <div class="services-slider-thumb">
            <div class="services-slider-thumb-photo">
              <?if( $file = CFile::ResizeImageGet( $arItem['PICTURE'], array('width'=>213,'height'=>240), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
                <img src="<?=$file['src']?>" alt="<?=$arPic['ALT']?>">
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

    </div>
  </div>
<?endif?>


<?if( $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA'] ):?>
  <div class="services">
    <div class="center">

      <div class="title-container">
        <h4>Вас может заинтересовать</h4>
      </div>

      <div class="services-slider">

        <?foreach( $arResult['DISPLAY_PROPERTIES']['ITEM_ID']['DATA'] as $arItem ):?>
          <div class="services-slider-thumb">
            <div class="services-slider-thumb-photo">
              <?if( $file = CFile::ResizeImageGet( $arItem['PICTURE'], array('width'=>213,'height'=>240), BX_RESIZE_IMAGE_EXACT, false, false, false, 100 ) ):?>
                <img src="<?=$file['src']?>" alt="<?=$arPic['ALT']?>">
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

    </div>
  </div>
<?endif?>


<?if( $arResult['DISPLAY_PROPERTIES']['NOTES_ID']['DATA'] ):?>
  <div class="articles">
    <div class="center">
      <div class="title-container">
        <h4>Интересные статьи для вас</h4>
      </div>
      <div class="articles-slider">
        <?foreach( $arResult['DISPLAY_PROPERTIES']['NOTES_ID']['DATA'] as $arItem ):?>
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
              <h4><?=$arItem['NAME']?></h4>
              <p><?=$arItem['TEXT']?></p>
            </div>
            <a class="articles-slider-thumb-link" href="<?=$arItem['DETAIL_PAGE_URL']?>" title=""></a>
          </div>
        <?endforeach?>
      </div>
      <p class="text-center"><a class="button icon-arrow-right" href="/articles/" title="">Все статьи</a> </p>
    </div>
  </div>
<?endif?>
