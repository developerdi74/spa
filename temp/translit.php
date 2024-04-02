<?

class TPitcomTranslit {

  function Transliterate($string) {
    $cyr=array(
       "Щ",  "Ш", "Ч", "Ц","Ю", "Я", "Ж", "А","Б","В","Г","Д","Е","Ё","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х", "Ь","Ы","Ъ","Э","Є","Ї",
       "щ",  "ш", "ч", "ц","ю", "я", "ж", "а","б","в","г","д","е","ё","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х", "ь","ы","ъ","э","є","ї"
    );
    $lat=array(
       "Shh","Sh","Ch","C","Ju","Ja","Zh","A","B","V","G","D","Je","Jo","Z","I","J","K","L","M","N","O","P","R","S","T","U","F","Kh","'","Y","`","E","Je","Ji",
       "shh","sh","ch","c","ju","ja","zh","a","b","v","g","d","je","jo","z","i","j","k","l","m","n","o","p","r","s","t","u","f","kh","'","y","`","e","je","ji"
    );
    for($i=0; $i<count($cyr); $i++) {
       $c_cyr = $cyr[$i];
       $c_lat = $lat[$i];
       $string = str_replace($c_cyr, $c_lat, $string);
    }
    $string = preg_replace("/([qwrtpsdfghklzxcvbnmQWRTPSDFGHKLZXCVBNM]+)[jJ]e/", "\${1}e", $string);
    $string = preg_replace("/([qwrtpsdfghklzxcvbnmQWRTPSDFGHKLZXCVBNM]+)[jJ]/", "\${1}'", $string);
    $string = preg_replace("/([eyuioaEYUIOA]+)[Kk]h/", "\${1}h", $string);
    $string = preg_replace("/^kh/", "h", $string);
    $string = preg_replace("/^Kh/", "H", $string);
    return $string;
  }

  function UrlTranslit($string) {
    //$string = str_ireplace("-", "_", $string);
    $string = str_ireplace("рН", "ph", $string);

    $string = preg_replace("/[_\s\.,?!\+\[\](){}]+/", "-", $string);
    $string = preg_replace("/-{2,}/", "--", $string);
    $string = preg_replace("/_-+_/", "--", $string);
    $string = preg_replace("/[_\-]+$/", "", $string);
    $string = TPitcomTranslit::Transliterate($string);
    $string = ToLower($string);
    $string = preg_replace("/j{2,}/", "j", $string);
    $string = preg_replace("/[^0-9a-z_\-]+/", "", $string);
    while(true) {
      $s = preg_replace("/(\d+)kh(\d+)/", "$1x$2", $string);
      if( $s == $string ) break;
      $string = $s;
    }
    $string = str_replace('-0', '', $string);
    while(substr($string,0,1)=='-') $string = substr($string,1);
    return $string;
  }

  function UrlTranslitFull($IBlockID,$string) {
    $s = TPitcomTranslit::UrlTranslit($string);
    if( !TPitcomTranslit::IsExistsCode($IBlockID,$s) ) return $s;
    $i = 1;
    while( TPitcomTranslit::IsExistsCode($IBlockID,$s.'_'.$i) ) $i++;
    return $s.'_'.$i;
  }

  function UrlTranslitFullSec($IBlockID,$string) {
    $s = TPitcomTranslit::UrlTranslit($string);
    if( !TPitcomTranslit::IsExistsCodeSec($IBlockID,$s) ) return $s;
    $i = 1;
    while( TPitcomTranslit::IsExistsCodeSec($IBlockID,$s.'_'.$i) ) $i++;
    return $s.'_'.$i;
  }

  function IsExistsCode($IBlockID,$v,$id=false) {
    $v = trim($v);
    if(strlen($v)==0) return false;
    $arSelect = array('IBLOCK_ID','ID');
    $arFilter = array('IBLOCK_ID'=>intval($IBlockID),'CODE'=>$v);
    $res = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
    while( $ob = $res->GetNext() ) {
      if( $id===false || $ob['ID']!=$id ) return true;
    }
    return false;
  }

  function IsExistsCodeSec($IBlockID,$v,$id=false) {
    $v = trim($v);
    if(strlen($v)==0) return false;
    $arFilter = array('IBLOCK_ID'=>intval($IBlockID),'CODE'=>$v);
    $res = CIBlockSection::GetList(array(),$arFilter,false);
    while( $ob = $res->GetNext() ) {
      if( $id===false || $ob['ID']!=$id ) return true;
    }
    return false;
  }
}

?>