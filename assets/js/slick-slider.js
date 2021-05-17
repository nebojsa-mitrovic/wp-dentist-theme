function slickSlider() {
  /*
   * Slider
   */
  $(".slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    speed: 500,
    cssEase: "linear",
    autoplay: false,
    dots: false,
    swipeToSlide: true,
    autoplaySpeed: 7000,
    fade: true,
  });

  /*
   * Image Carousel
   */
  $(".image-carousel").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    dots: false,
    swipeToSlide: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  /*
   * Film Strip Carousel
   */

  //Linear
  $(".film-strip-carousel-linear").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    dots: false,
    swipeToSlide: true,
    autoplaySpeed: 3000,
    vertical: true,
    verticalScrolling: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          centerMode: true,
          focusOnSelect: true,
          vertical: false,
          verticalScrolling: false,
          slidesPerRow: 1,
          rows: 1,
        },
      },
    ],
  });

  //Group
  $(".film-strip-carousel-group").slick({
    slidesPerRow: 2,
    rows: 2,
    arrows: false,
    autoplay: true,
    dots: false,
    swipeToSlide: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          centerMode: true,
          focusOnSelect: true,
          vertical: false,
          verticalScrolling: false,
          slidesPerRow: 1,
          rows: 1,
        },
      },
    ],
  });

  /*
   * Accordion Image Carousel
   */
  $(".accordion-img-carousel").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    dots: true,
    swipeToSlide: true,
    centerMode: true,
    centerPadding: "100px",
    autoplaySpeed: 3000,
  });

  /*
   * Client Review
   */
  $(".client-review").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    dots: true,
    swipeToSlide: true,
    autoplaySpeed: 3000,
  });
}
