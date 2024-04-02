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
?>

<div class="accordion wrapper">
		


<? $col=0;
	foreach($arResult["ITEMS"] as $arItem):?>

<?  
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
	
	<div class="accordion__item <?if($col==0){ ?>accordion__item-activ<?}?>">
		<div class="accordion__arr <?if($col==0){ ?>accordion__arr-activ<?}?>"></div>
		<div class="accordion__title"> <?echo $arItem["PREVIEW_TEXT"];?></div>
		<div class="accordion__text <?if($col==0){ ?>accordion__text-activ<?}?>"> <?echo $arItem["DETAIL_TEXT"];?></div>
	</div>

<?	$col++;
	endforeach;?>
	
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
