function slickSlider() {
  $(".slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: "linear",
    autoplay: false,
    dots: true,
    swipeToSlide: true,
    autoplaySpeed: 5000,
    fade: true,
  });
}
