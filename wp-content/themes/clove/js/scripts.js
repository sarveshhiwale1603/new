jQuery(document).ready(function(){
"use strict";
var ww = window.innerWidth || document.body.clientWidth;
if (ww > 600) {

jQuery('.showcase').flexslider({
	animation:"fade",
	animationSpeed:1000,
	slideshowSpeed:20000,
	pauseOnAction:true,
	
	controlNav:false,
	easing:"swing",
	direction:"horizontal",
	pauseOnHover:false,
	/* start: function(slider) {
            clearInterval(slider.animatedSlides);
            slider.animatedSlides = setInterval(slider.animateSlides, 1000);                
        }, */
        after: function(slider){
			
            if(slider.currentSlide == 0) {
               clearInterval(slider.animatedSlides); 
               slider.animatedSlides = setInterval(slider.animateSlides, 20000);
            }else{
               clearInterval(slider.animatedSlides); 
               slider.animatedSlides = setInterval(slider.animateSlides, 10000);
            }
            
        } ,
		slideshow: false,
	});

}else{
	
	jQuery('.showcase').flexslider({
	animation:"fade",
	animationSpeed:1000,
	slideshowSpeed:5000,
	pauseOnAction:true,
	slideshow: true,                //Boolean: Animate slider automatically
	animationLoop: true, 
	controlNav:false,
	easing:"swing",
	direction:"horizontal",
	pauseOnHover:true,
	/* start: function(slider) {
            clearInterval(slider.animatedSlides);
            slider.animatedSlides = setInterval(slider.animateSlides, 1000);                
        }, */
        /*after: function(slider){
			
            if(slider.currentSlide == 0) {
               clearInterval(slider.animatedSlides); 
               slider.animatedSlides = setInterval(slider.animateSlides, 1000);
            }else{
               clearInterval(slider.animatedSlides); 
               slider.animatedSlides = setInterval(slider.animateSlides, 1000);
            }
            
        } ,*/
		
	});
	}
	
	jQuery('.hpyclient-slide').flexslider({
		animation:"slide",
		slideshowSpeed:8000,
		pauseOnAction:false,
		controlNav:false,
		pauseOnHover:false
		});
		
	jQuery('.Specialities-rotate').flexslider({
		animation:"slide",
		slideshowSpeed:2000,
		pauseOnAction:false,
		directionNav:false,
		pauseOnHover:false
		});
		
		jQuery(".toggleMenu").click(function(){
			jQuery(".navigation").slideToggle('brij');
			jQuery(".toggleMenu").toggleClass('active');
		});
});