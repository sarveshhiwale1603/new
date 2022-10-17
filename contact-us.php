<?php
include("include/config.php") ?>

<?php
if(isset($_POST['sub'])){
$firstname= $_POST['firstname'];
$surname = $_POST['surname'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];


// configure
// $from = 'Enquiry <care@gobestdentist.com>'; 
// $send = ['dr.sanamokashi@gmail.com', 'gobestdentist@gmail.com', 'seniormanager1234@gmail.com'];
// $sendTo =  implode(',',$send);
// $subject = 'Contact us Form from Website';
// $fields = array('firstname' => 'firstname', 'surname' => 'surname', 'phone' => 'phone', 'email' => 'email', 'message' => 'message'); // array variable name => Text to appear in email
// $okMessage = 'Thank You ! We will respond to you as early as possible. For Quick Confirmation, Call us on 7264889986 and take instant appointment on Call.';
// $errorMessage = 'There was an error while submitting the form. Please try again later';

// try
// {
//     $emailText = "You have new message from contact form\n=============================\n";

//     foreach ($_POST as $key => $value) {

//         if (isset($fields[$key])) {
//             $emailText .= "$fields[$key]: $value\n";
//         }
//     }

//     mail($sendTo, $subject, $emailText, "From: " . $from);
//  echo "<script>window.location.href='thankyou.php';</script>";
//  // $responseArray = array('type' => 'success', 'message' => $okMessage);
// }
// catch (\Exception $e)
// {
//     $responseArray = array('type' => 'danger', 'message' => $errorMessage);
// }

// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//     $encoded = json_encode($responseArray);
    
//     header('Content-Type: application/json');
    
//     echo $encoded;
// }
// else {
//     echo $responseArray['message'];
// }

$sql=mysqli_query($conn,"INSERT INTO `contactus`(`first_name`, `last_name`, `email`, `phone`, `message`) VALUES ('$firstname','$surname','$email','$phone','$message')");
if($sql)
			{
			header("location:thankyou.php");
			}
			else{
			echo"<script> alert('Not Submited');</script>";    
			}



}
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="shortcut icon" href="wp-content/themes/clove/images/favicon.png" type="image/x-icon">
	<title>
	Contact Us - GoBest Dentist	</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.php">
<link href="wp-content/themes/clove/css/font-awesome.css" rel="stylesheet">
<link href="wp-content/themes/clove/css/fonts.css" rel="stylesheet"/>
<link href="wp-content/themes/clove/css/animations.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="wp-content/themes/clove/css/jquery.datetimepicker.css" />
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>    
jQuery(document).ready(function() {	
	jQuery( ".appointment_capchacode #capCode" ).click(function() {
		jQuery( ".enquiry-in" ).addClass('padd');
	});

	jQuery(".board-of-dir li a").click(function() {
		jQuery(".doctor-overlay").addClass("active");
		jQuery("body").addClass("no-scroll");
	});
	jQuery(".board-of-company li a").click(function() {
		jQuery(".doctor-overlay").addClass("active");
		jQuery("body").addClass("no-scroll");
	});
	
var stickyNavTop = jQuery('.head-outer').offset().top;
var stickyNav = function(){
var scrollTop = jQuery(window).scrollTop();
if (scrollTop > stickyNavTop) { 
    jQuery('.head-outer').addClass('sticky');
    jQuery('.side-menu').addClass('sticky');
} else {
    jQuery('.head-outer').removeClass('sticky sticky-logo');
    jQuery('.side-menu').removeClass('sticky'); 
}
};
stickyNav();
jQuery(window).scroll(function() {
  stickyNav();
});
});
</script> 	
<script src="wp-content/themes/clove/js/jquery.js"></script>
<meta name='robots' content='max-image-preview:large' />
<meta name="description" content="Reach out to the Clove Dental Helpline or book an appointment online at Clove Dental here to put all your oral worries away."/>
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Contact Us - Clove Dental" />
<meta property="og:description" content="Reach out to the Clove Dental Helpline or book an appointment online at Clove Dental here to put all your oral worries away." />
<meta property="og:url" content="https://clovedental.in/contact-us/" />
<meta property="og:site_name" content="Clove Dental" />
<meta property="og:image" content="https://clovedental.in/wp-content/uploads/2017/03/img_banner.jpg" />
<!-- / Yoast WordPress SEO plugin. -->

