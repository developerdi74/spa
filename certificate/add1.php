<? require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");
		  
 $PRODUCT_ID = intval($_POST['PRODUCT_ID']);

if (CModule::IncludeModule("catalog"))
{ 
	Add2BasketByProductID(
	  $PRODUCT_ID, 
	  "1", 
	  array(), 
	  array()
	);

}

?>