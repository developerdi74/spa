<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?> 



	<div class="card">
			<div class="card__prev">
				<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
						<?=($showSlider ? '' : 'style="display: none;"')?>
						data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
				</span>	
				<div  id="<?=$itemIds['SECOND_PICT']?>" class="card__img"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" /></div>

				<div class="card__info">
					<div class="card__caption">Подарочный сертификат</div>
						<div class="card__title"><?=TruncateText($productTitle, 32);?></div>
						<div class="card__desc"><?=TruncateText($item["PREVIEW_TEXT"], 110);?></div>

						<div class="card__more"><span>подробнее</span></div>

						<div class="card__bottom">
							<div class="card__price">
								<div class="product-item-info-container product-item-price-container" data-entity="price-block">

											<span class="product-item-price-current" id="<?=$itemIds['PRICE']?>">
												<?
												if (!empty($price))
												{
													if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
													{
														echo Loc::getMessage(
															'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
															array(
																'#PRICE#' => $price['PRINT_RATIO_PRICE'],
																'#VALUE#' => $measureRatio,
																'#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
															)
														);
													}
													else
													{
														echo $price['PRINT_RATIO_PRICE'];
													}
												}
												?> 
											</span>
											<?
											if ($arParams['SHOW_OLD_PRICE'] === 'Y')
											{
												?>
												<span class="card__price-old" id="<?=$itemIds['PRICE_OLD']?>"
													<?=($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '')?>>
													<?=$price['PRINT_RATIO_BASE_PRICE']?> 
												</span> 
												<?
											}
											?>
										</div>
							</div>
							<div id="<?=$itemIds['BASKET_ACTIONS']?>">
								<a class="card__button" id="<?=$itemIds['BUY_LINK']?>" href="javascript:void(0)" rel="nofollow">
														Купить
								</a>
							</div>
						</div>
				</div>
			</div>
			<div class="card__detail">
				<div class="card__close"></div>
				<div class="card__title"><?=$productTitle?></div>
				<div class="card__desc"><?=$item["PREVIEW_TEXT"]?></div>
			</div>

	</div>
	