<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Clove Dental &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Clove Dental &raquo; Comments Feed" href="comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/clovedental.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='email-subscribers-css'  href='wp-content/plugins/email-subscribers/lite/public/css/email-subscribers-public5560.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='twentythirteen-style-css'  href='wp-content/themes/clove-child/style4a02.css?ver=2013-07-18' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='email-subscribers-js-extra'>
/* <![CDATA[ */
var es_data = {"messages":{"es_empty_email_notice":"Please enter email address","es_rate_limit_notice":"You need to wait for sometime before subscribing again","es_single_optin_success_message":"Successfully Subscribed.","es_email_exists_notice":"Email Address already exists!","es_unexpected_error_notice":"Oops.. Unexpected error occurred.","es_invalid_email_notice":"Invalid email address","es_try_later_notice":"Please try after some time"},"es_ajax_url":"https:\/\/clovedental.in\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/email-subscribers/lite/public/js/email-subscribers-public5560.js?ver=5.0.4' id='email-subscribers-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/80.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7.2" />
<link rel='shortlink' href='indexbde5.html?p=80' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedacef.json?url=https%3A%2F%2Fclovedental.in%2Fcontact-us%2F" />
<script src="wp-content/themes/clove/js/jquery.datetimepicker.full.js" ></script>

<script src="https://www.google.com/jsapi"></script>
<!-- Owl Carousel Assets -->
<link href="wp-content/themes/clove/css/owl.carousel.css" rel="stylesheet">
<link href="wp-content/themes/clove/css/owl.theme.css" rel="stylesheet">
<script src="wp-content/themes/clove/js/jquery.mousewheel.js"></script>
<script src="wp-content/themes/clove/js/jquery.jscrollpane.min.js"></script>
<script id="sourcecode">

function refreshCaptchaApp_r() {
		jQuery( "#captcha_code1_r" ).attr( 'src', 'captcha/captchaCodeffb3.jpg?id=1&amp;var=' + new Date().getTime() ); 	
		}
//jQuery(function(){ jQuery('.scroll-pane').jScrollPane();});
jQuery(document).ready(function(){
    jQuery(".ethics .text-box a").click(function(){
		jQuery(this).toggleClass("active");
        jQuery(this).parent().parent().parent().toggleClass("active");
    });
	
	 jQuery(".ethics .img-box .overlay .close").click(function(){
		jQuery(".ethics .text-box a").removeClass("active");
        jQuery(this).parent().parent().parent().removeClass("active");
    });

	 jQuery(".dental-network .inner .video-btn").click(function(){
        jQuery(".join-overlay").fadeIn();
    });

    jQuery(".join-overlay .join-video .close").click(function(){
        jQuery(".join-overlay").fadeOut()
    });

	/* jQuery(".wpcf7-form").submit(function(){
		$(".wpcf7-submit").hide();
    }); */

	jQuery( ".acc-tab,.news-popup .imgbox .close" ).click(function() {		/* Toggle */	
	jQuery( ".newscontent" ).removeClass("active");
	});	

	jQuery( ".acc-imgbox" ).click(function() {		/* Toggle */	
		jQuery(this).siblings( ".newscontent" ).addClass("active");
	});	

	jQuery('.acco-content').hide(); 								
	jQuery('.impant2 .acco-tab').click(function(){
		if( jQuery(this).next().is(':hidden') ) {
			jQuery('.impant2 .acco-tab').removeClass('active').next().slideUp(); 
			jQuery(this).toggleClass('active').next().slideDown(); 
			jQuery('.impant2 .acco-implant').removeClass('active');
			jQuery(this).parent().toggleClass('active');
		}
		else
			{
				jQuery(this).siblings( ".acco-content" ).slideToggle();
				jQuery('.impant2 .acco-tab').removeClass('active');
				jQuery('.impant2 .acco-implant').removeClass('active');
			}
			return false;
	});
	/* new */
	var wwindow = jQuery(window).width();
	if (wwindow < 767) {
	jQuery('.comman-content-box .gallery-imgbox').hide(); 								
	jQuery('.gallery-textbox').click(function(){
		if( jQuery(this).next().is(':hidden') ) {
			jQuery('.gallery-textbox').removeClass('active').next().slideUp(); 
			jQuery(this).toggleClass('active').next().slideDown(); 
			jQuery('.comman-content-box').removeClass('active');
			jQuery(this).parent().toggleClass('active');
		}
		else
			{
				jQuery(this).siblings( ".comman-content-box .gallery-imgbox" ).slideToggle();
				jQuery('.gallery-textbox').removeClass('active');
				jQuery('.comman-content-box').removeClass('active');
			}
			return false;
	});	
	}
	
	

	jQuery(".toggle-menu").click(function(){
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
	
		var sync1 = jQuery("#sync1");
		var sync2 = jQuery("#sync2");
      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });
      sync2.owlCarousel({
        items : 4,
        itemsDesktop      : [1199,5],
        itemsDesktopSmall     : [979,5],
        itemsTablet       : [768,4],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });
      function syncPosition(el){
        var current = this.currentItem;
        jQuery("#sync2")
          .find(".owl-item")
         .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if(jQuery("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }
      }

      jQuery("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = jQuery(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });

      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }

        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
      }

      var sync1_1 = jQuery("#sync1_1");
      var sync2_2 = jQuery("#sync2_2");
      sync1_1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });

      sync2_2.owlCarousel({
       items : 4,
        itemsDesktop      : [1199,5],
        itemsDesktopSmall     : [979,5],
        itemsTablet       : [768,4],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });

      function syncPosition(el){
        var current = this.currentItem;
        jQuery("#sync2_2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if(jQuery("#sync2_2").data("owlCarousel") !== undefined){
         center(current)
        }
      }

      jQuery("#sync2_2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = jQuery(this).data("owlItem");
        sync1_1.trigger("owl.goTo",number);
      });

      function center(number){
        var sync2_2visible = sync2_2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2_2visible){
          if(num === sync2_2visible[i]){var found = true;}
        }

        if(found===false){
          if(num>sync2_2visiblesync2_2visible[sync2_2visible.length-1]){
            sync2_2.trigger("owl.goTo", num - sync2_2visible.length+2)
          }else{
            if(num - 1 === -1){ num = 0; }
            sync2_2.trigger("owl.goTo", num);
          }
        } else if(num === sync2_2visible[sync2_2visible.length-1]){
          sync2_2.trigger("owl.goTo", sync2_2visible[1])

        } else if(num === sync2_2visible[0]){
          sync2_2.trigger("owl.goTo", num-1)
        }
      }

		jQuery('.tab-content2').hide().fadeIn();
		jQuery('.fun-nav a').bind('click', function(e){
			jQuery('.fun-nav li a.active').removeClass('active');
			jQuery('.tab-content2:visible').hide();
			jQuery(this.hash).show();
			jQuery(this).addClass('active');
			e.preventDefault();
		}).filter(':first').click();
		jQuery('.fun-nav a').bind('click', function(e){
			jQuery(this.hash).hide().fadeIn().addClass('active');
		})

		jQuery('.fun-content').hide().fadeIn();
		jQuery('.fun-nav a').bind('click', function(e){
			jQuery('.fun-nav li a.active').removeClass('active');
			jQuery('.fun-content:visible').hide();
			jQuery(this.hash).show();
			jQuery(this).addClass('active');
			e.preventDefault();
		}).filter(':first').click();
		jQuery('.fun-nav a').bind('click', function(e){
			jQuery(this.hash).hide().fadeIn().addClass('active');
		})

			jQuery('.ytLink').on('click',function(e){
				jQuery('#ytVids2')[0].src = jQuery(this).attr('href') + '?autoplay=1&?modestbranding=0&rel=0&showinfo=0&modestbranding=1&modestbranding=1';
				e.preventDefault();
				jQuery(this).hide();
			});		

			jQuery('#sync2').on('click',function(e){
				jQuery('#ytVids2')[0].src = jQuery('#ytVids2')[0].src.split("?")[0];
				e.preventDefault();
				jQuery('.ytLink').show();
			});

			jQuery('.ytLink2').on('click',function(e){
				jQuery('#ytVids3')[0].src = jQuery(this).attr('href') + '?autoplay=1&?modestbranding=0&rel=0&showinfo=0&modestbranding=1&modestbranding=1';
				e.preventDefault();
				jQuery(this).hide();
			});

			jQuery('#sync2_2').on('click',function(e){
				jQuery('#ytVids3')[0].src = jQuery('#ytVids2')[0].src.split("?")[0];
				e.preventDefault();
				jQuery('.ytLink2').show();
			});

			jQuery('.fun-nav li').on('click',function(e){
			jQuery('#ytVids2')[0].src = jQuery('#ytVids2')[0].src.split("?")[0];
				e.preventDefault();
				jQuery('.ytLink').show();
			});

			jQuery('.fun-nav li').on('click',function(e){
				jQuery('#ytVids3')[0].src = jQuery('#ytVids2')[0].src.split("?")[0];
				e.preventDefault();
				jQuery('.ytLink2').show();
			});

