<?
function addSection($data,$ibl,$type){
    if($type=="services"){
        $id=$data['service_id'];
        $name=$data['service_name'];
        $ibl=19;
        $ok=1;
    }
    if($type=="goods"){
        $id=$data['goods_id'];
        $name=$data['goods_name'];
        $ibl=20;
        $ok=1;
    }
    if($ok==0){ echo "не указан тип выгрузки"; return; }
    $isset=0;
    $ob = new CIBlockSection;
    $issetparent=false;
    $arFields = Array(
        "IBLOCK_ID" => $ibl,
        "NAME" => $name,
        "CODE" => Cutil::translit($name, "ru", array("replace_space" => "-", "replace_other" => "-", 'change_case'=>"L")).$id,
        "UF_UNVERS_ID" => $id,
    );

    //vd($data);
    $isset = (checkSection($id,$ibl));
    if(isset($data['parent_id'])){
        $issetparent = (checkSection($data['parent_id'],$ibl));
        if(!$issetparent){
            echo "---------";
            echo "Для - ".$id." нет род каталога - ".$data['parent_id']." ".$name."-------<br>";
            return false;
        }
        $arFields['IBLOCK_SECTION_ID']=$issetparent;
    }
    //vd($arFields);
    if($isset){
        $ID = $ob->Update($isset,$arFields);
        echo "Обновлен раздел - ".$arFields['NAME']."<br>";
        return;
    }

    $ID = $ob->Add($arFields);
    $res = ($ID>0);
    if(!$res)
        echo $ob->LAST_ERROR;
    else
        echo "Cоздан раздел - ".$name."<br>";
    return true;

}
function addElement($data,$ibl){
    $parent = checkSection($data['parent_id'],$ibl);
    $el = new CIBlockElement;
    $arFields = array(
        "NAME" => $data['service_name'],
        "CODE" => Cutil::translit($data['service_name'], "ru", array("replace_space" => "-", "replace_other" => "-", 'change_case'=>"L")),
        "IBLOCK_ID" => $ibl,
        "PROPERTY_VALUES" => [
            'PRICE'=>$data['service_price'],
            'UF_UNVERS_ID'=>$data['service_id']
        ],
        "IBLOCK_SECTION_ID" => false,
    );
    if($parent){
        $arFields["IBLOCK_SECTION_ID"]=$parent;
    }
    $check = checkElement($data['service_id'],19);
    if(!$check){
        if ($el->Add($arFields))
            echo $check." Создано - ".$data['service_name']."<br>";
        else
            echo "Error: " . $el->LAST_ERROR;
    }else{
        $prop["PRICE"] = $data['service_price'];
        $res = CIBlockElement::SetPropertyValuesEx($check, 19, $prop);
        echo $check." Обновлено - ".$data['service_name']."<br>";
    }
    return;
}
function addGoods($data,$ibl){
    $id = $data['goods_id'];
    $name = replacerName($data['goods_name']);
    $parent_uni = $data['parent_id'];
    $parent = checkSection($parent_uni,$ibl);
    $price = $data['goods_price1'];
    $codeTemp = Cutil::translit($name, "ru", array("replace_space" => "-", "replace_other" => "-", 'change_case'=>"L"));
    $code = checkElement(null, 20, $codeTemp)!=false ? $codeTemp.$id : $codeTemp ;

    if(!$parent){
        echo "Для - ".$id." нет род каталога - ".$parent_uni." ".$name."<br>";
        return false;
    }
    $el = new CIBlockElement;
    $arFields = array(
        "NAME" => $name,
        "CODE" => $code,
        "IBLOCK_ID" => $ibl,
        "PROPERTY_VALUES" => [
            'UF_UNVERS_ID'=>$id
        ],
        "IBLOCK_SECTION_ID" => false,
    );
    if($parent){
        $arFields["IBLOCK_SECTION_ID"]=$parent;
    }
    $check = checkElement($data['goods_id'],20);
    if(!$check){
        if ($id = $el->Add($arFields)){
            echo $id." Создано - ".$data['goods_name'];
            $resset = setPrice($id,$price);
            msg("Цена ".$price." rub для товара ".$resset);
        }
        else{
            echo "Error: " . $el->LAST_ERROR;
            exit;
        }
    }else{
        //$res = CIBlockElement::SetPropertyValuesEx($check, 19, $prop);
        echo $check." Обновлено - ".$data['goods_name'];
        $resset = setPrice($check,$price);
        msg("Цена ".$price." rub для товара ".$resset);
    }
    echo "<br>";
    return;
}
function setPrice($PRODUCT_ID, $price){
    $arFields = Array(
        "PRODUCT_ID" => $PRODUCT_ID,
        "PRICE" => $price,
        "CURRENCY"=>"RUB",
        "CATALOG_GROUP_ID"=>1,
        "QUANTITY_FROM"=>false,
        "QUANTITY_TO"=>false
    );
    $res = CPrice::GetList(array(),array("PRODUCT_ID" => $PRODUCT_ID));
    //$res = CPrice::GetList(array(),array("PRODUCT_ID" => 889));
    //dd($res->Fetch());
    if ($arr = $res->Fetch()){
        CPrice::Update($arr["ID"], $arFields);
        return 'update';
    }else{
        $a = CPrice::Add($arFields);
        return 'add';
    }

}
function checkSection($service_id,$ibl){
    $arFilter = Array(
        'IBLOCK_ID'=>$ibl,
        'UF_UNVERS_ID'=>$service_id,
    );
    $res = CIBlockSection::GetList(Array(), $arFilter, false, Array("UF_UNVERS_ID"));
    while($item = $res->GetNext()){
        //dd($item);
        //$res = $ob->Update($item['ID'], $arFields);
        return $item['ID'];
    }

    return false;

}
function checkElement($service_id=null,$ibl,$code=null){
    $arSelect = array("ID", "NAME","PROPERTY_UF_UNVERS_ID");
    $arFilter = array("IBLOCK_ID" => $ibl, "PROPERTY_UF_UNVERS_ID"=>$service_id);
    if($code!==null){
        $arFilter = array("IBLOCK_ID" => $ibl, "CODE"=>$code);
    }
    $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        return $arFields['ID'];
    }
    return false;
}

