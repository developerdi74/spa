<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
//https://spa-di.ru/universe/get/getproducts.php
//https://spa-di.ru/universe/get/getqtygoods.php
\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule('catalog');
if(!$USER->IsAdmin()){
    echo "ADMIN";
    exit;
}
$up = isset($_GET['up'])? 1:0;
$session = \Bitrix\Main\Application::getInstance()->getSession();

if (!$session->has('token')){
    $token = getToken();
    $session->set('token', $token);
}

$token = $session['token'];
vd($token);
if(!$token){
    exit;
}
$up=1;
$dataT = loadDataUniverse($token,'goods_in_storage',['zero_goods_count'=>0],$up);

$data = $dataT['goods_list'];
$listGoods = (getGoodsAll(20));

foreach ($listGoods as $key=>$good){
    //msg($good['NAME']);
    foreach ($data as $item){
        if($good['PROPERTY_UF_UNVERS_ID_VALUE'] == $item['goods_id']){
            if(setCountGoods($good['ID'], $item['goods_count']) !== false){
                msg($good['ID'].": Для - ".$good['NAME']." установлено количество - ".$item['goods_count']);
            }else{
                msg("Ошибка");
            }
            unset($listGoods[$key]);
            //vd("Вышел из 2 цикла");
            continue 2;
        }
    }
    if(setCountGoods($good['ID'], 0) !== false){
        msg($good['ID'].": Для - ".$good['NAME']." установлена нулевое количество");
    }else{
        msg("Ошибка");
    }
    //vd("Пошел 1 цикл");
}
//vd($data);
//dd(setCountGoods(1358, 1000));


?>
