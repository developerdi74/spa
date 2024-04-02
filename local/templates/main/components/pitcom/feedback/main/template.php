<a class="button button-big icon-email" id="<?=$arResult['ID']?>" href="#popup<?=$arResult['ID']?>" title="">Написать нам</a>

<div class="zoom-anim-dialog mfp-hide feedback-popup" id="popup<?=$arResult['ID']?>">
    <div class="popup popup-green">
        <div class="popup-top"></div>
        <div class="popup-bg">
            <div class="popup-container">
                <div class="title-container text-center">
                    <h3>Написать нам</h3>
                </div>

		<?=bitrix_sessid_post()?>
        	<div class="error-box"></div>

                <div class="popup-container-form">
                    <div class="popup-container-form-column">
                        <div class="popup-container-form-column-field">
                            <input name="name" placeholder="Ваше имя" type="text">
                        </div>
                    </div>
                    <div class="popup-container-form-column">
                        <div class="popup-container-form-column-field">
                            <input name="phone" placeholder="+7 ___ ___-__-__" type="tel">
                        </div>
                        <div class="popup-container-form-column-field">
                            <input name="email" placeholder="E-Mail" type="email">
                        </div>
                    </div>
                    <div class="popup-container-form-column">
                        <div class="popup-container-form-column-field">
                            <textarea name="text" placeholder="Комментарии"></textarea>
                        </div>
                    </div>
                    <p class="text-center"><button class="sended button button-big button-white icon-email">Отправить</button></p>
                    <p class="text-center" style="color:#fff;padding-top:15px;">Нажимая на кнопку Отправить, я даю <a style="color:#fff;" href="/terms-of-use/" target="_blank">согласие на обработку персональных данных</a></p>
                </div>
            </div>
        </div>

        <div class="popup-bottom"></div>

    </div>

</div>

<script type="text/javascript">

  $(document).ready(function() {
    $('#<?=$arResult['ID']?>').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom',
      callbacks: {
        open: function() { 
          $('.feedback-popup .error-box').hide();
        }
      }
    });
  });

  $('#popup<?=$arResult['ID']?> .sended').click( function() { 
    $('.feedback-popup .error-box').hide();
    //alert(a);
    var b = {};
    b['type'] = 'zapis';
    $('#popup<?=$arResult['ID']?> select').each( function() { b[$(this).attr('name')] = $(this).val(); });
    $('#popup<?=$arResult['ID']?> input').each( function() { b[$(this).attr('name')] = $(this).val(); });
    $('#popup<?=$arResult['ID']?> textarea').each( function() { b[$(this).attr('name')] = $(this).val(); });

    //
    $.ajax({
      url: '<?=$arResult['URL']?>',
      type: 'POST',
      dataType: 'json',
      cache: false,
      data: b, 
      //timeout: 3000,
      error: function( jqXHR, textStatus, errorThrown ) {
        alert('Request failed: ' + textStatus);
      },
      success: function( data, textStatus, jqXHR ) { 
        if( data.type == 'ok' ) {
          $.magnificPopup.open({
            items: {
              src: '<div class="white-popup"><div class="popup-container"><div style="text-align:center;">'+data.text+'</div></div></div>',
              type: 'inline'
            }
          });
          $('#'+a+' input').each( function() { if( $(this).attr('name') != 'sessid' ) $(this).val(''); });
          $('#'+a+' textarea').each( function() { $(this).val(''); });
        }else{
          $('.feedback-popup .error-box').html(data.text).show();
          $('img.cap-code').attr('src','/bitrix/tools/captcha.php?captcha_sid='+data.capcode);
          $('input[name="captcha_word"]').val('');
          $('input[name="captcha_sid"]').val(data.capcode);
          //alert(data.text);return true;
        }
      }
    });
	//отправка данных для лида в amoCRM
	$.post("https://brainhypnotrans.ru/dizmerenie/site/GetLeadFromSite.php",  b);

    return false;
  });

</script>