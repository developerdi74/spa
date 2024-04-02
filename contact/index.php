<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Как к нам проехать, записаться на прием или позвонить - страница Контакты СПА-центра Другое Измерение");
$APPLICATION->SetTitle("Контакты СПА-центр «Другое измерение»");
?><div class="section">
	<div class="center">
		<div class="section-container">
 <span class="section-container-left-top"></span> <span class="section-container-right-top"></span> <span class="section-container-left-bottom"></span> <span class="section-container-right-bottom"></span> <span class="section-container-left-bg"></span> <span class="section-container-right-bg"></span> <span class="section-container-top-bg"></span> <span class="section-container-bottom-bg"></span> <br>
			<h5 class="contacts-description">
			<div class="title-container">
				<h1>Контакты</h1>
			</div>
			<p>
				 Ждем вас в СПА-центре «Другое измерение». Мы с вдохновением и профессионально позаботимся о вашей красоте и здоровье.
			</p>
 </h5>
			<h5>Адрес</h5>
			<p>
				 г. Магнитогорск, пр. Ленина, 27
			</p>
			<h5>Время работы</h5>
			<p>
				 Пн-Вc: 09:00-21:00
			</p>
			<h5>Телефон</h5>
			<p>
 <a href="tel:+73519580111">+7 (3519) 580-111</a>
			</p>
			<h5>Электронная почта</h5>
 <a href="mailto:info@spa-di.ru">info@spa-di.ru</a><br>
			<h5>Информация о юр.лице</h5>
			<p>
				 ООО "Другое измерение"<br>
			</p>
			<p>
				 Юридический адрес: 455044, г. Магнитогорск, пр-к Ленина, 88/2.
			</p>
			<p>
				 Фактический адрес: 455000, г. Магнитогорск, пр. Ленина, 27.
			</p>
			<p>
				 ИНН / КПП: 7446047217 / 744601001
			</p>
			 ОГРН: 1067446022324
			<p>
				 выдан 05.04.06 г. Инспекцией Федеральной налоговой службы по Правобережному району г. Магнитогорска Челябинской области. <br>
			</p>
            <br>
			 <?
            /* $APPLICATION->IncludeComponent(
	"pitcom:feedback",
	"main",
	Array(
		"0" => "=",
		"1" => "{",
		"2" => "f",
		"3" => "a",
		"4" => "l",
		"5" => "s",
		"6" => "e",
		"7" => "}"
	)
);*/
             ?>
            <?/*<a class="button button-big icon-email" href="#" title="">Написать нам</a>*/?>
			<div class="contacts-map">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.427371303806986;s:10:\"yandex_lon\";d:58.984421626983554;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:58.984421626983604;s:3:\"LAT\";d:53.42737130380965;s:4:\"TEXT\";s:89:\"СПА-центр###RN###Другое измерение###RN###+7 (3519) 580-111###RN###\";}}}",
		"MAP_HEIGHT" => "534",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>