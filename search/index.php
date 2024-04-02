<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?>

<div class="about">
  <div class="center">
    <div class="text-container">
      <div class="text-container-inside">


<?$APPLICATION->IncludeComponent("bitrix:search.page", "main", Array(
	"RESTART" => "Y",	// Искать без учета морфологии (при отсутствии результата поиска)
		"CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"arrWHERE" => array(
			0 => "forum",
			1 => "iblock_news",
			2 => "iblock_articles",
			3 => "iblock_books",
			4 => "blog",
		),
		"arrFILTER" => array(	// Ограничение области поиска
			0 => "no",
		),
		"SHOW_WHERE" => "N",	// Показывать выпадающий список "Где искать"
		"PAGE_RESULT_COUNT" => "20",	// Количество результатов на странице
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"TAGS_SORT" => "NAME",
		"TAGS_PAGE_ELEMENTS" => "20",
		"TAGS_PERIOD" => "",
		"TAGS_URL_SEARCH" => "",
		"TAGS_INHERIT" => "Y",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%",
		"COMPONENT_TEMPLATE" => ".default",
		"NO_WORD_LOGIC" => "N",	// Отключить обработку слов как логических операторов
		"USE_TITLE_RANK" => "N",	// При ранжировании результата учитывать заголовки
		"DEFAULT_SORT" => "rank",	// Сортировка по умолчанию
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"SHOW_WHEN" => "N",	// Показывать фильтр по датам
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"USE_LANGUAGE_GUESS" => "N",	// Включить автоопределение раскладки клавиатуры
		"USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
		"SHOW_RATING" => "",	// Включить рейтинг
		"RATING_TYPE" => "",	// Вид кнопок рейтинга
		"PATH_TO_USER_PROFILE" => "",	// Шаблон пути к профилю пользователя
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над результатами
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под результатами
		"PAGER_TITLE" => "Результаты поиска",	// Название результатов поиска
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Название шаблона
	),
	false
);?>

      </div>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>