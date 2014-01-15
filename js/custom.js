
jQuery(document).ready(function () {

/*----------------------------------------------------*/
/*	Search box expand Section
/*----------------------------------------------------*/

	jQuery(".search-text-box").focus(function(){
	   jQuery("ul.social").animate({ marginLeft: "-120px"}, 450, "easeInSine")
	});


/*----------------------------------------------------*/
/*	Keyframe animations enable
/*----------------------------------------------------*/

jQuery().waypoint && jQuery("body").imagesLoaded(function () {
        jQuery(".animate_afc, .animate_afl, .animate_afr, .animate_aft, .animate_afb, .animate_wfc, .animate_hfc, .animate_rfc, .animate_rfl, .animate_rfr").waypoint(function () {
            if (!jQuery(this).hasClass("animate_start")) {
                var e = jQuery(this);
                setTimeout(function () {
                    e.addClass("animate_start")
                }, 10)
            }
        }, {
            offset: "85%",
            triggerOnce: !0
        })
    });


/*----------------------------------------------------*/
/*	Superfish Mainmenu Section
/*----------------------------------------------------*/

    jQuery(function () {
        jQuery('ul.sf-menu').stop().superfish();
    });



/*----------------------------------------------------*/
/*	Revolution Slider Nav Arrow Show Hide
/*----------------------------------------------------*/

    jQuery('.fullwidthbanner-container').hover(function () {
        jQuery('.tp-leftarrow').stop().animate({
            "opacity": 1
        }, 'easeIn');
        jQuery('.tp-rightarrow').stop().animate({
            "opacity": 1
        }, 'easeIn');
    }, function () {
        jQuery('.tp-leftarrow').stop().animate({
            "opacity": 0
        }, 'easeIn');
        jQuery('.tp-rightarrow').stop().animate({
            "opacity": 0
        }, 'easeIn');
    }

    );



    jQuery('.slider-wrapper').hover(function () {
        jQuery('.nivo-prevNav').stop().animate({
            "opacity": 1
        }, 'easeIn');
        jQuery('.nivo-nextNav').stop().animate({
            "opacity": 1
        }, 'easeIn');
    }, function () {
        jQuery('.nivo-prevNav').stop().animate({
            "opacity": 0
        }, 'easeIn');
        jQuery('.nivo-nextNav').stop().animate({
            "opacity": 0
        }, 'easeIn');
    }

    );




/*----------------------------------------------------*/
/*	Accordion Section
/*----------------------------------------------------*/

    jQuery('.accordionMod').each(function (index) {
        var thisBox = jQuery(this).children(),
            thisMainIndex = index + 1;
        jQuery(this).attr('id', 'accordion' + thisMainIndex);
        thisBox.each(function (i) {
            var thisIndex = i + 1,
                thisParentIndex = thisMainIndex,
                thisMain = jQuery(this).parent().attr('id'),
                thisTriggers = jQuery(this).find('.accordion-toggle'),
                thisBoxes = jQuery(this).find('.accordion-inner');
            jQuery(this).addClass('panel');
            thisBoxes.wrap('<div id=\"collapseBox' + thisParentIndex + '_' + thisIndex + '\" class=\"panel-collapse collapse\" />');
            thisTriggers.wrap('<div class=\"panel-heading\" />');
            thisTriggers.attr('data-toggle', 'collapse').attr('data-parent', '#' + thisMain).attr('data-target', '#collapseBox' + thisParentIndex + '_' + thisIndex);
        });
        jQuery('.accordion-toggle').prepend('<span class=\"icon\" />');
		jQuery("div.accordion-item:first-child .accordion-toggle").addClass("current");
		jQuery("div.accordion-item:first-child .icon").addClass("iconActive");
		jQuery("div.accordion-item:first-child .panel-collapse").addClass("in");
        jQuery('.accordionMod .accordion-toggle').click(function () {
            if (jQuery(this).parent().parent().find('.panel-collapse').is('.in')) {
                jQuery(this).removeClass('current');
                jQuery(this).find('.icon').removeClass('iconActive');
            } else {
                jQuery(this).addClass('current');
                jQuery(this).find('.icon').addClass('iconActive');
            }
            jQuery(this).parent().parent().siblings().find('.accordion-toggle').removeClass('current');
            jQuery(this).parent().parent().siblings().find('.accordion-toggle > .icon').removeClass('iconActive');
        });
    });




});


/*----------------------------------------------------*/
/*	Hover Overlay
/*----------------------------------------------------*/