jQuery(function () {
    jQuery(".location-list li").slice(0, 6).addClass('display');
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery(".location-list li:hidden").slice(0, 6).addClass('display');
    });
});

jQuery(function () {
    jQuery(".listing-clinic li").slice(0, 8).addClass('display');
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery(".listing-clinic li:hidden").slice(0, 8).addClass('display');
    });
});	

jQuery(function(){jQuery(".table-doctors table tr").slice(0, 6).addClass('display');
jQuery("#loadMore").on('click', function(e){e.preventDefault();jQuery(".table-doctors table tr:hidden").slice(0, 6).addClass('display');});});		
jQuery('a[href=#top]').click(function(){jQuery('body,html').animate({scrollTop:0},600);return false;});

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

$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('.totop a').fadeIn();
			$('.side-menu').addClass("sticky");
		} else {
			$('.totop a').fadeOut();
			$('.side-menu').removeClass("sticky");
		}
	});
/* jQuery(window).scroll(function(){
	if($(this).scrollTop() > 50){jQuery('.totop a').fadeIn();$('.side-menu').addClass("sticky");}else{jQuery('.totop a').fadeOut();}
	}); */
var click_type='first';

	jQuery('.offers-content').hide().fadeIn();
	jQuery('.offers-nav-tab a').bind('click', function(e){
		jQuery('.offers-nav-tab li a.active').removeClass('active');
		jQuery('.offers-content:visible').hide();
		jQuery(this.hash).show();
		jQuery(this).addClass('active');
		e.preventDefault();
	}).filter(':'+click_type).click();
	jQuery('.offers-nav-tab a').bind('click', function(e){
		jQuery(this.hash).hide().fadeIn().addClass('active');
	})
	jQuery('.offers-content').filter(':'+click_type).addClass('active');
	jQuery('.offers-content').hide();
	jQuery('.offers-content').filter(':'+click_type).show();
	
	jQuery( ".benefits-tab h4" ).click(function() {							
		jQuery(this).siblings( ".benefits-content" ).slideToggle();
		jQuery(this).toggleClass('active');
	});	
});

