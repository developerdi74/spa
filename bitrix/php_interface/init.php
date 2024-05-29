<?
include_once "univers_api/functions.php";
AddEventHandler("main", "OnBeforeEventAdd", "OnSaleDeliveryOrderSendEmail");
function OnSaleDeliveryOrderSendEmail (&$event, &$lid, &$arFields, &$message_id) {
    
	if ($event == "SALE_NEW_ORDER") { 
		
		$order = CSaleOrder::GetByID($arFields['ORDER_ID']);

		$arFields["DELIVERY_ID"] = $order["DELIVERY_ID"];
		$arFields["PAY_SYSTEM_ID"] = $order["PAY_SYSTEM_ID"];
			
        if ($arFields['ORDER_ID']>0) {
            $order = CSaleOrder::GetByID($arFields['ORDER_ID']);
          	
			
            if( ($order["DELIVERY_ID"] == 3) && ($order["PAY_SYSTEM_ID"] == 4)  )
            {
            	$message_id = 12;
            } 
			else{
				$message_id = 34; 
			}
		}
			
	}
		
	if ($event == "SALE_ORDER_PAID") { 	
		 if ($arFields['ORDER_ID']>0) {

			$order = CSaleOrder::GetByID($arFields['ORDER_ID']);
			$arBasketItems = array();
			$dbBasketItems = CSaleBasket::GetList(
				   array(),
					array(
							"FUSER_ID" => CSaleBasket::GetBasketUserID(),
							"LID" => "s1",
							"ORDER_ID" => $arFields['ORDER_ID']
						),
					false,
					false,
					array("ID", "NAME", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "DELAY", "CAN_BUY",
             "PRICE", "WEIGHT", "DETAIL_PAGE_URL", "NOTES", "CURRENCY", "VAT_RATE", "CATALOG_XML_ID",
             "PRODUCT_XML_ID", "SUBSCRIBE", "DISCOUNT_PRICE", "PRODUCT_PROVIDER_CLASS", "TYPE", "SET_PARENT_ID")
			);
			while ($arItems = $dbBasketItems->Fetch())
			{
				$ar_res = CCatalogProduct::GetByIDEx($arItems["PRODUCT_ID"]);

				if ($ar_res["IBLOCK_ID"] == 13){
					$img[] = '<a href="'.CFile::GetPath($ar_res["PREVIEW_PICTURE"]).'">'.$ar_res["NAME"].'</a>'; 
					$imgd[] = '<a href="'.CFile::GetPath($ar_res["PREVIEW_PICTURE"]).'" download="">'.$ar_res["NAME"].'</a>'; 
				}
			}
			$arFields["PRODUCT"] = $img[0];
			$arFields["DOWNLOAD_PRODUCT"] = $imgd[0];


			if( ($order["DELIVERY_ID"] == 2) && ($order["PAY_SYSTEM_ID"] == 5)  )
            {
                   $arDeliv = CSaleDelivery::GetByID($order["DELIVERY_ID"]);
                   $message_id = 15	; 
            } 			
			elseif( ($order["DELIVERY_ID"] == 4) && ($order["PAY_SYSTEM_ID"] == 5)  )
            {
               $message_id = 33	; //применяем шаблон     
            } 
			else{
		       $message_id = 35; 
			} 

			 

        }
    }
	
	
}
function testLog(){
    $log = date('Y-m-d H:i:s') . " Запись в лог\n\r";
    file_put_contents(__DIR__.'/testlogagent.txt',$log,FILE_APPEND);
    return "testLog();";
}
function dd($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	exit;
}
function vd($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
}

use \Bitrix\Main\Data\Cache;

function dataCache($cacheKey, $function, $cacheTime = 60*60*4, $cachePath='allCache',$reset=0){
    if($reset==1) $cacheTime=1;
    $cache = Cache::createInstance(); // Служба кеширования

    $cacheTtl = $cacheTime; // срок годности кеша (в секундах)
    $cacheKey = $cacheKey; // имя кеша
    $cachePath = $cachePath; // папка, в которой лежит кеш

    if ($cache->initCache($cacheTtl, $cacheKey, $cachePath))
    {
        $vars = $cache->getVars(); // Получаем переменные
        $cache->output(); // Выводим HTML пользователю в браузер
    }
    elseif ($cache->startDataCache())
    {
        $vars = $function();
        // Если что-то пошло не так и решили кеш не записывать
        $cacheInvalid = false;
        if ($cacheInvalid or empty($vars))
        {
            $cache->abortDataCache();
        }
        // Всё хорошо, записываем кеш
        $cache->endDataCache($vars);
    }
    return $vars;
}

?>