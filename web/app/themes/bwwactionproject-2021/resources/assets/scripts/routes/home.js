export default {
  init() {
    // JavaScript to be fired on the home page

    let postGroup = $('.post-group');

    postGroup.slick({
      arrows: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      centerMode: true,
      responsive:
        [
          {
            breakpoint: 5000,
            settings: 'unslick',
          }, {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
            },
          }],
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