$(document).ready(function(){
$(".plwt").hide();
$('.form-overlay,.request-formbox').css('display','none');    
$('.info-box li.cal-wdt a, .click-form').on('click', function(e){
	$('#frm_type').val($(this).attr('title'));
e.preventDefault();
$('.form-overlay,.request-formbox').fadeIn();
jQuery("body").addClass("no-scroll");
});	

$(".request-formbox .close-form").click(function(){
jQuery(".form-overlay").removeClass("in");
$('.form-overlay,.request-formbox').fadeOut();
jQuery("body").removeClass("no-scroll");

});

$( "#rsform" ).submit( function ( event ) {
$(".sbt").hide();
var name = $( "#name_id_r" ).val().trim();
var phone1 = $( "#phone_r" ).val().trim();
var instant_captcha = $( "#cap_Code_r" ).val().trim();
phone = parseInt(phone1);
var num = phone1.length;
var error="";
if ( name == "" ) { $( "#r_app_error2" ).show(); $( "#r_app_error2" ).html( "Please enter full name." ); error = 1; } else if ( isNaN( name ) == false ) {	$( "#r_app_error2" ).show(); $( "#r_app_error2" ).html( "Please enter only alphabet value." );	error = 1;	} else if ( !/^[a-zA-Z\s ._-]+$/.test( name ) ) { $( "#r_app_error2" ).show(); $( "#r_app_error2" ).html( "Only dot (.) as a special character & alphabets are accepted." ); error = 1;	} else {$( "#r_app_error2" ).hide();}

if ( phone1 == "" ) { $( "#r_app_error1" ).show(); $( "#r_app_error1" ).html( "Please enter mobile number." ); error = error+2; } else if ( isNaN( phone ) == true ) {	$( "#r_app_error1" ).show(); $( "#r_app_error1" ).html( "Please enter only numeric value." ); error = error+2; } else if ( num < 10 ) {$( "#r_app_error1" ).show();	$( "#r_app_error1" ).html( "Please fill the numeric values greater than 9." ); error = error+2;	} else { 

$.ajax({
		url : 'https://clovedental.in/blocknumber/chkblock.php',
		type : 'POST',
		cache : false,
		async : false,
		data :{phone1:phone1},
		success : function(html){
			html = html.trim();
			if(html == "Yes"){
				$( "#r_app_error1" ).show(); $( "#r_app_error1" ).html( "*The phone number mentioned has been blocked due to multiple unscrupulous requests generated. Kindly use a different phone number to register your request." ); 
				error = error+2;
			}else{
				$( "#r_app_error1" ).hide();
			}
		} 
	});
		

}
if(instant_captcha ==""){
$( "#app_error4_r" ).show();
			$( "#app_error4_r" ).empty();
			$( "#app_error4_r" ).html( "Please enter captcha code." );
			error = error+3;

}

/*if(phone1=="8851672425" || phone1=="8178109008" || phone1=='08851672425' || phone1=='08178109008' || phone1=="+918851672425" || phone1=="+918178109008" || phone1=="8268868995"){
		$( "#r_app_error1" ).show(); $( "#r_app_error1" ).html( "*The phone number mentioned has been blocked due to multiple unscrupulous requests generated. Kindly use a different phone number to register your request." ); error = error+2;
}*/


if ( error != "" ) {$(".sbt").show(); return false; } else {$(".plwt").show(); return true; }
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


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58837352-1', 'auto');
  ga('send', 'pageview');
    /*Facebook Pixel Code */
   !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '400629990135976');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
  /*End Facebook Pixel Code*/
</script>
<!-- Global site tag (gtag.js) - Google Ads: 958029923 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-958029923"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-958029923');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58837352-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58837352-1');
</script>


 
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JX6KNP');</script>
<!-- End Google Tag Manager -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2005823,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> 






</head>
<body class="home-page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JX6KNP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=400629990135976&amp;ev=PageView&amp;noscript=1" alt="Clove Dental"/></noscript>

<?php include("include/topbar.php") ?>
<style>
@media screen and (max-width: 767px){
.number-mbl .click-form {
    display: inline-block;
    position: absolute;
    right: 109px;
    min-width: 100px;
}
.dropdown_patient_safety.in {
    visibility: visible;
    opacity: 1;
    top: 100%;
}
.dropdown_patient_safety {
    width: 200px;
    position: absolute;
    right: 0;
    top: 120%;
    background-color: #FFF;
    border-radius: 4px;
    box-shadow: 0 0 2px rgba(0,0,0,.2);
    border: 1px solid rgba(0,0,0,.15);
    padding: 10px 0;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all ease-in .4s;
    transition: all ease-in .4s;
	}
	.number-mbl .click-form span {
    display: block;
}
.dropdown_patient_safety > li a {
    font-size: 14px;
    line-height: 15px;
    text-transform: none;
    padding: 10px;
}
.dropdown_patient_safety > li {
    display: block;
    width: 100% !important;
    text-align: left;
}
.number-mbl .click-form {
    display: inline-block;
    position: absolute;
    right: 109px;
    min-width: 100px;
}
}
.form-disclaimer {
    position: relative;
    padding: 5px 20px;
    float: left;
}

.form-disclaimer input {
    width: 15px;
    height: 20px;
    position: absolute;
    left: 10px;
    top: 0px;
}
.form-disclaimer label {
    float: left;
    padding-left: 5px;
	text-align: center;
    color: #000000c2;
	line-height:11px;
}
.capLoad {
    background: url(wp-content/themes/clove-child/images/reload.png) no-repeat;
    float: left;
    text-indent: -9999px;
    width: 32px;
    height: 26px;
    margin-top: 7px;
    cursor: pointer;
}
.instant-captcha .capcha_input {
     float: left !important; 
    width: 155px !important;
    padding: 0 15px;
    margin: 0px;
	border: 1px solid #bdb2ad;
}
#captcha_code1_r {
    float: left;
    background: #fca076;
    margin: 0 10px;
    padding: 4px 10px 0px 10px;
}
.form-overlay.in, .form-overlay.in .request-formbox {display:block!important;}
.error-c{display: inline-block;}
</style>
<script>
(function($){
$('.patient_safety').click(function(){ $('.dropdown_patient_safety').toggleClass('in'); });
}(jQuery));
</script><div class="banner"> <img width="1920" height="110" src="wp-content/uploads/2017/03/img_banner.jpg" class="attachment-full size-full wp-post-image" alt="Dental Treatment" loading="lazy" srcset="https://clovedental.in/wp-content/uploads/2017/03/img_banner.jpg 1920w, https://clovedental.in/wp-content/uploads/2017/03/img_banner-300x17.jpg 300w, https://clovedental.in/wp-content/uploads/2017/03/img_banner-768x44.jpg 768w, https://clovedental.in/wp-content/uploads/2017/03/img_banner-1024x59.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px" /><div class="overlay"><h1>Contact Us</h1></div>
</div><style>
.contact-form .button-row{text-align:left}
.helpline-center li{margin:0;padding:0;padding:10px 0;}
.helpline-center li a { float: right; }
@media screen and (max-width:1199px){
 .helpline-center li,.helpline-center li a{
   font-size:14px;
  }
  .helpline-center li{
   width:100%;
   float:none;
    text-align:left;
} 

}
</style>





<style>



.get-in-touch {
  max-width: 800px;
  margin:  auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 0px 16px;
  border: none;
  width:100%;
  cursor: pointer;
}



</style>


 <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": "1",
      "item": {
        "@id": "https://clovedental.in",
        "name": "Home"
      }
    },
    {
      "@type": "ListItem",
      "position": "2",
      "item": {
                "name": "Contact Us"
      }
    }
  ]
}
</script>
  	<div class="breadcrumb">
		<div class="box">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
		</div> 
	</div>







	
	<div class="bg-white">
		<div class="box">





			<section class="get-in-touch" >
			    <div style="margin:auto;font-size: x-large;color: brown;" class="mt-2"><b>Contact Us: +91 72648 89986 &nbsp;&nbsp;&nbsp;&nbsp;Email : gobestdentist@gmail.com</b></div>
				<h1 class="title mt-4">Fill the Form</h1>

				<form class="contact-form row" style="margin-left:0px" id="contact-form" method="post" enctype="multipart/form-data">

				   <div class="form-field col-lg-6" action="contact-us.php">
					  <input id="first_name" type="text"  name="firstname" class="input-text js-input"  required="required" data-error="Firstname is required.">

					  <label class="label" for="name">First Name</label>
				   </div>

				   

				   <div class="form-field col-lg-6 ">
					  <input id="company" name="surname" class="input-text js-input" type="text" data-error="Firstname is required." required >
					  <label class="label" for="company">Last Name</label>
				   </div>

				   <div class="form-field col-lg-6 ">
					<input id="email" name="email" class="input-text js-input" type="email" data-error="Valid email is required." required>
					<label class="label" for="email">E-mail</label>
				 </div>

					<div class="form-field col-lg-6 ">
					  <input id="phone" name="phone" class="input-text js-input" type="text" required>
					  <label class="label" for="phone">Phone Number</label>
				   </div>

				   <div class="form-field col-lg-12">
					  <input id="message" name="message" class="input-text js-input" type="text" required>
					  <label class="label" for="message">Message</label>
				   </div>

				   <div class="form-field col-lg-12">
					  <input class="submit-btn" type="submit" name="sub" value="submit">
				   </div>
				   <br>
				</form>
				<br>
			 </section>
			 			 <br>

		</div>
	</div>
