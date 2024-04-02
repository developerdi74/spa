<? require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");


 $SECTION_ID = intval($_POST['SECTION_ID']);

if (CModule::IncludeModule("catalog"))
			{ 
				$arSelect = Array("ID", "NAME", "CATALOG_GROUP_1","DETAIL_PICTURE", "PREVIEW_PICTURE" );
				$arFilter = Array("IBLOCK_ID"=>"13", "SECTION_ID"=>$SECTION_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
				$arProduct = array();
				while($ob = $res->GetNextElement())
				{
				 	$arProd = $ob->GetFields();
					$arProduct[] = $arProd;
				}
			}
?>
<div class="choose-block__cont wrapper">		
		<div class="choose-block">
				<div class="choose-block__content">
					<div class="choose-block__img"> <img id="js-img-whom" src="<?=CFile::GetPath($arProduct[0]["PREVIEW_PICTURE"]);?>" /> </div>

					<div class="choose-block__info">
						<div class="choose-block__caption">Подарочный сертификат</div>
						<div class="choose-block__title">Кому</div>
						<div class="choose-block__desc desc-mrg">Выберите кому бы вы хотели приобрести сертификат.</div>
						
						<div class="tub2-block">
						<?
						   	$arFilter = array('IBLOCK_ID' => "13", "SECTION_ID" => "84" ); 
						  	$rsSect = CIBlockSection::GetList(array(),$arFilter);
						 	$call=0;
						   while ($arSect = $rsSect->GetNext())
						   { 
						?>
							<div data-id="<?=$arSect["ID"]?>" onClick="sect(<?=$arSect["ID"]?>);" class="tub2-block__item <?if( $SECTION_ID == $arSect["ID"]) echo "tub2-block__item-activ"?>"><?=$arSect["NAME"]?></div>   
						<?	 
						   $call++; }
						?>
						</div>
						<div class="choose-block__slide-fix">
						<div class="choose-block__slide">
							<? 
								foreach ($arProduct as $key=>$arElement): 
								$Price = number_format ( $arElement["CATALOG_PRICE_1"], 0, '', ' ' ).' р.';
							?>
							<div class="choose-block__item <?if($key==0) echo "choose-block__item-activ"?>" data-tub="whom"  data-id="<?=$arElement["ID"]?>" data-price="<?=$Price?>" data-img="<?=CFile::GetPath($arElement["PREVIEW_PICTURE"]);?>" >
								<img src="<?=CFile::GetPath($arElement["DETAIL_PICTURE"]);?>" />
								<?=$arElement ["NAME"]?> 
							</div>
														
							<? endforeach;?> 
						</div>
							</div>

						<div class="choose-block__bot">  
							<div>
								<span class="choose-block__caption mob-hide">Подарочный сертификат на сумму</span>
								<div id="js-price-whom" class="choose-block__price"><?=number_format ( $arProduct[0]["CATALOG_PRICE_1"], 0, '', ' ' ).' р.';?></div>
							</div>
							<div id="button-basket-whom" class="choose-block__button" data-id="<?=$arProduct[0]["ID"]?>"  class="choose-block__button">
								<?/*<img id="img<?=$arProduct[0]["ID"]?>" src="<?=SITE_TEMPLATE_PATH?>/images/basket2.png" />*/?>
								Купить</div>
						</div>
					</div>
				</div>
			</div>
</div>