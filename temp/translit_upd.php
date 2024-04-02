<?
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
  define('IBLOCK_ID',10);
  CModule::IncludeModule("iblock");
  include dirname(__FILE__).'/translit.php';

  // Обновляем элементы ИБ
  $arSelect = array("ID","NAME","CODE");
  $arFilter = array("IBLOCK_ID"=>IBLOCK_ID);
  $res = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
  echo '<table border="1" width="100%">';
  while( $ob = $res->GetNext() ) {
    if( strlen($ob['CODE']) == 0 ) {
      $Code = TPitcomTranslit::UrlTranslitFull(IBLOCK_ID,$ob["NAME"]); 
      echo '<tr><td>'.$ob['ID'].'</td><td>'.$ob['NAME'].'</td><td>'.$Code.'</td></tr>';
      $el = new CIBlockElement;
      $el->Update($ob['ID'],array("CODE"=>$Code));
      unset($el);
    }
  }
  echo '</table>';

  // Обновляем разделы ИБ
  $arFilter = array("IBLOCK_ID"=>IBLOCK_ID);
  $res = CIBlockSection::GetList(array("SORT"=>"ASC"),$arFilter,false);
  echo '<table border="1" width="100%">';
  while( $ob = $res->GetNext() ) {
    if( strlen($ob['CODE']) == 0 ) {
      $Code = TPitcomTranslit::UrlTranslitFullSec(IBLOCK_ID,$ob["NAME"]); 
      echo '<tr><td>'.$ob['ID'].'</td><td>'.$ob['NAME'].'</td><td>'.$Code.'</td></tr>';
      $bs = new CIBlockSection;
      $bs->Update($ob['ID'],array("CODE"=>$Code),false,false);
      unset($bs);
    }
  }
  echo '</table>';

  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>