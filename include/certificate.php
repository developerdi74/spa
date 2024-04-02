<div id="sum-t" class="tub-block__tub tub-block__tub-activ">
	<div class="choose-block__cont wrapper">
		
		<div class="choose-block__line">
			<form method="POST" id="formx" action="javascript:void(null);" onsubmit="add()">
 				<span class="choose-block__capt2">Установите сумму сертификата</span> 
				<input type="text" class="js-range-slider" name="catalog_PRICE_1" value="<?=$_REQUEST["catalog_PRICE_1"];?>" onChange="add()"/>;
			</form>
		</div>
		
		
		 <?
			if (CModule::IncludeModule("catalog"))
			{ 
				$arSelect = Array("ID", "NAME", "CATALOG_GROUP_1", "DETAIL_PICTURE", "PREVIEW_PICTURE");
				$arFilter = Array("IBLOCK_ID"=>"13", "SECTION_ID"=>"80", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
				$arFilter += ["catalog_PRICE_1" => "1000"];


				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
				while($ob = $res->GetNextElement())
				{
				 $arProd = $ob->GetFields();
				}
			}


			$Price = number_format ( $arProd["CATALOG_PRICE_1"], 0, '', ' ' ).' р.';
		?>
		<div id="results">
			<div class="choose-block">
				<div class="choose-block__content">
					<div class="choose-block__img">
						 <img src="<?=CFile::GetPath($arProd["PREVIEW_PICTURE"]);?>"/>
					</div>
					<div class="choose-block__info">
						<div class="choose-block__caption">
							Подарочный сертификат
						</div>
						<div class="choose-block__title">
							<?=$arProd["NAME"]?>
						</div>
						<div class="choose-block__desc">
							Вы можете приобрести подарочный сертификат на денежную сумму от 1 000 до 30 000 рублей. На денежную сумму, определённую сертификатом, можно выбрать любые виды услуг в нашем спа-центре.
						</div>
						<div class="choose-block__line-fix">
						</div>
						<div class="choose-block__bot">
							<div>
 								<span class="choose-block__caption mob-hide">Подарочный сертификат на сумму</span>
								<div class="choose-block__price">
									<?=$Price?>
								</div>
							</div>
							<div class="choose-block__button" data-id="<?=$arProd["ID"]?>" class="bxhtmled-surrogate">
								 Купить
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>