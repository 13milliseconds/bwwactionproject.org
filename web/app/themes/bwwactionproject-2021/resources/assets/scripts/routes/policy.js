export default {
  init() {
    // JavaScript to be fired on the about us page

    $('.bill-block header').on('click', function (e) {
      let bill = $(e.target).parents('.bill-block');
      if (bill.hasClass('active')) {
        bill.toggleClass('active');
      } else {
        $('.bill-block').removeClass('active');
        bill.addClass('active');
      }
    })
  },
};