function getGoodsAll($ibl){
    $arSelect = array("ID", "NAME","PROPERTY_UF_UNVERS_ID");
    $arFilter = array("IBLOCK_ID" => $ibl,);
    $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields[] = $ob->GetFields();
    }
    return $arFields;
}
function loadDataUniverse($token,$method,$fields=null, $update=0){
    $dataFile = json_decode(file_get_contents($method.'.json'), true);
    if(!empty($dataFile) && $update==0){
        return $dataFile;
    }
    echo "Обновление<br>";
    $url = "https://94.24.239.206:9100/api/v1";
    $username = "drugizm12";
    $password = "ODkEP3Q9";
    $data = [
        "method" => $method,
    ];
    if(!empty($fields)){
        $data=array_merge($data,$fields);
    }
    $data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string),
        'Token:'.$token
    ]);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST , false);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    file_put_contents($method.'.json',$result);
    return json_decode($result, true);
}

function deletedServices($servs,$ibl){
    $arSelect = array("ID", "NAME","PROPERTY_PRICE","PROPERTY_UF_UNVERS_ID");
    $arFilter = array("IBLOCK_ID" => $ibl);
    //vd($servs[15]);
    $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $data[]= $arFields;
    }
    //vd($data[15]);
    $i=0;
    foreach ($data as $item){
        foreach ($servs as $serv){
            if($item['PROPERTY_UF_UNVERS_ID_VALUE'] == $serv['service_id']){
                //echo "<br>OK ".$item['ID'];
                continue 2;
            }
        }
        $i++;
        echo "<br>DELETE ".$item['ID'];
        CIBlockElement::Delete($item['ID']);
    }
    return "Удалено - ".$i."<br>";
}
function getToken(){
    $url = "https://94.24.239.206:9100/api/v1";
    $username = "drugizm12";
    $password = "ODkEP3Q9";
    $Apikey = base64_encode( "drugizm121516");
    $ApiPass = base64_encode( "MQowtQOX");
    $data = [
        "method" => "token",
        "apikey" => $Apikey,
        "apipass" => $ApiPass
    ];
    $data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
    ]);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST , false);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = json_decode(curl_exec($curl), true);
    return $result['code'];
}
function msg($data){
    echo "<br>";
    echo $data;
    echo "<br>";
}
function setCountGoods($id, $qty){
    $arFields = array(
        "ID" => $id,
        "QUANTITY" => $qty, //выставляем тип ндс (задается в админке)
    );
    if(CCatalogProduct::Add($arFields))
        return true;
    else
        return false;
    ///склады
    /*
    $arFields = Array(
        "PRODUCT_ID" => $id,
        "STORE_ID" => 1,
        "AMOUNT" => $qty,
    );
    vd($arFields);
    $ID = CCatalogStoreProduct::Add($arFields);*/
}

function replacerName($name){
    $arr=['*'];

    return (str_replace($arr,"",$name));
}
?>