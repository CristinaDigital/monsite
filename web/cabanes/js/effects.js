
$(document).ready(function(){
    // reveal
    $("body").paroller();

    // menu burger
    $("#menu_toggle").click(function(){
        $("#hover_menu").toggleClass('hover');
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

    // + et -
    $("#sec_dec").on('click', function(){
        var now = parseInt($("#sec").val())
        if (now > 0) {
            $("#sec").val(now - 1);
        }
    });
    $("#sec_inc").on('click', function(){
        $("#sec").val(parseInt($("#sec").val()) + 1);
    });
    $("#first_dec").on('click', function(){
        var now = parseInt($("#first").val())
        if (now > 0) {
            $("#first").val(now - 1);
        }
    });
    $("#first_inc").on('click', function(){
        $("#first").val(parseInt($("#first").val()) + 1);
    });

    // Cabane - datepickers (from jquery UI)
    if ($('#datepickk').length != 0) {
        var today = new Date()
        var datepicker = new Datepickk({
            container: document.querySelector('#datepickk'),
            inline: true,
            range: true,
            lang: 'fr',
            minDate: today,
            //startDate: today,
            disabledDates: [
                new Date(today.getTime() + 24 * 60 * 60 * 1000),
                new Date(today.getTime() + 48 * 60 * 60 * 1000),
            ],
        });
    }

    var w_height = $(window).height();

    // flêche pour remonter
    var arrow = $('#top_arrow')
    if (arrow.length != 0) {
        var a_fixed_position = arrow.css('top');        
        var a_end = $("#arrow_end").offset().top; // valeur qui marche pour desktop et mobile
        var a_display = false;
        var a_absolute = false;
    } else { arrow = false; }

    // cabane - menu sticky
    var sticky = $("#sticky_resa");
    if (sticky.length != 0 && sticky.css('position') == 'absolute') {
        var s_position = sticky.offset().top;
        var s_zero = sticky.parent().offset().top;
        var s_end = s_zero + sticky.parent().height() - sticky.height();
        var s_is_end = false;
        var s_is_top = true;
    } else { sticky = false; }

    // font du scroll
    $(window).on('scroll', function(e){
        var scroll = $(window).scrollTop();

        // afficher la flêche quand on descend
        if (!a_display && scroll > w_height) {
            arrow.css({display: "block"});
            a_display = true;
        }
        // supprimer quand on remonte
        if (a_display && scroll < w_height) {
            arrow.css({display: "none"});
            a_display = false;
        }
        // figer à end_position
        if (arrow.offset().top > a_end) {
            arrow.css({
                position: 'absolute',
                top: a_end + "px",
            });
            a_absolute = true;
        }
        // défiger
        if (a_absolute && (w_height + scroll - 80) < a_end) {
            arrow.css({
                position: 'fixed',
                top: a_fixed_position,
            });
            a_absolute = false;
        }

        // descend le sticky
        if ( sticky ) {
            // positions intermédiaires
            if (scroll > s_position && scroll < s_end) {
                sticky.css({top: (scroll - s_zero) + "px"});
                s_is_top = false;
                s_is_end = false;
            }
            // fin
            if (! s_is_end && scroll > s_end) {
                sticky.css({top: (s_end - s_zero) + "px"});
                s_is_end = true;
                s_is_top = false;
            }
            // début
            if (! s_is_top && scroll < s_position) {
                sticky.css({top: (s_position - s_zero) + "px"});
                s_is_end = false;
                s_is_top = true;
            }
        }
    });
});
