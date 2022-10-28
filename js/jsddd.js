$(document).ready(function(){
   $(".toggle-menu").click(function(){
       $(".toggle-menu").toggleClass("add");
       $(".number-mbl").toggleClass("point");
       $(".logo-box").toggleClass("css");
   }) ;
   $(".close2").click(function(){
      $(".orange").css("display","none"); 
      $(".banner").addClass("up");
   });

    let catdnkname;
   $("#spancatname").hide();
   $(".callmessage").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
		   let txt=$(".callmessage").val();
		   let vali =/^\d{10}$/;
		   if(!vali.test(txt)){
            catdnkname="no";
			  $("#spancatname").show().html("** Enter Mobile No. only").css("color","black").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            catdnkname="yes";
		       $("#spancatname").hide();
		       
		   }
	   }

      $(".submitBtn").click(function(){ 
         if(catdnkname =="no"){
             alert("Please fill Correct number");
           }
               txt_err = true;
               txt_check();
                 
                 if((txt_err==true)){
                    return true;
                 }
                 else{return false;}
            });
            
             let sidednkname;
   $("#spancatname").hide();
   $(".sideinputphone").keyup(function(){
	     txt_check1();
	   });
	   function txt_check1(){
		   let txt=$(".sideinputphone").val();
		   let vali =/^\d{10}$/;
		   if(!vali.test(txt)){
            sidednkname="no";
			  $("#sidephone").show().html("** Enter Mobile No only").css("color","red").focus();
			  txt_error=false;
			  return false;
		   }
		   else{
            sidednkname="yes";
		       $("#sidephone").hide();
		       
		   }
	   }

      $(".subside").click(function(){ 
         if(sidednkname =="no"){
             alert("Please fill correct number");
           }
               txt_error = true;
               txt_check1();
                 
                 if((txt_error==true)){
                    return true;
                 }
                 else{return false;}
            });

            
});


(function($){
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

   (function($){
      $(document).ready(function(){
      
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