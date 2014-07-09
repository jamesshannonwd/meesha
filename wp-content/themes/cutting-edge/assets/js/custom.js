/*-------------------------------------------------------------------------

	Theme Name: Cutting Edge

-------------------------------------------------------------------------*/

if (!('contains' in String.prototype)) {
    String.prototype.contains = function(str, startIndex) {
        return ''.indexOf.call(this, str, startIndex) !== -1;
    };
}

if (!('startsWith' in String.prototype)) {
    String.prototype.startsWith = function(prefix) {
        return this.indexOf(prefix) === 0;
    }
}

(function($) {
	$.extend({

		scrollToTop: function() {

			var _isScrolling = false;

			// Append Button
			$("body").append($("<a />")
							.addClass("scroll-to-top")
							.attr({
								"href": "#",
								"id": "scrollToTop"
							})
							.html("&#9650;"));

			$("#scrollToTop").click(function(e) {

				e.preventDefault();
				$("body, html").animate({scrollTop : 0}, 500);
				return false;

			});

			// Show/Hide Button on Window Scroll event.
			$(window).scroll(function() {

				if(!_isScrolling) {

					_isScrolling = true;

					if($(window).scrollTop() > 150) {

						$("#scrollToTop").stop(true, true).addClass("visible");
						_isScrolling = false;

					} else {

						$("#scrollToTop").stop(true, true).removeClass("visible");
						_isScrolling = false;

					}

				}

			});

		}

	});
})(jQuery);

var isMobile = false;
if( navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/BlackBerry/i)){
        isMobile = true;
    }
/* iOS5 fixed-menu fix */
var iOS5 = false;
if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
    iOS5 = true;
}

;(function($) {

$(window).load(function(){
    
    if( $.flexslider ) {
        $('.flexslider').flexslider({
            animation: "slide",
            prevText: "",
            nextText: "",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    }
});

$(document).ready(function () {

    /*vars used throughout*/
	var wh,
		scrollSpeed = 1000,
		parallaxSpeedFactor = 0.6,
		scrollEase = 'easeOutExpo',
		targetSection,
		sectionLink = 'a.navigateTo',
	 	section = $('.section');


//INIT--------------------------------------------------------------------------------/
	if (isMobile == true) {
		$('.header').addClass('mobileHeader');	//add mobile header class
		$('.statGrid').addClass('statGridMobile');
	} else {
		$('.page-section').addClass('desktop');
		$('.parallax').addClass('fixed-desktop');
	}

    $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});

//MENU --------------------------------------------------------------------------------/
	$("nav").sticky({
	   topSpacing:0
    });
    
    if( theme_settings.goto_top == '1' )
        $.scrollToTop();

    $(".menu a").click(function () {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 1000,
            easing: "swing"
        });
        return false;
    });

    var $dropdown = $('#dropmenu'),
        $nav = $( $dropdown.data('target') );

    $nav.find('a').each(function(){
        var $this = $(this);
        $dropdown.append( '<option value="' + $this.attr('href') + '">' + $this.text() + '</option>' );
    });

    $dropdown.on( 'change', function(){        
        var val = $(this).val(),
            goPosition = null;
        
        if( val.startsWith( '#', 0 ) ) {
            goPosition = $(val).offset().top;
            $('html,body').animate({ scrollTop: goPosition}, 'slow');
        }
        else
            window.location = val;
    });


//DIRECTIONAL HOVER --------------------------------------------------------------------/
 	if( $.hoverdi ) $('.da-thumbs > article').hoverdir();

//PARALLAX ----------------------------------------------------------------------------/

    $('.parallax').each(function(){
        var $this = $(this);

        $this.parents( '.page-section' ).after($this);

    });

//CHANGE DOM POSITION -----------------------------------------------------------------/

    $('ul.statGrid').each(function(){
        var $this = $(this);

        $this.parents( '.columns' ).after($this);

    });

    $('.da-thumbs').each(function(){
        var $this = $(this);

        $this.parents( '.columns' ).after($this);

    });

    $('.embed-container, .gmap').each(function(){
        var $this = $(this);

        $this.parents( '.container' ).after($this);
        $this.parents( '.page-section' ).addClass('nopb').next( '.page-section' ).addClass('nopt');

    });

//HOMEPAGE SPECIFIC -----------------------------------------------------------------/
	function sliderHeight() {
		wh = $(window).height();
		$('#homepage').css({height: wh});
	}
	sliderHeight();

//ACCORDION ------------------------------------------------------------------------/

	var $container = $('.accContainer'),
		$trigger   = $('.accTrigger');
		fullWidth = $container.outerWidth(true);

	$container.hide();
	$trigger.first().addClass('active').next().show();

	$trigger.css('width', fullWidth - 2);
	$container.css('width', fullWidth - 2);

	$trigger.on('click', function (e) {
		if ($(this).next().is(':hidden') ) {
		$trigger.removeClass('active').next().slideUp(300);
		$(this).toggleClass('active').next().slideDown(300);
		}
		e.preventDefault();
	});

	// Resize
	$(window).on('resize', function () {
		fullWidth = $container.outerWidth(true)
		$trigger.css('width', $trigger.parent().width());
		$container.css('width', $container.parent().width());
	});

//WINDOW EVENTS ---------------------------------------------------------------------/

	$(window).bind('resize',function () {

		//Update slider height
		sliderHeight();

	});

});

})(jQuery);