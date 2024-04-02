<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "СПА-центр \"Другое измерение\" на ленина 27. Большой выбор услуг, лицензия, подарочные сертификаты.");
$APPLICATION->SetPageProperty("title", "СПА салон \"Другое измерение\" в Магнитогорске | Официальный сайт");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("СПА салон Другое измерение в Магнитогорске ");
?><div class="top-slider">
	<div class="top-slider-thumb">
 <img alt="Персональные предложения в Спа-центре «Другое измерение» в Магнитогорске" src="/images/thumbnails/tmb-top-slider-0.jpg">
	</div><!-- 
	<div class="top-slider-thumb">
 <img alt="Бассейн в Спа-центре «Другое измерение» в Магнитогорске" src="/images/thumbnails/Слайдер_бассейн.jpg">
	</div> -->
	<div class="top-slider-thumb">
 <a href="#" title=""><img alt="Хаммам в Спа-центре «Другое измерение»" src="/images/thumbnails/Слайдер_хаммам.jpg"></a>
	</div>
	<div class="top-slider-thumb">
 <a href="#" title=""><img alt="Студия стиля Спа-центра «Другое измерение»" src="/images/thumbnails/Слайдер_салон.jpg"></a>
	</div>
	<div class="top-slider-thumb">
 <a href="#" title=""><img alt="Кабинет косметолога в Спа-центре «Другое измерение» в Магнитогорске" src="/images/thumbnails/tmb-top-slider-3.jpg"></a>
	</div>
	<div class="top-slider-thumb">
 <a href="#" title=""><img alt="Сертификаты в Спа-центре «Другое измерение»" src="/images/thumbnails/Слайдер_сертификат.jpg"></a>
	</div>
</div>
<div class="about">
	<div class="center">
		<div class="text-container">
			<div class="text-container-inside">
				<p>
					 Добро пожаловать в «Другое измерение»! <br>
					 Наш центр гармонично совмещает в себе клинику красоты и спа-комплекс. Профессионализм, индивидуальный подход, полноценное пошаговое сопровождение каждого клиента — мы реализовали эти принципы в полном объеме. Здесь заботятся о клиентах, даря им красоту и молодость, создавая ощущение безмятежности и покоя. Мы сделаем все, чтобы Вам хотелось вернуться сюда опять и опять…
				</p>
				<p>
 <a class="button icon-arrow-right" href="#" title="">О СПА-центре</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="benefits-list">
	<div class="center">
		<div class="benefits-list-slider">
			<div class="benefits-list-slider-thumb">
				<p class="benefits-list-photo">
 <img src="/images/icons/icon-benefits-1.png" alt="">
				</p>
				<h4>безопасность</h4>
				<p>
					 Cтрогий контроль дезинфекции<br>
					 и стерилизации инструментов
				</p>
			</div>
			<div class="benefits-list-slider-thumb">
				<p class="benefits-list-photo">
 <img src="/images/icons/icon-benefits-2.png" alt="">
				</p>
				<h4>Качество</h4>
				<p>
					 Все мастера проходят учебу<br>
					 минимум раз в год в лучших<br>
					 международных школах
				</p>
			</div>
			<div class="benefits-list-slider-thumb">
				<p class="benefits-list-photo">
 <img src="/images/icons/icon-benefits-3.png" alt="">
				</p>
				<h4>Эффективность</h4>
				<p>
					 Наш салон имеет медицинскую<br>
					 лицензию
				</p>
			</div>
			<div class="benefits-list-slider-thumb">
				<p class="benefits-list-photo">
 <img src="/images/icons/icon-benefits-4.png" alt="">
				</p>
				<h4>Надежность</h4>
				<p>
					 Более 13 лет успешной<br>
					 работы в области косметологии<br>
					 и медицины
				</p>
			</div>
		</div>
	</div>
