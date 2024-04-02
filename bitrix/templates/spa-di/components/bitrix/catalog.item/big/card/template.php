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
	

<div class="choose-block">
		<div class="choose-block__content">
			
			
			<span class="product-item-image-original" id="<?=$itemIds['PICT']?>"
			style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']?>'); <?=($showSlider ? 'display: none;' : '')?>">
			</span>
			
			
			<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
					<?=($showSlider ? '' : 'style="display: none;"')?>
					data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
				</span>	
			
			<div class="choose-block__img" id="<?=$itemIds['SECOND_PICT']?>">
				
				<img
					border="0"
					src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$item["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$item["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$item["PREVIEW_PICTURE"]["TITLE"]?>"
					/>
			 </div>
			<div class="choose-block__info">
				<div class="choose-block__caption">Подарочный сертификат</div>
				<div class="choose-block__title">На сумму</div>
				<div class="choose-block__desc">Вы можете приобрести подарочный сертификат на любую из программ СПА центра «Другое Измерение» номиналом от 1 000 рублей. Мы доставим подарочный сертификат Вам или тому, кому он адресован.</div>
				
				<div class="choose-block__line">
					<span class="choose-block__capt2">Установите сумму сертификата</span>
					<input type="text" class="js-range-slider" name="range" value=""  />
				</div>
				
				<div class="choose-block__bot">
					<div>
						<span class="choose-block__caption">Подарочный сертификат на сумму</span>
						<div class="choose-block__price">
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
					</div>
					
					<div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
						<?
						if (!$haveOffers)
						{
							if ($actualItem['CAN_BUY'])
							{
								?>
								<div class="product-item-button-container" id="<?=$itemIds['BASKET_ACTIONS']?>">
									<a class="btn btn-default <?=$buttonSizeClass?>" id="<?=$itemIds['BUY_LINK']?>"
										href="javascript:void(0)" rel="nofollow">
										<?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
									</a>
								</div>
								<?
							}
							else
							{
								?>
								<div class="product-item-button-container">
									<?
									if ($showSubscribe)
									{
										$APPLICATION->IncludeComponent(
											'bitrix:catalog.product.subscribe',
											'',
											array(
												'PRODUCT_ID' => $actualItem['ID'],
												'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
												'BUTTON_CLASS' => 'btn btn-default '.$buttonSizeClass,
												'DEFAULT_DISPLAY' => true,
												'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
											),
											$component,
											array('HIDE_ICONS' => 'Y')
										);
									}
									?>
									<a class="btn btn-link <?=$buttonSizeClass?>"
										id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow">
										<?=$arParams['MESS_NOT_AVAILABLE']?>
									</a>
								</div>
								<?
							}
						}
						else
						{
							if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
							{
								?>
								<div class="product-item-button-container">
									<?
									if ($showSubscribe)
									{
										$APPLICATION->IncludeComponent(
											'bitrix:catalog.product.subscribe',
											'',
											array(
												'PRODUCT_ID' => $item['ID'],
												'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
												'BUTTON_CLASS' => 'btn btn-default '.$buttonSizeClass,
												'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
												'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
											),
											$component,
											array('HIDE_ICONS' => 'Y')
										);
									}
									?>
									<a class="choose-block__button <?=$buttonSizeClass?>"
										id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow"
										<?=($actualItem['CAN_BUY'] ? 'style="display: none;"' : '')?>>
										<?=$arParams['MESS_NOT_AVAILABLE']?>
									</a>
									<div id="<?=$itemIds['BASKET_ACTIONS']?>" <?=($actualItem['CAN_BUY'] ? '' : 'style="display: none;"')?>>
										<a class="choose-block__button <?=$buttonSizeClass?>" id="<?=$itemIds['BUY_LINK']?>"
											href="javascript:void(0)" rel="nofollow">
											<?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
										</a>
									</div>
								</div>
								<?
							}
							else
							{
								?>
								<div class="product-item-button-container">
									<a class="btn btn-default <?=$buttonSizeClass?>" href="<?=$item['DETAIL_PAGE_URL']?>">
										<?=$arParams['MESS_BTN_DETAIL']?>
									</a>
								</div>
								<?
							}
						}
						?>
					</div>
		
				</div>
			</div>
		</div>
</div>	