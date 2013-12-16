
/* ================================================================= */
/* CSS Style Switcher
====================================================================== */

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {

    $("#style-switcher h2 a").click(function(e){
	    e.preventDefault();
	    var div = $("#style-switcher");
	    console.log(div.css("left"));
	    if (div.css("left") === "-206px") {
		    $("#style-switcher").animate({
			    left: "0px"
		    });
	    } else {
		    $("#style-switcher").animate({
			    left: "-206px"
		    });
	    }
    });

    //Header Color Change
    $(".header-bg").spectrum({
	    showInitial: true,
	    color: "#323B44",
	    preferredFormat: "hex6",
	    showInput: true,
	    move: updateHeader
    });
    //Changing the header color instantly
    function updateHeader(color) {
	$("#header .main-header").css("background", color.toHexString());
    }

    //Banner Color Change
    $(".banner-bg").spectrum({
	    showInitial: true,
	    color: "#BFCDF1",
	    preferredFormat: "hex6",
	    showInput: true,
	    move: updateBanner
    });
    //Changing the banner color instantly
    function updateBanner(color) {
	$("#background-banner").css("background", color.toHexString());
    }

    //Title Color Change
    $(".title-bg").spectrum({
	    showInitial: true,
	    color: "#1D3599",
	    preferredFormat: "hex6",
	    showInput: true,
	    move: updateTitle
    });
    //Changing the title color instantly
    function updateTitle(color) {
	$("#background-title").css("color", color.toHexString());
    }

});