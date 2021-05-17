function stickyHeader() {
  $(window).on("scroll", function () {
    const scroll = $(window).scrollTop();
    scroll > 100
      ? $(
          ".website-standard-header, .website-info-header-bottom, .website-info-header-top"
        ).addClass("sticky")
      : $(
          ".website-standard-header, .website-info-header-bottom, .website-info-header-top"
        ).removeClass("sticky");
  });
}
