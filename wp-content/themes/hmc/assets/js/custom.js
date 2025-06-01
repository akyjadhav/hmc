jQuery(document).ready(function ($) {

  const $toggle = $('.search-toggle');
  const $form = $('#search-form');
  const $icon = $('#search-icon');

  $icon.on('click', function (e) {
    e.preventDefault();
    $toggle.toggleClass('active');
    $form.find('input').focus();
  });

  $(document).on('click', function (e) {
    if (!$toggle.is(e.target) && $toggle.has(e.target).length === 0) {
      $toggle.removeClass('active');
    }
  });
  $(document).ready(function($) {
    $('#menu-header .sub-menu > li > a').each(function() {
      $(this).append('<div class="circle-icon"><i class="fas fa-arrow-right"></i></div>');
    });
  });
//   $(window).on('scroll', function() {
//     var header = $('.navbar.header');
//     if ($(this).scrollTop() > 0) {
//         header.addClass('scrolled');
//     } else {
//         header.removeClass('scrolled');
//     }
// });
});
