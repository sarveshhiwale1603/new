//video popup
(function($){
// var y_src = "https://www.youtube.com/embed/";

// $('.banner_play_btn').click(function(){ 
// $('.patient_speak_modal').addClass('in');
// $('.patient_speak_modal iframe').attr('src', 'https://www.youtube.com/embed/Hv_u3dpRECM');
// });

// $('.patient_speak_videos .play_btn').click(function(){
//   var v_id = $(this).attr('data-src');
//  $('.patient_speak_modal').addClass('in');
//  $('.patient_speak_modal iframe').attr('src', y_src+v_id+'?autoplay=1');
// });
// $('.patient_speak_modal .close_btn').click(function(){
//   $('.patient_speak_modal').removeClass('in');
//   $('#patient_speak_modal iframe').attr('src', y_src);
// });
// $('.patient_speak_modal').click(function(e){
//  if(e.target.id == 'patient_speak_modal'){
//   $('.patient_speak_modal').removeClass('in');
//   $('#patient_speak_modal iframe').attr('src', y_src);
// }
// });

$('.banner-form').click(function(){
//$('#frm_type').val('value','1000');
$('#frm_type').remove();
input = jQuery('<input type="hidden" name="form_type" id="frm_types" value="website banner econsult">');
$('#for_banner').append(input);



});
jQuery(".toggle-menu").click(function(){
									  //alert("helo");
		jQuery(".navigation").slideToggle("slow");
		jQuery(this).toggleClass("active");
		jQuery("body").toggleClass("highlight");
		jQuery('.sub-menu').slideUp();
		jQuery('.mobile-plus').removeClass('active');
	}); 
jQuery(".navigation li").find("ul").after("<span class='mobile-plus' ></span>");
	jQuery(".mobile-plus").click(function(){
		jQuery(this).parent().siblings().find('.sub-menu').slideUp();
		jQuery(this).parent().siblings().find('.mobile-plus').removeClass('active');        
		jQuery(this).parent().find('.sub-menu').slideToggle();            
		jQuery(this).toggleClass("active");
	});

	jQuery(window).resize(function(){
		var wwindow = jQuery(window).width();
		if (wwindow >= 1025) {           
			jQuery(".toggle-menu").removeClass("active");
			jQuery(".nav-bar .navigation").removeAttr("style");
			jQuery(".nav-bar .navigation ul ul.sub-menu").removeAttr("style");
		}
	});
jQuery(".header-main .toggle-icon").click(function(){
		jQuery(".side-menu").addClass("slide-right");
		jQuery('.transparent-bg').fadeIn();
		jQuery("body").addClass("no-scroll");
	});
	jQuery(".side-menu-close").click(function(){
		jQuery(".side-menu").removeClass("slide-right");
		jQuery('.transparent-bg').fadeOut();
		jQuery("body").removeClass("no-scroll");
	});
}(jQuery));



//footer js

jQuery(document).ready(function() {
	jQuery(".br_close").click(function(){
        jQuery(".br_overlay").hide();
 	  }); 
	  jQuery(".br_close").click(function(){
        jQuery(".br_overlay.corona_popup").addClass("in");
 	  }); 
if(localStorage.getItem("timesec") === null)
	{	
	var time = "30", 
	gettime = time; 	
    localStorage.setItem('timesec', time);
	}
	if(localStorage.getItem("timesec") >=0)
	{
    var timer = setInterval(function(){
		gettime = localStorage.getItem('timesec');
		gettime--; 
		localStorage.setItem('timesec', gettime);	 
	   if(gettime==-1) {  
		  localStorage.setItem('timesec', gettime);
		  jQuery(".br_overlay").show();
		  clearInterval(timer);		 
		  return;
		}  
    }, 1000);
	}

jQuery( "#state_id" ).change(function() {
	var id = jQuery( "#state_id" ).val();
	var data = 'id='+id+'&type=map' 
	$.ajax({ type:"POST", cache:false, url:"<?php echo esc_url( home_url( '/' ) ); ?>select.php", data:data, success: function (html) { jQuery('#addressId').html(html); }});

	jQuery("#datepick").removeClass("step_disable");
});

jQuery('.counter').counterUp({ delay: 39, time: 2000 });
jQuery(".down-arrow").click(function(){ jQuery('html,body').animate({scrollTop: jQuery(".Specialities-box").offset().top-210},'slow');});

jQuery(".next").click(function(){ owl.trigger('owl.next'); });
jQuery(".prev").click(function(){ owl.trigger('owl.prev'); });
});
   

