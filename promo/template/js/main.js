$(document).ready(function () {
    $(".phone").inputmask({"mask": "+7 999 999-99-99"});

    $('.carousel').carousel({
        interval: false,
        touch: true,
    });
    $('#slider-rewievs2').carousel({
        interval: false,
        touch: true,
    });
    $('#slider-rewievs2 img').on("click", function (){

    });
    $("#register_form").on("submit", function(){
        var data = $(this).serialize();
        $.ajax({
            url: '/promo/ajax/register_form.php',
            method: 'get',
            dataType: 'json',
            data: data,
            success: function(dataAjax){
                 if(dataAjax?.success?.status == 1){
                     $(".container-form").html('<div class="success text-center">Заявка отправлена!<br> Мы свяжемся с Вами в ближайшее время!</div>');
                     ym(43876804,'reachGoal','lead');
                 }else{
                     console.log('er2or');
                 }
                if(dataAjax.error){
                    if('name' in dataAjax.error){
                        $(".reg-name .error").show();
                        console.log('name');
                    }
                    if('phone' in dataAjax.error){
                        $(".reg-phone .error").show();
                        console.log('phone');
                    }
                }
            },
            error: function (dataAjax){
                //console.log(dataAjax);
            },
        });
        return false;
    });

    $("a.topLink").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 500,
            easing: "swing"
        });
        return false;
    });

   $(".tab").on('click', function (){

       var element =$(this).siblings('.answer');
       display = element.css('display');
       if(display == 'none'){
           element.slideDown(500);
           $(this).find('.arrow-down').css({'transform' : "rotate(270deg)"});
       }
       if(display == 'block'){
           element.slideUp(500);
           $(this).find('.arrow-down').css({'transform' : "rotate(90deg)"});
       }
    })

    $(".text-section").on('click', function (){
        $(this).css({'max-height': "100%"});
    })
});