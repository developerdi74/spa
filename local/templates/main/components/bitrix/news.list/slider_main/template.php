<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="top-slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
		<div class="top-slider-thumb">
			<?if(!empty($arItem['PROPERTIES']['link'])):?>
				<a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>">
			<?endif;?>
		 	<img alt="<?=$arItem['PREVIEW_TEXT']?>" src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
			<?if(!empty($arItem['PROPERTIES']['link'])):?>
				</a>
			<?endif;?>
		</div> 
	<?endif;?>
	<?endforeach;?>
</div>