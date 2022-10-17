<?php
include("include/config.php") ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<!-- Mirrored from clovedental.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2022 11:43:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title>Best Dentists and Dental Clinics Near You | Largest Dental Chain India	</title>
<meta name="description" content="India&#039;s Largest Dental Chain. Best Dentists and Dental Clinics in Delhi NCR, Jaipur, Chandigarh, Ahmedabad, Hyderabad, Chennai, Bangalore and pan India with a team of India’s best dentists. Find best dentist near me."/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
<script src="js/jsddd.js"></script>
<link rel="shortcut icon" href="wp-content/themes/clove/images/favicon.png" type="image/x-icon">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php"> 
<link rel="stylesheet" href="style-new.css">
<link rel="stylesheet" href="css/carousel.min.css">
<link rel="stylesheet" href="css/styleindex.css">


<link href="wp-content/themes/clove/css/font-awesome.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="wp-content/themes/clove-child/css/newhome-style.css" type="text/css">

	

<script>
        function initComparisons() {
            var x, i;
            x = document.getElementsByClassName("img-comp-overlay");
            for (i = 0; i < x.length; i++) {
                
                compareImages(x[i]);
            }

            function compareImages(img) {
                var slider, img, clicked = 0,
                    w, h;
                w = img.offsetWidth;
                h = img.offsetHeight;
                img.style.width = (w / 2) + "px";
                /*create slider:*/
                slider = document.createElement("img");
                slider.setAttribute("class", "img-comp-slider");
                slider.setAttribute("src","slider.png")

                /*insert slider*/
                img.parentElement.insertBefore(slider, img);
                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                slider.addEventListener("mousedown", slideReady);
                window.addEventListener("mouseup", slideFinish);
                slider.addEventListener("touchstart", slideReady);
                window.addEventListener("touchend", slideFinish);

                function slideReady(e) {
                    e.preventDefault();
                    clicked = 1;
                    window.addEventListener("mousemove", slideMove);
                    window.addEventListener("touchmove", slideMove);
                }

                function slideFinish() {
                    clicked = 0;
                }

                function slideMove(e) {
                    var pos;
                    if (clicked == 0) return false;
                    pos = getCursorPos(e)
                    if (pos < 0) pos = 0;
                    if (pos > w) pos = w;
                    slide(pos);
                }

                function getCursorPos(e) {
                    var a, x = 0;
                    e = (e.changedTouches) ? e.changedTouches[0] : e;
                    a = img.getBoundingClientRect();
                    x = e.pageX - a.left;
                    x = x - window.pageXOffset;
                    return x;
                }

                function slide(x) {
                    img.style.width = x + "px";
                    slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                }
            }
        }
        
    </script>
<style>
       
       * {
            box-sizing: border-box;
        }
        
        .img-comp-container {
            position: relative;
            height: 500px;
            /*should be the same height as the images*/
        }
        
        .img-comp-img {
            position: absolute;
            width: auto;
            height: auto;
            overflow: hidden;
        }
        
        .img-comp-img {
            display: block;
            vertical-align: middle;
        }
        
        .img-comp-slider {
            
  position: absolute; 
  width: 40px; 
  height: 100%; 
  cursor: col-resize;
  line-height: 30px;
   text-align: center; 
   top: 50%; 
   left: 50%;
        font-size:40px;
        z-index:1;   
        font-weight:500;
        }

        @media (max-width:1024px){
          .imgComp {
               width:350px !important;
               height:350px !important;
          }
          .img-comp-container {
            height: 350px !important;
            cursor: col-resize !important;
        }
      	}

 </style>

 

