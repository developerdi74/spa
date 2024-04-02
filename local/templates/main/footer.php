<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <!--footer--> <footer>
    
<div class="center">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);?>
	<div class="header">
		<div class="header-copy">
			<p>
				 СПА-центр «Другое измерение», г. Магнитогорск, пр. Ленина, 27<br>
				<b>ИНН</b>: 744406259750  <b>ОГРН</b>: 306744526400033 <b>e-mail</b>: info@spa-di.ru
			</p>
		</div>
		<div class="header-social">
			<p>
<a class="icon-vk" href="https://vk.com/drugoeizmereniespa" title=""></a><a class="icon-inst" href="https://www.instagram.com/drugoeizmereniespa/" title=""></a>
			</p>
		</div>
		<div class="header-phone">
			<p>
 <a href="tel:+73519580111" style="color:#7faca5;text-decoration:none">+7 (3519) 580-111</a>
			</p>
		</div>
		 <?
$APPLICATION->IncludeComponent(
	"pitcom:feedback",
	"zapis",
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
);?>
	</div>
	<table class="table">
	<tbody>
	<tr>
	<?/*Вызов ZOON позже удалить
		<td class="table">
			 <!-- Zoon.ru widget start -->
			<div class="zoon-widget-comments" data-id="55564b8540c088907a8df8f7" data-type="240x160" data-stars="4+" data-style="dark">
				 Powered by <a href="https://magnitogorsk.zoon.ru/fitness/tsentr_krasoty_drugoe_izmerenie_na_prospekte_lenina/">Zoon</a>
			</div>
			 <script src="//zoon.ru/jsext/widget_comments.js?v=4"></script> <!-- Zoon.ru widget end -->
		</td>*/
	?>
		<td class="table">
			<div class="cookie">
				 На нашем сайте используются файлы cookie. Файлы cookie используются для улучшения функциональности и удобства использования интернет сайта, а также в рекламных и аналитических целях. Чтобы узнать больше о файлах cookie, методах их использования и настройках правил обработки файлов cookie в Вашем браузере перейдите по <a href="/privacy-policy/">ссылке</a>. Продолжая использовать наш сайт без внесения изменений в настройки правил обработки файлов cookie, Вы предоставляете согласие на использование файлов cookie.
			</div>
		</td>
	</tr>
	</tbody>
	</table>
</div>
 </footer>


<script src="https://widget.universe-soft.ru/widget/universe-widget.js/145bf031957772a4f03244640641ac34" type="text/javascript" async "utf-8"></script>
