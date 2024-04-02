function add1(ID) {
	$.ajax({
        type: "POST",
        url: "add1.php",
        data: {
			PRODUCT_ID: ID
		},
        success: function(msg){
			BX.onCustomEvent('OnBasketChange');
        },
		error:  function(xhr, str){
	    	alert('Возникла ошибка: ' + xhr.responseCode);
         }
    });
}

function add() {
	var msg   = $('#formx').serialize();
	$.ajax({
        type: "POST",
        url: "add.php",
        data: msg,
        success: function(data){
            $('#results').html(data);
			console.log(data)
        },
		error:  function(xhr, str){
	    	alert('Возникла ошибка: ' + xhr.responseCode);
         }
    });
}

function sect(ID) {
	
	$('.choose-block__slide').slick('unslick');
	$('.choose-block__slide').hide();
	
	$.ajax({
        type: "POST",
        url: "sect.php",
        data: {
			SECTION_ID: ID
		},
        success: function(data){
            $('#result-sect').html(data);
			
			
			$('.choose-block__slide').on('init', function(event, slick){
    			$('.choose-block__slide').show();
			});
			
			$('.choose-block__slide').slick({
				slidesToShow: 3,
				responsive: [
				{
					  breakpoint: 1199,
						settings: {
							slidesToShow: 2,
					}
				},
				{
			  		breakpoint: 768,
						settings: {
							slidesToShow: 3,
					}
				},
				{
					breakpoint: 741,
						settings: {
							slidesToShow: 2,
						}
				},
				{
					  breakpoint: 481,
						settings: {
							slidesToShow: 1,
						}
				}]
  			}); 
        },
		error:  function(xhr, str){
	    	alert('Возникла ошибка: ' + xhr.responseCode);
         }
    });
}
	
$(document).ready(function(){
	var custom_values = [1000, 3000, 5000, 10000, 15000, 25000, 30000];

	 $(".js-range-slider").ionRangeSlider(
		 {
			values: custom_values,
			skin: "big",
			grid: true,
						
    	 }
		); 
	
	
	$(document).on('click', '.choose-block__button',function(){
        id = $(this).attr("data-id");

        $(this)
            .clone()
            .css({'position' : 'absolute', 'z-index' : '11100', top: $(this).offset().top, left:$(this).offset().left})
            .appendTo("body")
            .animate({opacity: 0.5, 
                left: $(".sm-cart").offset()['left'],
                top: $(".sm-cart").offset()['top'],
                width: 20}, 700, function() {
                $(this).remove();
            });
    });
	
	$(document).on('click', '.card__button',function(){

        $(this)
            .clone()
            .css({'position' : 'absolute', 'z-index' : '11100', top: $(this).offset().top, left:$(this).offset().left})
            .appendTo("body")
            .animate({opacity: 0.5, 
                left: $(".sm-cart").offset()['left'],
                top: $(".sm-cart").offset()['top'],
                width: 20}, 700, function() {
                $(this).remove();
            });
    });
	
	
	$(document).on('click', '.choose-block__button',function(){
		add1( $(this).attr('data-id') );
	});
	
	$(document).on('click', '.choose-block__item',function(){
		
		tub = $(this).attr('data-tub');
		
		$(".choose-block__item").removeClass('choose-block__item-activ');
		$(this).addClass('choose-block__item-activ');
		
		$('#button-basket-'+tub).attr('data-id', $(this).attr('data-id') );
		
		$('#js-price-'+tub).html( $(this).attr('data-price') )
		$('#js-img-'+tub).attr( "src", $(this).attr('data-img') )
	});
	
	
	
	$('.tub-block__item').click( function(){
		
		id = $(this).attr("id");
		
		$('.tub-block__item').removeClass('tub-block__item-activ');
		$(this).addClass('tub-block__item-activ');
				
		$('.tub-block__tub').removeClass('tub-block__tub-activ');		
		$('#'+id+'-t').addClass('tub-block__tub-activ');
		
		$('.choose-block__slide').slick('setPosition'); 
		
	});
	
	$('.accordion__item').click( function(){
		
		$('.accordion__text').stop().hide("slow");
		$('.accordion__item').removeClass('accordion__item-activ');
		$('.accordion__arr').removeClass('accordion__arr-activ');
		

		$(this).addClass('accordion__item-activ');
		$(this).find('.accordion__text').stop().show("slow");
		$(this).find('.accordion__arr').addClass("accordion__arr-activ");
		
	});
	
	
	
	$(document).on('click', '.card__more',function(){
		$(this).parent().parent().parent(".card").find($('.card__prev')).hide();
		$(this).parent().parent().parent(".card").find($('.card__detail')).show();
	
	});
	
	
	$(document).on('click', '.card__close',function(){
		$(this).parent().parent(".card").find($('.card__prev')).show();
		$(this).parent().parent(".card").find($('.card__detail')).hide();
	} );

	
	$('.choose-block__slide').slick({
		slidesToShow: 3,
		responsive: [
    	{
			  breakpoint: 1199,
				settings: {
					slidesToShow: 2,
			}
		},
		{
			  breakpoint: 768,
				settings: {
					slidesToShow: 3,
			}
		},
		{
			  breakpoint: 741,
				settings: {
					slidesToShow: 2,
				}
		},
		{
			  breakpoint: 481,
				settings: {
					slidesToShow: 1,
				}
    	}]
  	}); 
	
	
	$('.slider').slick({
		arrows: false,
		
  	});

	//Для магазина

	$("#horizontal-multilevel-menu>li>.shop-parent-1").click(function (){
		let child = $(this).closest('li').find('.child-1');
		$('.child-1').each(function (){
			if($(this).is(":visible")){
				$(this).closest('li').find('.child-1').slideToggle(500);
			}
		});
		console.log(child.is(":visible"));
		if(!child.is(":visible")){
			$(this).closest('li').find('.child-1').slideToggle(500);
		}
		return false;
	})
	$('body').on('click','.open-shop-filter',function (){
		$('.smartfilter-shop').slideToggle();
	});
	$('body').on('click','.open-search',function (){
		$('.search-input-shop').slideToggle();
	});
});