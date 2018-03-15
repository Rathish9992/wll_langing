/***** Navigation Active Class Query *****/
jQuery(document).ready(function($){        
    var url = window.location.href;
	url = url.split('/').reverse()[0];
	if(url == '') {
		url = 'index.html';
	}
	else {
		url = url.split('?')[0];
	}
    $('.navigation li a[href="'+url+'"]').addClass('active');
});

$(function () {
$('[data-toggle="tooltip"]').tooltip()
});

/* Smooth Scroll */
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

$(window).load(function() {			

	$("#flexiselDemo1").flexisel({
	visibleItems: 1,
	animationSpeed: 1000,
	autoPlay: false,
	autoPlaySpeed: 3000,    		
	pauseOnHover:true,
	enableResponsiveBreakpoints: true,
	responsiveBreakpoints: { 
		portrait: { 
			changePoint:480,
			visibleItems: 1
		}, 
		landscape: { 
			changePoint:640,
			visibleItems: 1
		},
		tablet: { 
			changePoint:768,
			visibleItems: 1
		}
	}
	});
	
	$("#flexiselDemo2").flexisel({
	visibleItems: 1,
	animationSpeed: 1000,
	autoPlay: false,
	autoPlaySpeed: 3000,    		
	pauseOnHover:true,
	enableResponsiveBreakpoints: true,
	responsiveBreakpoints: { 
		portrait: { 
			changePoint:480,
			visibleItems: 1
		}, 
		landscape: { 
			changePoint:640,
			visibleItems: 1
		},
		tablet: { 
			changePoint:768,
			visibleItems: 1
		}
	}
	});
	
});

$(".select2").select2();

$(document).ready(function(){
 // on click signup It Hide Login Form and Display Registration Form
	 $("#forgot").click(function(){
       $("#first").fadeOut("slow", function(){
		  $("#second").fadeIn("slow"); 
	   });	
	 });
	 
	 // on click signin It Hide Registration Form and Display Login Form
     $("#login").click(function(){
       $("#second").fadeOut("slow",function(){
	      $("#first").fadeIn("slow");
	   });
	 }); 	 
});

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
});

function cookieFunction() {
    var x = document.getElementById("cookiediv");
    x.style.display = "none";
}


/*$(document).on("scroll",function(){
	if($(document).scrollTop()>50){ 
		$(".head-top").addClass("sticky");
		}
	else{
		$(".head-top").removeClass("sticky");
		}
});*/


    
