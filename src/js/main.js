$(window).on("load scroll resize", () => {
  $windowScroll = $(window).scrollTop();

  const $header = $("#header");

  if ($windowScroll >= 100) {
    $header.addClass("shrink");
  } else {
    $header.removeClass("shrink");
  }
});

gsap.registerPlugin(ScrollTrigger);

gsap.set(".fade-up", { y: 20, autoAlpha: 0 });
ScrollTrigger.batch(".fade-up", {
  start: "center bottom",
  onEnter: (batch) =>
    gsap.to(batch, {
      y: 0,
      autoAlpha: 1,
    }),
});

$(".header").load("includes/header.html", () => {
  /* var url = window.location.pathname,
    urlRegExp = new RegExp(url.replace(/\/$/, "") + "$");

  $("#header .nav-link").each(function () {
    if (urlRegExp.test(this.href.replace(/\/$/, ""))) {
      $(this).parent().addClass("active");
    }
  }); */
});

$(".footer").load("includes/footer.html");
