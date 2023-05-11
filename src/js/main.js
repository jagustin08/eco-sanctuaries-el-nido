$(window).on("load scroll resize", () => {
  $windowScroll = $(window).scrollTop();

  const $header = $("#header");

  if ($windowScroll >= 100) {
    $header.addClass("shrink");
  } else {
    $header.removeClass("shrink");
  }
});
