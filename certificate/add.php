<? require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");

if (CModule::IncludeModule("catalog"))
{ 
	$arSelect = Array("ID", "NAME", "CATALOG_GROUP_1", "DETAIL_PICTURE", "PREVIEW_PICTURE");
	$arFilter = Array("IBLOCK_ID"=>"13", "SECTION_ID"=>"80", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$arFilter += ["catalog_PRICE_1" => $_REQUEST["catalog_PRICE_1"]];


	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	while($ob = $res->GetNextElement())
	{
	 $arProd = $ob->GetFields();
	}
}


$Price = number_format ( $arProd["CATALOG_PRICE_1"], 0, '', ' ' ).' р.';
?>


<div class="choose-block">
			<div class="choose-block__content">
				<div class="choose-block__img"> <img src="<?=CFile::GetPath($arProd["PREVIEW_PICTURE"]);?>" /> </div>

				<div class="choose-block__info">
					<div class="choose-block__caption">Подарочный сертификат</div>
					<div class="choose-block__title"><?=$arProd["NAME"]?></div>
					<div class="choose-block__desc">Вы можете приобрести подарочный сертификат на денежную сумму от 1 000 до 10 000 рублей. На денежную сумму, определённую сертификатом, можно выбрать любые виды услуг в нашем спа-центре.</div>

					<div class="choose-block__line-fix">
						
					</div>
 
					<div class="choose-block__bot"> 
						<div>
							<span class="choose-block__caption mob-hide">Подарочный сертификат на сумму</span>
							<div class="choose-block__price"><?=$Price?></div>
						</div>
						<div class="choose-block__button" onClick="add1(<?=$arProd["ID"]?>)"  class="choose-block__button">
							<?/*<img id="img<?=$arProd["ID"]?>" src="<?=SITE_TEMPLATE_PATH?>/images/basket2.png" />*/?>
							Купить
						</div>
					</div>
				</div>
			</div>
</div>