<style>
.important_info_icon{
  width:50px;
  height:50px;
  border-radius:50%;
  background:url('wp-content/uploads/2020/03/info_icon_white.png') no-repeat center;
  background-size:30px;
  background-color:#F00;
  position:fixed;
  left:10px;
  bottom:40px;
  z-index:99999;
  box-shadow:0 0 4px rgba(0,0,0,.3);
  -webkit-animation:bounce 2s infinite linear 1s;
  animation:bounce 2s infinite linear 1s;
}
@-webkit-keyframes bounce{
   from{bottom:30px}
   to{bottom:50px}
}
@keyframes bounce{
   from{bottom:30px}
   to{bottom:50px}
}
.important_info_icon a{
   display:block;
   position:absolute;
   left:0;right:0;
   top:0;bottom:0;
}
.important_info_icon .info{
  width:auto;
  position:absolute;
  left:60px;
  bottom:0;
  background-color:#FFF;
  padding:10px 15px;
  border-radius:4px;
  box-shadow:0 0 4px rgba(0,0,0,.3);
}
.important_info_icon .info:before{
  content:'';
  width:10px;height:10px;
  position:absolute;
  top:0;bottom:0;
  margin:auto;left:-10px;
  border-top:10px solid transparent;
  border-bottom:10px solid transparent;
  border-right:10px solid #FFF;
}
</style>
<style>
  
