<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<?
// Выведем актуальную корзину для текущего пользователя

$arBasketItems = array();

$dbBasketItems = CSaleBasket::GetList(
       array(),
        array(
                "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                "LID" => "s1",
                "ORDER_ID" => "16"
            ),
        false,
        false,
        array("PRODUCT_ID")
    );
while ($arItems = $dbBasketItems->Fetch())
{
	$ar_res = CCatalogProduct::GetByIDEx($arItems["PRODUCT_ID"]);
	
	if ($ar_res["IBLOCK_ID"] == 13){
		$img[] = '<a class ="print-doc" href="javascript:(print());"><img width="100px" src="'.CFile::GetPath($ar_res["PREVIEW_PICTURE"]).'" /></a>'; 
	}
}
$arFields["PRINT_PRODUCT"] = $img;

print_r ($ar_res);
?>
	

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>