
$(document).ready(function(){


/* Custom force sidebar color */

     $(function(){"use strict";
        //$(".logo-brand").removeClass("white-color");
        //$(".logo-brand").removeClass("primary-color");
        $(".logo-brand").removeClass("info-color");
        $(".logo-brand").removeClass("success-color");
        $(".logo-brand").removeClass("danger-color");
        $(".logo-brand").removeClass("warning-color");
        $(".logo-brand").addClass("white-color");
        $(".sidebar-left").addClass("light-color");
     });    

	    });

/* Ira basic footer message setter  */

	 todate = new Date();
     ftr = $("#footer");
    ftr.html("&copy;" + todate.getFullYear() + " <a href='#lets_code'>lets code </a> for <a href='http://ueab.ac.ke/' > UEAB</a>");
        




	/** SIDEBAR FUNCTION **/
	$('.sidebar-left ul.sidebar-menu li a').click(function() {
		"use strict";
		$('.sidebar-left li').removeClass('active');
		$(this).closest('li').addClass('active');	
		var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$(this).closest('li').removeClass('active');
				checkElement.slideUp('fast');
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('.sidebar-left ul.sidebar-menu ul:visible').slideUp('fast');
				checkElement.slideDown('fast');
			}
			if($(this).closest('li').find('ul').children().length == 0) {
				return true;
				} else {
				return false;	
			}		
	});

	if ($(window).width() < 1025) {
		$(".sidebar-left").removeClass("sidebar-nicescroller");
		$(".sidebar-right").removeClass("sidebar-nicescroller");
		$(".nav-dropdown-content").removeClass("scroll-nav-dropdown");
	}
	/** END SIDEBAR FUNCTION **/
	
	

	/** BUTTON TOGGLE FUNCTION **/
	$(".btn-collapse-sidebar-left").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle");
		$(".sidebar-left").toggleClass("toggle");
		$(".page-content").toggleClass("toggle");
		$(".icon-dinamic").toggleClass("rotate-180");
	});
	$(".btn-collapse-sidebar-right").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle-left");
		$(".sidebar-left").toggleClass("toggle-left");
		$(".sidebar-right").toggleClass("toggle-left");
		$(".page-content").toggleClass("toggle-left");
	});
	$(".btn-collapse-nav").click(function(){
		"use strict";
		$(".icon-plus").toggleClass("rotate-45");
	});
	/** END BUTTON TOGGLE FUNCTION **/
	
	
	
	
	