.phone-btn {
    position: fixed;
    z-index: 999;
    background-color: #fe0600;
    color: #fff;
    padding: .6rem .9rem;
    border-radius: 50%;
    transition: .6s;
    box-shadow: 0 0 0 0.2rem rgb(254 6 0 / 48%);
    animation: cc-calto-action-ripple .6s linear infinite !important;
    
    width: 3.5rem;
    height: 3.5rem;
    display: flex;
    align-items: center;
}

@-webkit-keyframes cc-calto-action-ripple {
    0% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2);
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2)
    }
    100% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent;
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent
    }
}

@keyframes cc-calto-action-ripple {
    0% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2);
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2)
    }
    100% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent;
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent
    }
}

.phone-btn:hover {
    text-decoration: none;
}

.phone-btn i {
    font-size: 2rem;
    transition: .3s ease;
}

.phone-btn:hover {
    color: #fff;
    box-shadow: 0px 0px 16px 3px #fff;
    transform: translateY(-10px);
    transition: .6s;
}

@media (max-width: 1024px) {
  .phone-btn {
        bottom: 1rem;
        right: auto;
        left: 15px;
    }
}

</style>

<?php include("include/footer.php") ?>

    <!-- Call Us -->
    <a href="tel:+917264889986;" class="phone-btn wow slideInRight ui-btn ui-shadow ui-corner-all " title="Call Us" style="color:#ffffff;"><i class="fa fa-phone"></i></a>



