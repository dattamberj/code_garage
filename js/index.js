var docked, init, nav;

docked = false;
nav = $("#mainNav");
init = nav.offset().top;

$(window).scroll(function() {
  if (!docked && (nav.offset().top - $("body").scrollTop() < 0)) {
    nav.css({
      position: "fixed",
      top: 0
    });
    return docked = true;
  } else if (docked && $("body").scrollTop() <= init) {
    nav.css({
      position: "absolute",
      top: "initial"
    });
    return docked = false;
  }
});
