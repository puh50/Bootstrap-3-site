$(document).ready(function () {
  
  //mobile menu
  $('#js-menu-btn').click(function () {
    $('#js-menu').slideToggle();
    $('#js-menu-btn-burger').toggleClass('open');
  });
  
  
  /***slick-slider init***/
  $('#js-banner-slider').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 8000,
    speed: 800,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false
        }
      }
    ]
  });
  
  /**********popups********/
  var overlay = $('div.popup-bg'),
    popup = $('div.popup'),
    closePopup = $('.js-close-popup'),
    openPopup = $('.js-open-popup');
  
  $(openPopup).click(function (e) {
    e.preventDefault();
    $('body').addClass('hidden');
    var href = $(this).attr('data-href');
    $(href).fadeIn();
  });
  /*Закрытие popup по клику вне его*/
  $(document).mouseup(function (e) {
    var div = $(popup);
    if (!div.is(e.target) && div.has(e.target).length === 0) {
      $(overlay).fadeOut();
      $('body').removeClass('hidden');
    }
  });
  /*Закрытие popup по клику на закрыть*/
  $(closePopup).click(function () {
    $(this).closest(overlay).fadeOut();
    $('body').removeClass('hidden');
  });
  
});




