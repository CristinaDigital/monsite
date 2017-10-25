
$(document).ready(function(){
    // reveal
    // $("body").paroller();

    // menu burger
    $(".btn-navigation").click(function(){
        /* Ce que j'ai try pr ramener mon menu en full screen)
        var largeur = screen.width;
        $(this).find('').toggleClass('navigation');*/
        $(this).find('.barre').toggleClass('white');
        $("#navtoggle").children().children().toggleClass('isopen');
    });

    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
});