<style>
  .about{
  background-color: aliceblue;
  background-color: #fff;
}
.about .about-info h5{
  color: #fe235b;
  font-size: 20px;
}
.about .about-info h2{
  color: #0f094f;
  font-size: 40px;
}
.about .about-info p{
  font-size: 17px;
  color: #6d7a8c;
  line-height: 30px;
}
.about .about-info p a{
  color: #090909;
  text-decoration: none;
  transition: all .5s;
}
.about .about-info p a:hover{
  color: #fe235b;
  transition: all .5s;
}
.about .about-point > div{
  padding: 0 5px;
  display: grid;
}
.about .about-info .row .point{
      background: #0f094f;
      margin: 5px 0;
      border-radius: 4px;
}
.about .about-info .btn{
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    cursor: context-menu;
    /* display: block; */
    padding: 10px;
}
.about .about-info .btn:focus{
  box-shadow: none;
}
.about-img{
  padding-top: 110px;
  position: relative;
}
.about .about-img img{
  clip-path: polygon(14% 0, 100% 0, 100% 100%, 0% 100%);
}
.about .about-img .experience{
  position: absolute;
  background-color: #fe1e5b;
  color: #fff;
  top: 50%;
  transform: translateY(50%);
  padding: 2.2rem 1.5rem;
  font-size: 20px;
  border-radius: 50%;
  border: 5px solid #f0f8ff;
}
.about .about-img .experience strong{
  font-size: 45px;
}
@media (max-width:1024px){
          .imgComp {
               width:350px !important;
               height:350px !important;
          }
          .img-comp-container {
            /* position: relative; */
            height: 350px !important;
            cursor: col-resize !important;
            /*should be the same height as the images*/
        }
      	}
</style>
	
<script defer src="wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
<script defer src="wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>

<script async id="sourcecode">


</script>
<script defer async src="https://www.googletagmanager.com/gtag/js?id=AW-958029923"></script>

<script defer async src="https://www.googletagmanager.com/gtag/js?id=UA-58837352-1"></script>

<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Best Dentists and Dental Clinics Near You | Largest Dental Chain India" />
<meta property="og:description" content="India&#039;s Largest Dental Chain. Best Dentists and Dental Clinics in Delhi NCR, Jaipur, Chandigarh, Ahmedabad, Hyderabad, Chennai, Bangalore and pan India with a team of India’s best dentists. Find best dentist near me." />
<meta property="og:url" content="https://clovedental.in/" />
<meta property="og:site_name" content="Clove Dental" />
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.defer=1;a.src=g;m.parentNode.insertBefore(a,m)
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
 /* End Facebook Pixel Code*/
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-958029923"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-958029923');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58837352-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-58837352-1');
</script>

<script type="application/ld+json"> {
            "@context": "http://schema.org", "@type": "MedicalOrganization", "name": "Gobest Dentist", "url": "https://clovedental.in/", "logo": "https://clovedental.in/wp-content/themes/clove/images/logo-img.jpg", "contactPoint": {"@type": "ContactPoint", "telephone": "+9111 3355 3232", "contactType": "customer service" },
            "sameAs": [ "https://www.facebook.com/clovedentalindia", "https://twitter.com/Clove_Dental", "https://www.instagram.com/Gobest Dentist/", "https://www.youtube.com/watch?v=7XEZ7qnVaeg" ] } </script>


</head>
<body class="home-page header-home">
     
<?php include("include/topbar.php"); ?>
<script>

</script>

<header>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"style="background-image: url('wp-content/themes/clove-child/images/banner1.jpg');height:30vh;">
      <div class="carousel-caption" style="height:auto;position: absolute;z-index: 10; width: auto;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);">
                <h1><span>Best Dentist in Pune<br>and Pimpri Chinchwad</span></h1>
              </div>
      </div>
  </div>
</header>

</div>

<div class="patient_speak_modal" id="patient_speak_modal">
 <div class="patient_speak_modal_body">
  <div class="modal_video_box">
   <div class="close_btn"><i class="fa fa-close"></i></div>
   <iframe src="#" height="400" frameborder="0" allowfullscreen=""></iframe> 
  </div>
 </div>