</div>
<div class="articles">
	<div class="center">
		<div class="title-container">
			<h4>Новости</h4>
		</div>
		<div class="text-container text-center">
			<p>
				 Самые актуальные новости нашего Спа-Центра "Другое измерение"
			</p>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"slider.note",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "links",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "TIB_CATALOG",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "1",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(0=>"TIME",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
	</div>
</div>
<div class="about">
	<div class="center">
		<div class="title-container">
			<h4>Что мы рекомендуем этой осенью<br>
 </h4>
		</div>
		<div class="text-container">
			<div class="text-container-inside">
				<p>
					 Мы предлагаем для вас самые актуальные процедуры красоты, направленные на бережный уход после летнего периода. Рекомендуем уход для лица на французской профессиональной косметике <a href="https://spa-di.ru/services/uhod-za-licom/ukhody-za-litsom/uhody-dla-lica-biologique-recherche/?sphrase_id=401">Biologique Recherche</a> класса Люкс (в УрФО Biologique Recherche можно приобрести только в нашем спа-центре). Отеки вокруг глаз и заметная подтяжка — результат процедуры <a href="https://spa-di.ru/services/uhod-za-licom/apparatnaja-kosmetologija/rf-lifting/?sphrase_id=402">RF-лифтинг лица</a> на аппарате PowerShape. Одна из лучших процедур, которая поможет вам значительно улучшить качество кожи, «оживить» ее и замедлить процессы старения — <a href="https://spa-di.ru/services/uhod-za-licom/vrachebnaya-kosmetologiya/biorevitalizacija/?sphrase_id=592">биоревиталиция</a>.
				</p>
				<p>
					 Обязательно нужно заняться телом. Для спортсменов с интенсивной нагрузкой, граждан, страдающих варикозом или ведущих малоподвижный образ жизни, для обладателей целлюлита — отлично подойдет новейшая методика аппаратного массажа, обладающая мощным лимфодренажным действием — <a href="https://spa-di.ru/services/uhod-za-telom/apparatnyje-metodiki/rsleek/?sphrase_id=1334">R-sleek</a>. Для желающих избавиться от лишних сантиметров - рекомендуем записаться на <a href="https://spa-di.ru/services/uhod-za-telom/apparatnyje-metodiki/kriolipoliz/?sphrase_id=593">криолиполиз</a>. Смело посещайте процедуры аппаратного массажа LPG <a href="https://spa-di.ru/services/uhod-za-licom/apparatnaja-kosmetologija/lpg-massazh-lica/?sphrase_id=403">лица</a> и <a href="https://spa-di.ru/services/uhod-za-telom/apparatnyje-metodiki/lpg-massazh-tela/?sphrase_id=404">тела</a>! Не забываем про водные процедуры и смело идем на <a href="https://spa-di.ru/services/fitnes/akvaaerobika/akvaaerobika/">аквааэробику</a>. Кто хочет избавиться от дискомфорта (болях в спине, бессонницы, усталости, проблем с суставами, сколиоза, при зажатости плеч и т.д.) - идет на <a href="https://spa-di.ru/services/fitnes/pilates-pilates-reformer/pilates-na-bolshom-oborudovanii/">Пилатес на большом оборудовании</a><a href="https://spa-di.ru/services/fitnes/pilates-pilates-reformer/pilates-na-bolshom-oborudovanii/"></a><a href="https://spa-di.ru/services/fitnes/pilates-pilates-reformer/pilates-na-bolshom-oborudovanii/"></a>. Вы уже чувствуете прилив бодрости и сил?<br>
				</p>
				<p align="JUSTIFY">
					 Если осенью у вас есть именинники или другой замечательный повод для подарка — предлагаем спа-программы в <a href="https://spa-di.ru/services/khamam/">хаммаме</a>. В состав программы входят разогрев в ароматном пару, увлажнение, пилинг, по желанию можно добавить маску-обертывание и массаж. Прекрасным сюрпризом для вашего близкого человека&nbsp; станут: профессиональный уход за лицом, расслабляющий массаж, процедуры для оздоровления волос, маникюр или фитнес-абонемент. Для вашего удобства мы подготовили подарочные <a href="https://spa-di.ru/certificate/">сертификаты</a> на наши услуги номиналом от 1 000 до 30 000 руб.<br>
				</p>
				<p align="JUSTIFY">
					 Мы работаем только на профессиональном оборудовании и используем только качественные косметические средства. Мы уверены, вас удивит преображение. Наши косметологи с медицинским образованием готовы в любое удобное для вас время сделать диагностику вашей кожи или волос, дать рекомендации и провести эффективную процедуру. Мы с радостью составим для каждого из вас индивидуальную программу красоты и здоровья!&nbsp;
				</p>
				<p align="JUSTIFY">
					 Мы желаем вам отличного настроения и только положительных эмоций!
				</p>
			</div>
		</div>
	</div>
</div>
<div class="services">
	<div class="center">
		 <?$GLOBALS['arrServiceFilter']=array('=PROPERTY_IS_SHOW_MAIN'=>13);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"slider.service",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "slider.service",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrServiceFilter",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "TIB_CATALOG",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "1",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Услуги",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
	</div>
</div>
<div class="articles">
	<div class="center">
		<div class="title-container">
			<h4>Искусство красоты и здоровья</h4>
		</div>
		<div class="text-container text-center">
			<p>
				 Мы подготовили для вас актуальные советы и рекомендации по поддержанию красоты, здоровья и душевного комфорта. Надеемся, что они помогут вам лучше ориентироваться в косметологии, эстетической медицине и в вопросах здорового образа жизни. Вся экспертиза наших сотрудников ― к вашим услугам.
			</p>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"slider.note",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "links",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "TIB_CATALOG",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "1",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(0=>"TIME",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
	</div>
</div>
<div class="action">
	<div class="center">
		<div class="action-container">
			<div class="action-container-thumb">
				<div class="action-container-thumb-container">
 <span class="action-container-thumb-left-top"></span> <span class="action-container-thumb-right-top"></span> <span class="action-container-thumb-left-bottom"></span> <span class="action-container-thumb-right-bottom"></span> <span class="action-container-thumb-left-bg"></span> <span class="action-container-thumb-right-bg"></span> <span class="action-container-thumb-top-bg"></span> <span class="action-container-thumb-bottom-bg"></span>
					<div class="action-container-thumb-container-photo">
 <img src="/images/icons/icon-action.png" alt="">
					</div>
					<div class="action-container-thumb-container-description">
						<h4>Акции<br>
						 и скидки</h4>
						<p>
							 Выгодные предложения по услугам каждый месяц
						</p>
					</div>
				</div>
 <a class="action-container-thumb-link" href="/action/" title=""></a>
			</div>
			<div class="action-container-thumb">
				<div class="action-container-thumb-container">
 <span class="action-container-thumb-left-top"></span> <span class="action-container-thumb-right-top"></span> <span class="action-container-thumb-left-bottom"></span> <span class="action-container-thumb-right-bottom"></span> <span class="action-container-thumb-left-bg"></span> <span class="action-container-thumb-right-bg"></span> <span class="action-container-thumb-top-bg"></span> <span class="action-container-thumb-bottom-bg"></span>
					<div class="action-container-thumb-container-photo">
 <img src="/images/icons/icon-action-2.png" alt="">
					</div>
					<div class="action-container-thumb-container-description">
						<h4>Подарочный<br>
						 сертификат</h4>
						<p>
							 Сделайте подарок родным и близким
						</p>
					</div>
				</div>
 <a class="action-container-thumb-link" href="/certificate/" title=""></a>
			</div>
		</div>
	</div>
</div>
 <br>
 <?/*
 Не понятно зачем здесь, позже удалить
<!-- Begin LeadBack code {literal} -->
<script>
    var _emv = _emv || [];
    _emv['campaign'] = 'a5a01195b62ec3e18455e21c';
    
    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();
</script>
<!-- End LeadBack code {/literal} -->*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>