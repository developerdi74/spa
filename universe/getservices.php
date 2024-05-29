<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
//https://spa-di.ru/universe/getservices.php
//https://spa-di.ru/universe/getservices.php/?up=1
\Bitrix\Main\Loader::includeModule('iblock');
if(!$USER->IsAdmin()){
    echo "ADMIN";
    exit;
}
$up = isset($_GET['up'])? 1:0;
$up = 1;
$session = \Bitrix\Main\Application::getInstance()->getSession();

if (!$session->has('token')){
    $token = getToken();
    $session->set('token', $token);
}

$token = $session['token'];
//vd($token);
if(!$token){
    exit;
}

$data = loadDataUniverse($token,'service_list',null,$up);
$services = $data['booking_services'];

//dd($services);
$groups=[];

//dd($services);
foreach ($services as $k=>$serv){
    if($serv['parent_id'] == 2){
        unset($serv['parent_id']);
    }
    if($serv['service_id'] == 2){
        continue;
    }
    $id = $serv['service_id'];
    $groups[$id]=$serv;
    if($serv['is_group']==0){
        $servsnew[]=$serv;
    }
}
//Для теста удаленных услуг
//unset($servsnew[0]);
echo deletedServices($servsnew,19);
//vd($groups[6697]);

//dd(addSection($groups[3]));
foreach ($groups as $gr){
    if($gr['is_group']==1){
        addSection($gr,19,"services");
    }elseif($gr['is_group']==0){
        addElement($gr,19);
    }
}
?>

