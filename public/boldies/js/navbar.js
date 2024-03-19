$(document).ready(function() {
    var navbar = $(".navbar");
    var navbar_toggler = $(".navbar-toggler");
    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        navbar.addClass("navbar-scrolled shadow fixed-top");
      } else {
        navbar.removeClass("navbar-scrolled shadow fixed-top");
    }
    });
    navbar_toggler.on('click', function () {
        if (navbar.hasClass('navbar-scrolled shadow fixed-top') || $(this).scrollTop() < 0) {
        }else{
            navbar.toggleClass('navbar-scrolled shadow fixed-top');
        }
    })
});
