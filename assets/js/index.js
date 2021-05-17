$(function () {
  //sticky-header.js
  stickyHeader();

  //slick-slider.js
  slickSlider();

  //back-to-top.js
  backToTop();

  //standard-header
  header();
  doubleTapToGo();
  navbarDoubleTap();

  //AOS Init
  AOS.init();
  //Disable AOS on mobile and tablet devices
  AOS.init({ disable: "mobile" });
  AOS.init({ disable: "tablet" });
});
