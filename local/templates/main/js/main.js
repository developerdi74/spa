$(document).ready(function(){
//form styling
$('select, input[type=file], input[type=radio], input[type=checkbox]').styler({
    selectSearch: false,
    selectSmartPositioning: true
});


$('.top-slider').show();
$('.top-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3000,
  adaptiveHeight: true
});


$('.services-slider').show();
$('.services-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    responsive: [
    {
     breakpoint: 767,
     settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      adaptiveHeight: true,
  }
},
{
    breakpoint: 600,
    settings: {
     slidesToShow: 2,
     slidesToScroll: 2,
     adaptiveHeight: true,
 }
},

{
 breakpoint: 479,
 settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
}
},
]
});
$('.benefits-list-slider').show();
$('.benefits-list-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    responsive: [
    {
     breakpoint: 999,
     settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      adaptiveHeight: true,
  }
},
{
    breakpoint: 767,
    settings: {
     slidesToShow: 2,
     slidesToScroll: 2,
     adaptiveHeight: true,
 }
},

{
 breakpoint: 479,
 settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
}
},
]
});
$('.articles-slider').show();
$('.articles-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 300000,
    adaptiveHeight: true,
    responsive: [
    {
     breakpoint: 1200,
     settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      adaptiveHeight: true,
  }
},
{
 breakpoint: 800,
 settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
}
},
]
});

$('.main-slider-container').show();
$('.main-slider-container').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3000,
  adaptiveHeight: true
});

$('.specialists-slider').show();
$('.specialists-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    responsive: [
    {
     breakpoint: 767,
     settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      adaptiveHeight: true,
  }
},
{
    breakpoint: 600,
    settings: {                                                                                                                                  slidesToShow: 1,                                                                                                                             slidesToScroll: 1,                                                                                                                          adaptiveHeight: true,                                                                                                                      }
}
]
});

$('.products-slider').show();
$('.products-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 300000,
    adaptiveHeight: true,
    responsive: [
    {
     breakpoint: 1200,
     settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      adaptiveHeight: true,
  }
},
{
 breakpoint: 800,
 settings: {
  slidesToShow: 2,
  slidesToScroll: 2,
  adaptiveHeight: true,
}
},
{
    breakpoint: 640,
    settings: {
     slidesToShow: 1,
     slidesToScroll: 1,
     adaptiveHeight: true,
 }
},
]
});


$('.arrow-bottom').click(function(){
    if ($(this).scrollTop() > 1400) {
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top-165
        }, 1400);
        return false;
    } else {
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top-50
        }, 1400);
        return false;
    }
});

$('.form-popup-link').magnificPopup({
  type: 'inline',

  fixedContentPos: false,
  fixedBgPos: true,

  overflowY: 'auto',

  closeBtnInside: true,
  preloader: false,

  midClick: true,
  removalDelay: 300,
  mainClass: 'my-mfp-slide-bottom'
});

//tablet
enquire.register("screen and (max-width: 999px)", {
    match: function () {
        $('.nav-top').hide();
        $('.icon-drop').off('click').on('click', function () {
         if(!$(this).hasClass('active')){
            $('.icon-drop').removeClass('active').parents().find('.nav-top').removeClass('active').slideUp(400);
            $(this).addClass('active');
            $(this).parents().find('.nav-top').slideDown(400).addClass('active');
        } else {
            $(this).removeClass('active').parents().find('.nav-top').removeClass('active').slideUp(400);
        }
        return false;
    });

        $('.icon-close').off('click').on('click', function () {
          $('.icon-drop').removeClass('active').parents().find('.nav-top').removeClass('active').slideUp(400);
          return false;
      });

    },
    unmatch: function () {
       $('.icon-drop').removeClass('active');
   }
});
      	//tablet


//Кнопка для открытия виджета
        $('.section-container #open_block_save').click(function(){
            $('.text-widget-block').click();
            return false;
        });
        $('.header #open_block_save').click(function(){
            $('.text-widget-block').click();
            return false;
        });
    });