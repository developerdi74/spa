<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Препараты БиоМиалвел от компании Бьюти Инвест");
?>

		<section>

			<div class="title-page text-center">
				<div class="center">
					<h1>БиоМиалВел</h1>
				</div>
			</div>

			<div class="center">
				<!-- top slider -->
				<div class="top-slider">
					<div>
						<div class="top-slider-image">
							<img src="/bitrix/templates/main/images/thumbnails/tmb-slider-inside-2.jpg" alt="">
						</div>
						<div class="top-slider-description">
							<div class="center">
								<div class="top-slider-description-title">
									<h6>BioMialvel – линия препаратов на основе гиалуронана высокой степени очистки. </h6>
								</div>
							</div>
						</div>
					</div>

					<div>
						<div class="top-slider-image">
							<img src="/bitrix/templates/main/images/thumbnails/tmb-slider-inside-2.jpg" alt="">
						</div>
						<div class="top-slider-description">
							<div class="center">
								<div class="top-slider-description-title">
									<h6>BioMialvel – линия препаратов на основе гиалуронана высокой степени очистки.</h6>
								</div>
							</div>
						</div>
					</div>


				</div>
				<!-- top slider -->


				<div class="text-container">
					<p>Препараты БиоМиалвел на основе высококачественной гиалуроновой кислоты, произведенные Bloomage Freda, предназначены для использования в кабинетах эстетической косметологии.</p>
					<p>Средства применяются в косметологии для проведения контурной коррекции и биоревитализации. Препараты позволяют устранить морщины, рубцы и шрамы, скорректировать форму и объем губ, изменить овал лица и т.д.</p>
					<p>Результат от использования продуктов БиоМиалВел сохраняется на срок до 9 - 15 месяцев. Современные гиалуроновые гели БиомиалВел производятся на основе 100% гиалуроновой кислоты неживотного происхождения (в концентрации до 20 мг/г). Риск возникновения реакции гиперчувствительности к средствам данной линейки минимален. Препараты биосовместимы и полностью рассасываются с течением времени. </p>
				</div>


<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "product", Array(
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"IBLOCK_ID" => "1",	// Инфоблок
		"IBLOCK_TYPE" => "TIB_CATALOG",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "UF_SHOW_MAIN",
			2 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "LINE",	// Вид списка подразделов
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

			</div>



		</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>