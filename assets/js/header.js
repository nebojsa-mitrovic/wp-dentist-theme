function header() {
  $(".website-header li").on("click", function () {
    if ($(".sub-menu").hasClass("sub-menu-open")) {
      $(".sub-menu").removeClass("sub-menu-open");
    } else {
      $("li a.sub-menu-open").removeClass("sub-menu-open");
      $(".sub-menu").addClass("sub-menu-open");
    }
  });

  $(window)
    .resize(function () {
      if ($(this).width() <= 991) {
        $("ul.main-menu > li.multiple-link > a").one("click", function (e) {
          e.preventDefault();
        });
      }
    })
    .resize();
}

function doubleTapToGo() {
  (function ($, window, document, undefined) {
    $.fn.doubleTapToGo = function (params) {
      if (
        !("ontouchstart" in window) &&
        !navigator.msMaxTouchPoints &&
        !navigator.userAgent.toLowerCase().match(/windows phone os 7/i)
      )
        return false;

      this.each(function () {
        var curItem = false;

        $(this).on("click", function (e) {
          var item = $(this);
          if (item[0] != curItem[0]) {
            e.preventDefault();
            curItem = item;
          }
        });

        $(document).on("click touchstart MSPointerDown", function (e) {
          var resetItem = true,
            parents = $(e.target).parents();

          for (var i = 0; i < parents.length; i++)
            if (parents[i] == curItem[0]) resetItem = false;

          if (resetItem) curItem = false;
        });
      });
      return this;
    };
  })(jQuery, window, document);
}

function navbarDoubleTap() {
  $("#navbar li:has(ul)").doubleTapToGo();
}
