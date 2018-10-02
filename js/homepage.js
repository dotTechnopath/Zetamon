$(document).ready(function () {
  // swiper is the image gallary thing for the landing page
  //initialize swiper when document ready

  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters

    loop: true,
    allowTouchMove: false,
    effect: 'fade',
    spaceBetween: 30,
    speed: 700,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },

  })
 //$('main').overlayScrollbars({ });
});
