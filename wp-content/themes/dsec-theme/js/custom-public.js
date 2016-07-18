(function ($) {
  $(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() == 0) {
        $('#brand-image').attr('src', 'http://localhost:81/dsec/wp-content/themes/dsec-theme/img/logo-white.png');
		$('nav.navbar').removeClass('navbar-affixed').addClass('navbar-fixed-top');
		$('#shiftnav-toggle-main').removeClass('shiftnav-fixed').addClass('shiftnav-affixed');
		
    } else {
        $('#brand-image').attr('src', 'http://localhost:81/dsec/wp-content/themes/dsec-theme/img/logo-black.png');
		$('nav.navbar').removeClass('navbar-fixed-top').addClass('navbar-affixed');
		$('#shiftnav-toggle-main').removeClass('shiftnav-affixed').addClass('shiftnav-fixed');
    }
});
  });
}) (jQuery);