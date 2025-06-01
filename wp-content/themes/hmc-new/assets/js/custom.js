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
//   $(window).on('scroll', function() {
//     var header = $('.navbar.header');
//     if ($(this).scrollTop() > 0) {
//         header.addClass('scrolled');
//     } else {
//         header.removeClass('scrolled');
//     }
// });
});