</div>
<script>

</script>

<!--ddd-->
<section class="about">
<div class="container">
<div class="row">

<div class="col-xl-6 mt-3 " id="sliderCompImg">
  <div class="img-comp-container" >
      <div class="img-comp-img">
           <img style="display: block; vertical-align: middle;" class="imgComp" src="wp-content/uploads/2020/10/safety1-min.webp" width="500px" height="500px">
      </div>
      <div class="img-comp-img img-comp-overlay">
          <img style="display: block; vertical-align: middle;" class="imgComp" src="wp-content/uploads/2020/10/safety2-min.webp" width="500px" height="500px">
      </div>
  </div>
</div>

  <div class="col-xl-6">
      <div class="about-info py-3" data-aos="fade-up" data-aos-duration="2000">
          <h5 class="mb-3">WHO WE ARE</h5>
          <h2 class="mb-3">Multi-Specialty Dental Clinic In Pimpri-Chinchwad, Pune</h2>
          <p>If you need to know is there a <strong>Best Dentist in pimpri chinchwad</strong> or
              <strong>Best Dental Clinic in pimpri chinchwad</strong>. Yes, there is. GoBest Dentist
              is a modern, hi-tech, and ISO certified chain of multi-specialty dental clinic in Pune,
              India. Headed by Dr. Sana Mokashi it has a team of super specialists that is dedicated
              towards delivering all dental treatment under one roof. We strive to provide high
              quality, personalized dental care in a relaxing, comfortable, and safe environment.
              Lifelong relationships are created with our patients based on trust and honesty.</p>
              <div class="row about-point" >
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="500">
                  <div class="point" style="text-align:center;"><a href="#." class="btn">Affordable <br> Dentists</a></div>
              </div>
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="700">
                  <div class="point" style="text-align:center;"><a href="#." class="btn">Advanced <br> Techniques</a></div>
              </div>
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="900">
                  <div class="point" style="text-align:center;"><a href="#." class="btn">Hygiene Safety <br> priority</a></div>
              </div>
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                  <div  class="point" style="text-align:center;"><a href="#." class="btn">Advanced <br> Instruments</a></div>
              </div>
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1500">
                  <div class="point" style="text-align:center;"><a href="#." class="btn">Multispecialist <br> Dentists</a></div>
              </div>
              <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1800">
                  <div class="point" style="text-align:center;"><a href="#." class="btn">Professional <br> Staff</a></div>
              </div>
          </div>
      </div>
  </div>

</div>
            </div>
        </section>
<!--ddd--> 
  
<!--section-->
<section class="why-choose ">
            <div class="container text-center">

                <h5>WHY YOU CHOOSE US</h5>
                <h2>why we are exceptional than others ?</h2>
                <p>GoBest Dentist is the most reputed dental clinic in Pune specialising in treating a variety of dental
                    problems, under one roof.</p>
                <div class="row text-left why-choose-point d-flex">
                    <div class="col-sm-6 col-6 col-xl-3 " data-aos="fade-up" data-aos-duration="800">
                        <div class="why text-center container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <img src="wp-content/themes/clove-child/images/AFFORDABLE-DENTISTS.png" alt="Why choose us"
                                        class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>AFFORDABLE DENTISTS</h5>
                                    <p>The best affordable dental care, for your family.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6  col-xl-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="wp-content/themes/clove-child/images/ISO-CERTIFIED.png" alt="Why choose us" class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>ISO CERTIFIED</h5>
                                    <p>We are a hi-tech, modern and ISO certified dental care.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-md-6 col-xl-3" data-aos="fade-up" data-aos-duration="1500">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12 ">
                                    <img src="wp-content/themes/clove-child/images/Advanced-Technology1.png" alt="Why choose us"
                                        class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>ADVANCED TECHNOLOGY</h5>
                                    <p>We strive to use advanced dental technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-xl-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12 ">
                                    <img src="wp-content/themes/clove-child/images/SAFETY-&-QUALITY.png" alt="Why choose us" class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>SAFETY & QUALITY</h5>
                                    <p>Dedication to quality & patient safety is embedded in everything we do.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--section-->

