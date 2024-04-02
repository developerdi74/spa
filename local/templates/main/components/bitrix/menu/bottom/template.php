<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//echo'<pre>';print_r($arData);echo'</pre>';?>

<?if( !empty($arResult) ):?>
  <nav>
    <ul>
      <?foreach( $arResult as $arItem ):?>
        <li><p><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></p></li>
      <?endforeach?>
    </ul>
  </nav>
<?endif?>
<?/*
        <nav>
            <ul>
                <li><p><a href="#" title="">О салоне</a></p></li>
                <li><p><a href="#" title="">Уход за лицом</a></p></li>
                <li><p><a href="#" title="">Уход за телом</a></p></li>
                <li><p><a href="#" title="">Уход за руками</a></p></li>
                <li><p><a href="#" title="">Уход за ногами</a></p></li>
                <li><p><a href="#" title="">Уход за волосами</a></p></li>
                <li><p><a href="#" title="">Фитнес</a></p></li>
                <li><p><a href="#" title="">Спа-кафе</a></p></li>
            </ul>
        </nav>
*/?>