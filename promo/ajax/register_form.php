<?php
$name=validate($_GET["name"]);
$phone=validate($_GET["phone"]);
$service = $_GET['service'];
if(strlen($_GET['email'])>0){
    exit;
}

if($name==null){
    $data['error']['name'] = 'Поле имя обязательно для заполнения';
}
if($phone==null){
    $data['error']['phone'] = 'Поле телефон обязательно для заполнения';
}

if(!isset($data['error'])){
    if(sendTelegram($name, $phone,$service) == 1) {
        $data['success']['status'] = 1;
    }else{
        $data['error']['message'] = "Неизвестная ошибка!";
    }
}
echo json_encode($data);


function sendTelegram($name=0,$tel=0, $service=''){
    $token = "5668435133:AAGMMz07NVwwpbwTxNJMGqyRITuoK9Z5E0c";
    $chat_id = "-1001948706943";
    if($service == ''){
        $textService = 'Карбоновый пилинг - СПА-центр Другое Измерение';
    }
    if($service == 'cosmetolog'){
        $textService = 'Бесплатная консультация к косметологу - СПА-центр Другое Измерение';
    }

    $arr = array(
        'Заявка:' => $textService,
        'Имя клиента: ' => $name,
        'Телефон: ' => $tel,
        'Дата заявки: ' => date('Y-M-d h:i:s'),
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&parse_mode=html&text=".$txt;

    if( $curl = curl_init() ) {
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $out = curl_exec($curl);
        curl_close($curl);
        return 1;
    }else{
        return 0;
    }
}


    function validate($data,$max = 17) {
    if(strlen($data)<2 || strlen($data)>$max){
        return null;
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}