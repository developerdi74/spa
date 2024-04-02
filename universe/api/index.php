<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/universe/api/class.php');
//https://spa-di.ru/universe/api
$data = new apiPlanning();
echo $data->getServices();

?>