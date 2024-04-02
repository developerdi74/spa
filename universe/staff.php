<?php
//https://spa-di.ru/universe/staff.php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\Loader::includeModule('iblock');
if(!$USER->IsAdmin()){
    echo "ADMIN";
    exit;
}

$session = \Bitrix\Main\Application::getInstance()->getSession();

if (!$session->has('token')){
    $token = getToken();
    $session->set('token', $token);
}

$token = $session['token'];

if(!$token){
    exit;
}

$data = loadDataUniverse($token,'get_employees');
//dd($data);
$fields=[
    "first_date"=>"2024-01-01",
    "last_date"=>"2024-01-31",
    "employees"=> [1, 2, 3, 10]
];
$plannings = loadDataUniverse($token,'emp_free_time',$fields,1);
//vd($plannings);
$staffs = $data['Employees'];

foreach ($staffs as $key=>$staff){
    if(empty($staff['first_name']) || empty($staff['last_name']) || $staff['first_name'] == "*"){
        unset($staffs[$key]);
        continue;
    }
    //$staffs[$key]['services']=count($staff['services']);
}
dd($staffs);

?>