jQuery(document).ready(function () {




	jQuery('.portfolio-item').hover(function () {
			jQuery(this).find( '.portfolio-item-hover' ).animate({
				"opacity": 0.8
			}, 100, 'easeInOutCubic');


		}, function () {
			jQuery(this).find( '.portfolio-item-hover' ).animate({
				"opacity": 0
			}, 100, 'easeInOutCubic');

	});


	jQuery('.portfolio-item').hover(function () {
       jQuery(this).find(".fullscreen").stop().animate({'top' : '60%', 'opacity' : 1}, 250, 'easeOutBack');

    }, function () {
        jQuery(this).find(".fullscreen").stop().animate({'top' : '65%', 'opacity' : 0}, 150, 'easeOutBack');

    });


	jQuery('.blog-showcase ul li').each(function () {
		jQuery(this).on('hover', function () {
			jQuery(this).siblings('li').removeClass('blog-first-el').end().addClass('blog-first-el');
		});
	});


	jQuery('.blog-showcase-thumb').hover(function () {
        jQuery(this).find( '.post-item-hover' ).animate({
            "opacity": 0.8
        }, 100, 'easeInOutCubic');

    }, function () {
        jQuery(this).find( '.post-item-hover' ).animate({
            "opacity": 0
        }, 100, 'easeInOutCubic');

    });



	jQuery('.blog-showcase-thumb').hover(function () {
       jQuery(this).find(".fullscreen").stop().animate({'top' : '57%', 'opacity' : 1}, 250, 'easeOutBack');

    }, function () {
        jQuery(this).find(".fullscreen").stop().animate({'top' : '65%', 'opacity' : 0}, 150, 'easeOutBack');

    });



/* Post Image overlay */

	jQuery('.post-image').hover(function () {
        jQuery(this).find( '.img-hover' ).animate({
            "opacity": 0.8
        }, 100, 'easeInOutCubic');


    }, function () {
        jQuery(this).find( '.img-hover' ).animate({
            "opacity": 0
        }, 100, 'easeInOutCubic');

    });


	jQuery('.post-image').hover(function () {
       jQuery(this).find(".fullscreen").stop().animate({'top' : '55%', 'opacity' : 1}, 250, 'easeOutBack');

    }, function () {
        jQuery(this).find(".fullscreen").stop().animate({'top' : '65%', 'opacity' : 0}, 150, 'easeOutBack');

    });


/*Mobile device topnav opener*/

	jQuery( ".down-button" ).click(function() {
    jQuery( ".down-button .icon-current" ).toggleClass("icon-angle-up icon-angle-down");
});


/*----------------------------------------------------*/
/*	Tootltip Initialize
/*----------------------------------------------------*/



    jQuery("[data-toggle='tooltip']").tooltip();

});




/*----------------------------------------------------*/
/*	Sticky Menu
/*----------------------------------------------------*/

	jQuery(document).ready(function(){
		jQuery(".main-header").sticky({topSpacing:0});
	});



/*----------------------------------------------------*/
/*	Scroll To Top Section
/*----------------------------------------------------*/
	jQuery(document).ready(function () {

		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.scrollup').fadeIn();
			} else {
				jQuery('.scrollup').fadeOut();
			}
		});

		jQuery('.scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

		jQuery('.product-tour').click(function () {
			jQuery("html, body").animate({
				scrollTop: $(".feature-boxes").offset().top
			}, 600);
			return false;
		});

		jQuery('.hawkee-footer').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

	});



	/*----------------------------------------------------*/
	/*	Contact Form Section
	/*----------------------------------------------------*/
	$("#demo-form").submit(function (e) {
	    e.preventDefault();
	    var siteurl = $('body').data('site-url');
	    var name = $("#name").val();
	    var email = $("#email").val();
	    var phone = $("#phone").val();
	    var company = $("#company").val();
	    var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&company=' + company;

	    function isValidEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	      }

	    if (isValidEmail(email)) {
		$.ajax({
		    type: "POST",
		    url: siteurl + "/ajax/process.php",
		    data: dataString,
		    success: function () {
			$('#demo-form-submit').hide();
			$('.form-body').hide();
			$('.message-sent').fadeIn(1000);
		    }
		});

	    } else {
		$('.error').fadeIn(1000).delay(5000).fadeOut(10000);

	    }

	    return false;
	});



	/*----------------------------------------------------*/
	/*	Conference Form Section
	/*----------------------------------------------------*/
	$("#conference-form").submit(function (e) {
	    e.preventDefault();
	    var siteurl = $('body').data('site-url');
	    var name = $("#name").val();
	    var email = $("#email").val();
	    var phone = $("#phone").val();
	    var company = $("#company").val();
	    var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&company=' + company;

	    function isValidEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	      }

	    if (isValidEmail(email)) {
		$.ajax({
		    type: "POST",
		    url: siteurl + "/ajax/process.php",
		    data: dataString,
		    success: function () {
			$('#demo-form-submit').hide();
			$('.form-body').hide();
			$('.message-sent').fadeIn(1000);
		    }
		});

	    } else {
		$('.error').fadeIn(1000).delay(5000).fadeOut(10000);

	    }

	    return false;
	});


/*----------------------------------------------------*/
/*	Browser & OS Detect
/*----------------------------------------------------*/

//	jQuery(document).ready(function(){
//	    $("#user-os").append( BrowserDetect.OS);
//	    $("#user-browser").append( BrowserDetect.browser);
//	    $("#user-version").append( BrowserDetect.version);
//	});

/*----------------------------------------------------*/
/*       FULLSCREEN BACKGROUND PICTURES
/*----------------------------------------------------*/

	jQuery(document).ready(function(){
	    //on resize change background pic height
	    $(window).bind("resize", function() {
		$(".background-banner").css("height", $(window).height());

		if($(window).width() < 767){
		    //$(".background-banner").removeAttr('id').removeAttr('style');
		    //$("#front-page-background-banner").removeClass( "background-banner" );
		   // $('div#front-page-background-banner').removeAttr('id').removeAttr('style');

		}

	    });

	});
