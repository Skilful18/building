$(document).ready(function() {
  /* slider */
  $('.sib').simplebox();
  /* Слайдер header */
  $('.header-slider').slick({
    dots:true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    dotsClass: 'header-slider__dots',
    responsive: [
      {
      breakpoint: 425,
      settings: {
        arrows: false
      }
    }
    ]
  });
  /* слайдер done */
  $('.done-block').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll:3,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    responsive: [
      {
        breakpoint: 769,
        settings:{
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
  });
  /* слайдер feedback */
  $('.feedback-block').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
  });
  /* слайдер partners */
  $('.partners-block').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
  });
  /* Scroller */
  $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
          $('#scroller').fadeIn();
      } else {
          $('#scroller').fadeOut();
      }
  });
  $('#scroller').click(function () {
      $('body,html').animate({
          scrollTop: 0
      }, 400);
      return false;
  });
  /* Слайдер sidebar */
  $('.sidebar-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    dotsClass: 'sidebar-slider__dots'
  });
  /* слайдер feedback-include */
  $('.feedback-include__block').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
  });

  /* modal window call */

  $(function(){
    function showModal(id){
      $(document.body).addClass('is-pen-modal');
      $(id).addClass('modal-active');
    }
    function hideModals(){
      $(document.body).removeClass('is-pen-modal');
      $('.modal-call').removeClass('modal-active');
    }
  
    $(".modal-open__call").on('click', function(e){
      showModal('#modal-call');
    });
    
    $(document).on('click', function(e){
      if (!(
      ($(e.target).parents('.modal-block').length)
      ||	($(e.target).hasClass('modal-block'))
      ||	($(e.target).hasClass('modal-open__call')))
      ) {
        hideModals();
      }
    });
    $('#close-call').click(function(){
      $('.modal-call').removeClass('modal-active')
    }); 
    
  });

  /* modal window application */

  $(function(){
    function showModal(id){
      $(document.body).addClass('is-ope-modal');
      $(id).addClass('modal-active');
    }
    function hideModals(){
      $(document.body).removeClass('is-ope-modal');
      $('.modal-application').removeClass('modal-active');
    }
  
    $(".modal-application__open").on('click', function(e){
      showModal('#modal-application');
    });
    
    $(document).on('click', function(e){
      if (!(
      ($(e.target).parents('.modal-block').length)
      ||	($(e.target).hasClass('modal-block'))
      ||	($(e.target).hasClass('modal-application__open')))
      ) {
        hideModals();
      }
    });
    $('#close-application').click(function(){
      $('.modal-application').removeClass('modal-active')
      $(document.body).removeClass('is-ope-modal');
    }); 
    
  });

  /* modal window feedback */

  $(function(){
    function showModal(id){
      $(document.body).addClass('is-ope-modal');
      $(id).addClass('modal-active');
    }
    function hideModals(){
      $(document.body).removeClass('is-ope-modal');
      $('.modal-feedback').removeClass('modal-active');
    }
  
    $(".allFeedback-block__open").on('click', function(e){
      showModal('#modal-feedback');
    });
    
    $(document).on('click', function(e){
      if (!(
      ($(e.target).parents('.modal-block').length)
      ||	($(e.target).hasClass('modal-block'))
      ||	($(e.target).hasClass('allFeedback-block__open')))
      ) {
        hideModals();
      }
    });
    $('#close-feedback').click(function(){
      $('.modal-feedback').removeClass('modal-active')
      $(document.body).removeClass('is-ope-modal');
    }); 
    
  });

  /* modal mail */

  $(function(){
    function showModal(id){
      $(document.body).addClass('is-ope-modal');
      $(id).addClass('modal-active');
    }
    function hideModals(){
      $(document.body).removeClass('is-ope-modal');
      $('.modal-mail').removeClass('modal-active');
    }
  
    $(".mail__open").on('click', function(e){
      showModal('#modal-mail');
    });
    
    $(document).on('click', function(e){
      if (!(
      ($(e.target).parents('.modal-block').length)
      ||	($(e.target).hasClass('modal-block'))
      ||	($(e.target).hasClass('mail__open')))
      ) {
        hideModals();
      }
    });
    $('#close-mail').click(function(){
      $('.modal-mail').removeClass('modal-active')
      $(document.body).removeClass('is-ope-modal');
    }); 

  });

    /* modal calc */

    $(function(){
      function showModal(id){
        $(document.body).addClass('is-ope-modal');
        $(id).addClass('modal-active');
      }
      function hideModals(){
        $(document.body).removeClass('is-ope-modal');
        $('.modal-calc').removeClass('modal-active');
      }
    
      $(".calc__open").on('click', function(e){
        showModal('#modal-calc');
      });
      
      $(document).on('click', function(e){
        if (!(
        ($(e.target).parents('.modal-block').length)
        ||	($(e.target).hasClass('modal-block'))
        ||	($(e.target).hasClass('mail__open')))
        ) {
          hideModals();
        }
      });
      $('#close-calc').click(function(){
        $('.modal-calc').removeClass('modal-active')
        $(document.body).removeClass('is-ope-modal');
      }); 
    
  });

  /* modal help */

  $(function(){
    function showModal(id){
      $(document.body).addClass('is-ope-modal');
      $(id).addClass('modal-active');
    }
    function hideModals(){
      $(document.body).removeClass('is-ope-modal');
      $('.modal-help').removeClass('modal-active');
    }
  
    $(".help__open").on('click', function(e){
      showModal('#modal-help');
    });
    
    $(document).on('click', function(e){
      if (!(
      ($(e.target).parents('.modal-block').length)
      ||	($(e.target).hasClass('modal-block'))
      ||	($(e.target).hasClass('mail__open')))
      ) {
        hideModals();
      }
    });
    $('#close-help').click(function(){
      $('.modal-help').removeClass('modal-active')
      $(document.body).removeClass('is-ope-modal');
    }); 
  
});

/* city-open */

$(function(){
  function showModal(id){
    $(document.body).addClass('is-ope-modal');
    $(id).addClass('modal-active');
  }
  function hideModals(){
    $(document.body).removeClass('is-ope-modal');
    $('.cities').removeClass('modal-active');
  }

  $(".city-open").on('click', function(e){
    showModal('#cities');
  });
  
  $(document).on('click', function(e){
    if (!(
    ($(e.target).parents('.cities').length)
    ||	($(e.target).hasClass('cities'))
    ||	($(e.target).hasClass('city-open')))
    ) {
      hideModals();
    }
  });
  $('#close-cities').click(function(){
    $('.cities').removeClass('modal-active')
    $(document.body).removeClass('is-ope-modal');
  }); 

});

  /* Подсветка главного меню */

  var url=document.location.href;
  
  $.each($('.header__menu .menu__link'),function(){
    
    if(this.href==url){$(this).parent().addClass('link__active');};
    
  });

  /* Маска для телефона */
  $('.phone').mask('+7 (999) 999-99-99');

  $("body").on('click', '[href*="#"]', function(e){
    var fixed_offset = 100;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
  });
  
});