<script>
$zoho.salesiq.ready=function(){
{
$zoho.salesiq.customfield.add(
{
"name":"Enter your city",
"hint":"Enter your city",
"required":"false",
"visibility":"both",
});
}
}
</script><script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="wp-includes/js/dist/vendor/wp-polyfill-object-fit.min531b.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/clovedental.in\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index5697.js?ver=5.5.3' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='wp-includes/js/masonry.min3a05.js?ver=4.2.2' id='masonry-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b' id='jquery-masonry-js'></script>
<!-- Google Code for Remarketing Tag -->
<script src="wp-content/themes/clove/js/waypoints.min.js" ></script>
<script src="wp-content/themes/clove/js/jquery.counterup.min.js" ></script>
<script src="wp-content/themes/clove/js/owl.carousel.min.js" ></script>
<script>

jQuery(document).ready(function() {
	jQuery(".br_close").click(function(){
        jQuery(".br_overlay").hide();
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

jQuery('.counter').counterUp({ delay: 39, time: 2000 });

jQuery( ".video-btn-box" ).click(function() {jQuery( ".corporate-video-wrap" ).addClass('active');});

jQuery(".corporate-video-wrap .close").click(function(){jQuery(".corporate-video-wrap").removeClass('active');});

jQuery(".down-arrow").click(function(){ jQuery('html,body').animate({scrollTop: jQuery(".Specialities-box").offset().top-210},'slow');});

jQuery(".next").click(function(){ owl.trigger('owl.next'); });
jQuery(".prev").click(function(){ owl.trigger('owl.prev'); });
jQuery("#vidTest").click(function(){
  jQuery("#Text").hide();
  jQuery("#txtTest").removeClass('active');
  jQuery("#Video").show();
  jQuery(this).addClass('active');      
})
jQuery("#txtTest").click(function(){
jQuery("#Video").hide();
jQuery("#vidTest").removeClass('active');
jQuery("#Text").show();
jQuery(this).addClass('active');
})

	jQuery('.acc-content').hide(); 								
	jQuery('.acc-tab').click(function(){
	if( jQuery(this).next().is(':hidden') ) {
	jQuery('.acc-tab').removeClass('active').next().slideUp(); 
	jQuery(this).toggleClass('active').next().slideDown(); 
	}
		return false;
	});
	jQuery('#wplc_chatmsg').removeAttr("disabled");
	jQuery(".mobile.read_more3").click(function(){
	jQuery(".tab-content3 p").css("height", "auto");
	jQuery(".mobile.read_more3").css("display", "none");
	jQuery(".tab-content3").addClass("remove_after");
	});
});	
</script>
</body>
</html>
<script>
	$(".capcher-row").hide();

function refreshCaptcha2() {
	jQuery("#captcha_code2").attr('src','captcha/captchaCode48de.jpg?id=5&amp;var='+new Date().getTime());
}
</script>
<style>
.form-disclaimer {
    position: relative;
    padding: 20px;
    float: left;
}

.form-disclaimer input {
    width: 15px;
    height: 20px;
    position: absolute;
    left: 0;
    top: 16px;
}
.form-disclaimer label {
    float: left;
    padding-left: 5px;
}
</style>