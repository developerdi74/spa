<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
//https://spa-di.ru/universe/get/getproducts.php
//https://spa-di.ru/universe/get/getproducts.php/?up=1
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
$data = loadDataUniverse($token,'goods_list',null,$up);
//dd($data);
foreach ($data['goods_list'] as $good){
    if(
        $good['parent_id']!=883 &&
        $good['parent_id'] != 426 &&
        $good['goods_id'] != 883 &&
        $good['goods_id'] != 426
    ){
        if(isset($good['goods_price1']) && $good['goods_price1']>0){
            $goods[]=$good;
        }elseif(!isset($good['goods_price1'])){
            $goods[]=$good;
        }
    }
}

//getNotHaveSection($goods); // Получить разделы для которых нет существуют родителя
//dd('not');
//dd($goods);
$groups=[];

//dd($services);
foreach ($goods as $k=>$serv){
    if($serv['parent_id'] == 1){
        unset($serv['parent_id']);
    }
    if($serv['goods_id'] == 1){
        continue;
    }
    $id = $serv['goods_id'];
    $groups[]=$serv;
    if($serv['is_group']==0){
        $servsnew[]=$serv;
    }
}
//vd($groups);
//Для теста удаленных товаров
//unset($servsnew[0]);

//Синхронизация элементов с базой АПИ, удаление отсутствующих
//echo deletedServices($servsnew);

//vd($groups[6697]);

//dd(addSection($groups[3]));
foreach ($groups as $gr){
    if($gr['is_group']==1){
        continue;
        addSection($gr,20,"goods");
    }elseif($gr['is_group']==0){
        addGoods($gr,20);
    }
}
exit;


function getNotHaveSection($goods){
    foreach ($goods as $good){
        if(isset($good['parent_id'])){
            $pr[$good['parent_id']]=$good['parent_id'];
        }
    }
    foreach ($goods as $good){
        if($good['is_group']==0){
            break;
        }
        $ihave=0;
        foreach ($pr as $p){
            if($good['goods_id'] == $p){
                $ihave=1;
            }
        }
        if($ihave==0){
            $notsections[]=$good;
        }
    }
    if(!empty($notsections)){
        echo "------------------НЕТ РОДИТЕЛЯ---------------";
        vd($notsections);
        echo "------------------НЕТ РОДИТЕЛЯ---------------<br>";
    }
}
?>
