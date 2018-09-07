jQuery(document).ready(function($) {
	
    $(".index.navbar .nav > li").hover(function() {
        $(this).children('.second').slideToggle("100")
    });
    // var navfirst = $("#navbar .nav .first")
    var navsecond = $("#navbar .nav .first .second")
    var navsecondlink = $("#navbar .nav .first .second a")
    var tabon = $(".child-products .nav.nav-tabs li")
    var tabdetailon = $(".child-module .tab-content .tab-pane")
    tabActive()
    navsecondlink.click(function(event) {
    	location.reload() 
    	tabActive()
    });
    function tabActive() {
	    var alink = window.location.href;
	    var jing = alink.indexOf('#') + 1
	    var points = alink.substring(jing,alink.length);
	    for (var i = 0; i < tabon.length; i++) {
	    	if (i == points) {
	    	tabon.removeClass('active')
	    	$(tabon[i]).addClass('active')
	    	}
	    }
	    for (var i = 0; i < tabdetailon.length; i++) {
	    	if (i == points) {
	    	tabdetailon.removeClass('active')
	    	$(tabdetailon[i]).addClass('active')
	    	}
	    }	
    }
});