jQuery(document).ready(function(){
	jQuery(".platinum-popup .close").click(function(){
		jQuery(".platinum-popup-wrap").removeClass("active");
	});
	
	jQuery('#home_form_submit').click(function(){
	var name = jQuery("#home_form_name").val();
	var phone = jQuery("#home_form_phone").val();
	if(name==""){
		alert("Please enter the name.");
		jQuery("#home_form_name").focus();
		return false;
	}
	var alphanumers = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
	if(!alphanumers.test(name)){
		alert("Please enter the correct name.");
		jQuery("#home_form_name").focus();
		return false;
	}
	if(phone==""){
		alert("Please enter the phone no.");
		jQuery("#home_form_phone").focus();
		return false;
	}
	var pattern = /^\d{10}$/;
	if (pattern.test(phone)) {
		document.homeform.submit();
	}else{
	alert("It is not valid phone number.input 10 digits number!");
	return false;
	}
});	

	jQuery('.acc-content').hide(); 									
	jQuery('.acc-tab:first').addClass('active').next().show(); 
	jQuery('.acc-tab').click(function(){
	if( jQuery(this).next().is(':hidden') ) {
	jQuery('.acc-tab').removeClass('active').next().slideUp(); 
	jQuery(this).toggleClass('active').next().slideDown(); 
	}
		return false;
	});	

	jQuery(".mobile.read_more3").click(function(){
	jQuery(".tab-content3 p").css("height", "auto");
	jQuery(".mobile.read_more3").css("display", "none");
	jQuery(".tab-content3").addClass("remove_after");
	});
 /*
	jQuery("#owl-demo09").owlCarousel({	
		navigation : true,items : 1,	
		itemsDesktop : [1199, 1],	
		itemsDesktopSmall : [1020, 1],	
		itemsTablet : [768, 1],	
		itemsTabletSmall : [767, 1],	
		itemsMobile : [400, 1],	
		slideSpeed : 500,	
		paginationSpeed : 500,	
		rewindSpeed : 1000,	
		autoPlay : true,	
		stopOnHover : false, 	
		pagination : false,	
		navigation : false	
	});	
	*/
});	

(function($){
$(document).ready(function(){
	$('.testimonial').flexslider({
	animation: "slide",
	slideshowSpeed: 6000,
	pauseOnAction: false,
	directionNav: false,
	controlNav: true,
	pauseOnHover: false
	});

	if ($(window).width() < 767) {
		$(".toggle-mbl h4").click(function(){
		$(this).parent().siblings().find('div').slideUp("slow");
		$(this).parent().siblings().find('h4').removeClass("active");
		$(this).siblings("div").slideToggle("slow");
		$(this).toggleClass("active");
		});
	}
});
})(jQuery);

function refreshCaptchaApp_r() {
		jQuery( "#captcha_code1_r" ).attr( 'src', 'https://clovedental.in/captcha/captchaCode.php?id=1&var=' + new Date().getTime() ); 	
		}



jQuery(document).ready(function() {
jQuery( ".enquiry-butnbox" ).click(function() { jQuery( ".enquiry-formbox-wrap" ).addClass('active');	jQuery( "body" ).addClass('active');});
jQuery( ".enquiry-formbox-wrap .close" ).click(function() {jQuery( ".enquiry-formbox-wrap" ).removeClass('active');	jQuery( "body" ).removeClass('active');	});
jQuery( ".appointment_capchacode #capCode" ).click(function() {	jQuery( ".enquiry-in" ).addClass('padd');});
var stickyNavTop = jQuery('.head-outer').offset().top;
var stickyNav = function(){
var scrollTop = jQuery(window).scrollTop();
if (scrollTop > stickyNavTop) {jQuery('.head-outer').addClass('sticky');} else {jQuery('.head-outer').removeClass('sticky sticky-logo');}};
stickyNav();
jQuery(window).scroll(function() {stickyNav();});

jQuery( ".contact-list .cnt-btn" ).click(function() {		
		jQuery('.contact-list').toggleClass('active');
	});	
	jQuery(".main-site").on("click", function(event){	
		jQuery('.contact-list').removeClass('active');
	});
	
	//var outer_height = jQuery('.head-outer').height();		
	//jQuery('.showcase-wrap, .banner').css("margin-top", outer_height);
	
	});

(function($){
$('.patient_safety').click(function(){ $('.dropdown_patient_safety').toggleClass('in'); });

$(".plwt").hide();
$('.info-box li.cal-wdt a, .price-policy-pkg ul li, .showcase-wrap .click-btn, .click-form').on('click', function(e){
$('#frm_type').val($(this).attr('title'));
e.preventDefault();
$('.form-overlay,.request-formbox').fadeIn();
$("body").addClass("no-scroll");
});	

$(".request-formbox .close-form").click(function(){
jQuery(".form-overlay").removeClass("in");
$('.form-overlay,.request-formbox').fadeOut();
$("body").removeClass("no-scroll");
});

$(".price-policy-pkg ul li").css("cursor","pointer");


}(jQuery));


