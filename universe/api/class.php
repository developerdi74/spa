<?php
header('Access-Control-Allow-Origin: *');
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
\Bitrix\Main\Loader::includeModule('iblock');
class apiPlanning{
    public function getServices(){
        $sects = self::getSections();
        $els = self::getElements();
        foreach ($els as $el){
            $sects[$el['id']] = $el;
        }
        $data = self::getTree($sects);
        $data = array_values($data);
        return json_encode($data);
    }
    public static function getSections(){
        $arFilter = Array(
            'IBLOCK_ID'=>19,
            'ACTIVE'=>"Y",
        );
        $sections=[];
        $res = CIBlockSection::GetList(Array('NAME'=>"asc"), $arFilter, false, Array("ID","NAME","UF_UNVERS_ID",'IBLOCK_SECTION_ID','DEPTH_LEVEL'));
        while($arFields = $res->GetNext()){
            $sections[$arFields['ID']]=[
                'id'=>$arFields['ID'],
                'name'=>$arFields['NAME'],
                'servid'=>$arFields['UF_UNVERS_ID'],
                'parent'=>$arFields['IBLOCK_SECTION_ID'],
                'depth'=>$arFields['DEPTH_LEVEL'],
            ];
        }
        return $sections;
    }
    public static function getElements(){
        $arSelect = array("ID", "NAME","PROPERTY_PRICE","PROPERTY_UF_UNVERS_ID",'IBLOCK_SECTION_ID');
        $arFilter = array("IBLOCK_ID" => 19,
            "ACTIVE"=>"Y",
           // '>PROPERTY_PRICE'=>0
        );
        $res = CIBlockElement::GetList(array('NAME'=>"asc"), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $data[$arFields['ID']]=[
                'id'=>$arFields['ID'],
                'name'=>$arFields['NAME'],
                'price'=>$arFields['PROPERTY_PRICE_VALUE'],
                'servid'=>$arFields['PROPERTY_UF_UNVERS_ID_VALUE_ID'],
                'parent'=>$arFields['IBLOCK_SECTION_ID'],
            ];
        }
        return $data;
    }
    public static function getTree($sections){
        $tree=[];
        foreach ($sections as $k=>&$section){
            if($section['parent'] == null){
                $tree[$k] =& $section;
            }else{
                $sections[$section['parent']]['childs'][]=&$section;
            }
        }
        uasort($tree, 'cmp');
        return $tree;
    }
    public static function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    public static function buildMenu($tree){
        $html="<ul>";
        foreach ($tree as $item){
            if(isset($item['childs'])){
                $html .= "<li><a href = '{$item['id']}'>{$item['name']}</a>";
                $html .= self::buildMenu($item['childs']);
                $html .= '<li>';
            }else{
                $html .= "<li><a href = '{$item['id']}'>{$item['name']}</a>";
            }
        }
        $html.="</ul>";
    return $html;
}
}
?>