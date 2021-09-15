// подсветка активного меню
jQuery(function($) {

    const section = $('.section'),
          nav = $('nav.menu'),
          navHeight = nav.outerHeight();

    // поворот экрана 
    window.addEventListener('orientationchange', function () {
        navHeight = nav.outerHeight();
    }, false);

    $(window).on('scroll', function () {
        const position = $(this).scrollTop();

        section.each(function () {
            const top = $(this).offset().top - 5,
                  bottom = top + $(this).outerHeight();

            if (position >= top && position <= bottom) {
                nav.find('a').removeClass('active');
                section.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });
    // плавный переход
    nav.find('a').on('click', function () {
        const id = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top 
        }, 800);

        return false;
    });

});

jQuery(function($) {

    const but = $('.main-btn');

    but.find('a.main-btn1').on('click', function () {
        const id = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top 
        }, 800);
    });

});

jQuery(function($) {

    const but2 = $('.main-btn');

    but2.find('a.main-btn2').on('click', function () {
        const id = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top 
        }, 800);
    });

});

jQuery(function($) {

    const but3 = $('.portfolio');

    but3.find('a.portfolio-btn').on('click', function () {
        const id = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top 
        }, 800);
    });

});

// карусель
$(function() {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        center: true,
        // items:2,
        loop:true,
        margin:30,
        responsive:{
            0:{
              items:1
            },
            685:{
              items:2
            },
            1180:{
              items:2
            }
          }
        // nav:true,
        // navText: [
        //     '<button class="slider-nav prev_button"><</button>',
        //     '<button class="slider-nav next_button">></button>'
        //     ]
    });
    $(this).find('.js-prev').on('click', function () {
        // Перематываем карусель назад
        owl.trigger('prev.owl.carousel');
      });
    
      // При клике по кнопке Вправо
      $(this).find('.js-next').on('click', function () {
        // Перематываем карусель вперед
        owl.trigger('next.owl.carousel');
      });
  });
  

//открытие мобильного меню
var burger = document.getElementById("burger");
burger.addEventListener("click", function (event) {
    event.preventDefault();
    $(".hidden-menu").css('left', '0').css('transition', 'left 0.4s linear');
});

// закрытие мобильного меню
var close_menu = document.getElementById("close");
close_menu.addEventListener("click", function (event) {
    event.preventDefault();
    $(".hidden-menu").css('left', '-250px').css('transition', 'left 0.4s linear');
});





//   $('.burger img')
//   .on( "mouseenter", function(){
//     $('.burger img').attr('src', $(this).attr('data-back-src'));
//    })
//    .on('mouseout', function(){ var img = $('.burger img'); img.attr('src', img.attr('data-def-src')); });

  