<!--review-->
<section class="review ">
            <div class="container text-center">
                <h5 style="color:#fe235b;">REVIEWS</h5>
                <h2>What Patients Speak</h2>
                <p>Know what our patients say about GoBest Dentist</p>
                <div class="slider-area mt-0">
                <div id="carouselExampleControls" class="carousel slide mt-0" data-bs-ride="carousel">
                <div class="carousel-inner" >
                  <div class="carousel-item item active">
                    <div class="img-area text-center">
                      <img src="wp-content/themes/clove-child/images/Irfan-M.png" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0.001rem !important">
                      <h3 class="blockquote-footer"><i>Irfan M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                        Doctor of GoBest Dentist is very experienced. They provide very best treatement at
                          affordable prices. You can feel relaxed after visiting the place. It is surely the
                          <strong>best dental clinic in pimpri chinchwad </strong> <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class=" img-area text-center">
                      <img src="wp-content/themes/clove-child/images/Karishma-A.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Karishma A</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                            Very friendly staff. Nice ambience of the clinic. I had gone to GoBest Dentistfor my teeth whitening. The results are pretty immaculate. I'm very happy with my treatment. I recommend this clinic as <strong>best dentist in nigdi pradhikaran</strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Rafiq-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Rafiq M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                          Thanks a lot doctor for such a nice treatment to my daughter. The doctor was handling
                          very nicely to her. Even i visited for root canal of my father and that too done very
                          nicely at affordable cost. It is the <strong>best dental clinic in pune</strong>. <i
                          class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>
                  
                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Rahul-K.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption  d-md-block">
                      <h3 class="blockquote-footer">Rahul K</h3>
                      <p><i class="fa fa-quote-left"></i>
                          I went for wisdom tooth extraction of my mother and that happened very smoothly with
                          minimum pain and minimum cost too. Also Root canal and CAP were suggested for other
                          teeth as precaution. <strong>It can be sonsidered as best orthodontist in pune.</strong><i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Samir-S.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption  d-md-block">
                      <h3 class="blockquote-footer"><i> Samir S</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                            The doctor is so polite and yet knowledgeable.The clinic has good facilities and my root canal and capping were done so neatly with so less pain at affordable prices. It is surely the <strong>best dental clinic in pimpri chinchwad </strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shainaj-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Shainaj M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      Visited two dentists for my tooth pain but both doctors made it worse but my friend suggested GoBest Dentist is genuine and affordable dentists. In few visits only my problem was resolved. GoBest Dentist is suerly the <strong>best dentist in pimpri </strong>. <i
                      class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shama-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i>  Shama M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      Great facilities in the clinic. Effective treatments and dental surgeries. And most importantly all the doctors are very friendly, cooperative and caring. They make Most painful dental problem look<strong> like small ones. </strong>. <i
                      class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shekhar-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i>Shekhar M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      I had severe pain on Sunday and called so many dentists in my area, nobody helped me but GoBest Dentist attended by appointment on my request. Explained treatment plan and<strong> overall good experience. </strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>

            </div>
        </section>

</div>
</div>

<script>
</script>

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
    /* display: flex; */
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

<script defer src="wp-content/themes/clove/js/waypoints.min.js" ></script>
<script defer src="wp-content/themes/clove/js/jquery.counterup.min.js" ></script>
<script defer src="wp-content/themes/clove/js/jquery.flexslider.js" ></script>
<script defer src="wp-content/themes/clove/js/scripts.js" ></script>

<script defer src="wp-content/themes/clove-child/js/style.js"></script>
<script src="js/comparisonimage.js"></script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>

<script>
  initComparisons();
 </script>

</body>
</html>

