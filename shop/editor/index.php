<?php
exit;
//разработка быстрого редактора данных в ИБ
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
include "editor.php";
$bl=20;
$elements = new \editor\editor(20);
$res = $elements->getElements();
vd($res[2]);?>
<table>
<tr>
    <td>ID</td>
    <td>Название</td>
    <td>Раздел</td>
    <td>Анонс описание</td>
    <td>Анонс Картинка</td>
    <td>Детальное описание</td>
    <td>Детальное Картинка</td>
    <td>Свойства</td>
</tr>
<? foreach ($res as $key=>$item):?>
<tr>
    <td><a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$bl?>&lang=ru&ID=<?=$item['ID']?>&type=shop&WF=Y>"><?=$item['ID']?></a></td>
    <td><?=$item['NAME']?></td>
</tr>
<? endforeach;?>

</table>
    <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
