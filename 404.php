<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
$APPLICATION->SetTitle("Страница не найдена");
@define("ERROR_404","Y");?>


	<div class='center'>
		<h1>Страница не найдена</h1>
		<br>
		<div class="error-404__btn">
           <a href="/" class="btn btn-return">Вернуться на главную</a>
        </div>
        <?
$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"N",
	"CACHE_TIME"	=>	"3600"
	)
);?>
	</div>


<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>