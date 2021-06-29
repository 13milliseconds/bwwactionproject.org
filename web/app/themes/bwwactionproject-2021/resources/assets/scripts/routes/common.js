export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).on('scroll', function () {
      if ($(window).scrollTop() > 100) {
        $('.banner').addClass('scrolled');
      } else {
        $('.banner').removeClass('scrolled');
      }
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
