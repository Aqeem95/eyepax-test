jQuery(document).ready(function ($){


  $('.hmslider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true

  });


  $('.first-button').on('click', function () {
    $('.animated-icon1').toggleClass('open');
    $('.menu').toggleClass('open');
    $('body').toggleClass('fixed');

  });



  var width = $(window).width();

  $('.menu ul li:has(ul)').addClass('has-child');
  $('.menu ul li:has(ul)').prepend('<span class="nav-click" />');
  $('#menu-toggle').click(function () {
    $('.menu > ul').toggleClass('open-menu');
  });
  $('#menu-toggle').click(function () {
    $(this).toggleClass('open');
  });

});

