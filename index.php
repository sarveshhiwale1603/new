<?php
include("include/config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Dentists and Dental Clinics Near You | Largest Dental Chain India </title>
    <link rel="shortcut icon" href="index\images\favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="index/css/fa.css" rel="stylesheet">
    <link rel="stylesheet" href="index/css/stylenew.css">
    <link rel="stylesheet" href="index/css/newhome.css">
    <!-- <link rel="stylesheet" href="wp-content/themes/clove-child/css/newhome-style.css" type="text/css"> -->

    <style>
    @media (min-width: 1200px) {

        .h2,
        h2 {
            font-size: 2rem !important;
        }
    }

    .toptext {
        text-align: center;
    }

    @media (max-width: 768px) {
        .close2 {
            margin-right: 20px !important;
        }

        .toptext {
            text-align: start;
        }
    }

    .button-50:hover {
        color: #0704b4;
    }
    </style>


</head>

<body>

    <?php include("include/topbar.php"); ?>

    <header>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('index/images/banner-1.webp')">
                    <div class="carousel-caption caption">
                        <h1 class=" hi" style="width: max-content;padding:0 10px"><span>Best Dentist in Pune<br>and
                                Pimpri Chinchwad</span></h1>
                    </div>
                    <div class="btn1">
                        <a href="#" class="btn1 mt-sm-1 toggle1">Get Offer - Book Now</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('index/images/banner-2.webp')">
                    <div class="carousel-caption caption">
                        <h1 class=" hi" style="width: max-content;padding:0 10px"><span>Our Passion is
                                Designing<br>The Perfect Smile</span></h1>
                    </div>
                    <div class="btn1">
                        <a href="#" class="btn1 mt-sm-1 toggle1">Exciting Offer On Appointment </a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('index/images/banner-3.webp')">
                    <div class="carousel-caption caption">
                        <h1 class=" hi" style="width: max-content;padding:0 10px"><span>ISO Certified and<br>Awarded
                                Dental Clinic</span></h1>
                    </div>
                    <div class="btn1">
                        <a href="#" class="btn1 mt-sm-1 toggle1">Get Affordable Treatment</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--banner close-->
    <div class="">


        <!-- TREATMENTS -->
        <section class="treatment-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="treatmentHeading">SYMPTOMS & TREATMENTS</h2>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg" src="index/images/filling-icon.webp">
                            <p class="text-center tratmentTitle">Dental Fillings</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg" src="index/images/root-canal-icon.webp">
                            <p class="text-center tratmentTitle">Root Canal Treatment</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/teeth-removal-icon.webp">
                            <p class="text-center tratmentTitle">Wisdom Teeth Removal</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/braces-aligners-icon.webp">
                            <p class="text-center tratmentTitle">Braces & Aligners</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/dental-implant-icon.webp">
                            <p class="text-center tratmentTitle">Dental Implants</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg" src="index/images/dentures-icon.webp">
                            <p class="text-center tratmentTitle">Dentures</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/crowns-bridges-icon.webp">
                            <p class="text-center tratmentTitle">Bridges & Crowns</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/childrens-dentistry-icon.webp">
                            <p class="text-center tratmentTitle">Kids Dentistry</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/smile-makeover-icon.webp">
                            <p class="text-center tratmentTitle">Smile Makeover</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/teeth-whitening-icon.webp">
                            <p class="text-center tratmentTitle">Teeth Whitening</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg"
                                src="index/images/mouth-ulcers-icon.webp">
                            <p class="text-center tratmentTitle">Mouth Ulcers</p>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-3 treatmentsContainer">
                        <a href="" class="treatments">
                            <img alt="nearest dental clinic" class="centerImg" src="index/images/read-more-icon.webp">
                            <p class="text-center tratmentTitle">View More</p>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- COMPARISON IMAGE SECTION -->
        <section class="slider-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12  mt-3 " id="sliderCompImg">
                        <div class="img-comp-container">
                            <div class="img-comp-img">
                                <img style="display: block; vertical-align: middle;" class="imgComp"
                                    src="index/images/safety1-min.webp" width="500px" height="500px">
                            </div>
                            <div class="img-comp-img img-comp-overlay">
                                <img style="display: block; vertical-align: middle;" class="imgComp"
                                    src="index/images/safety2-min.webp" width="500px" height="500px">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-12">

                        <div class="about-info py-3" data-aos="fade-up" data-aos-duration="2000">
                            <h5 class="mb-3">WHO WE ARE</h5>
                            <h2 class="mb-3">Multi-Specialty Dental Clinic In Pimpri-Chinchwad, Pune</h2>
                            <p>If you need to know is there a <strong>Best Dentist in pimpri chinchwad</strong> or
                                <strong>Best Dental Clinic in pimpri chinchwad</strong>. Yes, there is. GoBest Dentist
                                is a modern, hi-tech, and ISO certified chain of multi-specialty dental clinic in Pune,
                                India. Headed by Dr. Sana Mokashi it has a team of super specialists that is dedicated
                                towards delivering all dental treatment under one roof. We strive to provide high
                                quality, personalized dental care in a relaxing, comfortable, and safe environment.
                                Lifelong relationships are created with our patients based on trust and honesty.
                            </p>
                            <div class="row about-point">
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="500">
                                    <div class="point" style="text-align:center;"><a href="#." class="btn">Affordable
                                            <br> Dentists</a></div>
                                </div>
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="point" style="text-align:center;"><a href="#." class="btn">Advanced <br>
                                            Techniques</a></div>
                                </div>
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="point" style="text-align:center;"><a href="#." class="btn">Hygiene
                                            Safety <br> priority</a></div>
                                </div>
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="point" style="text-align:center;"><a href="#." class="btn">Advanced <br>
                                            Instruments</a></div>
                                </div>
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="point" style="text-align:center;"><a href="#."
                                            class="btn">Multispecialist <br> Dentists</a></div>
                                </div>
                                <div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1800">
                                    <div class="point" style="text-align:center;"><a href="#." class="btn">Professional
                                            <br> Staff</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- KNOW MORE -->
        <section class="knowmore-sec">
            <div class="container text-center">
                <h2 class=" offset-xl-2">Know More About Our Success Stories</h2>
                <div class="row">
                    <div class="col-lg-2 offset-lg-1 col-12 my-lg-0">
                        <img src="images/ISO-CERTIFIED-logo.webp" alt="ISO" class="img-fluid image2">
                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">30,000</span> <span class="plus">+</span>
                            <p>Happy Patients</p>
                        </div>

                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">30</span> <span class="plus">+</span>
                            <p>Experts Doctors</p>
                        </div>

                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">100</span> <span class="plus">+</span>
                            <p>Treatments</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">4</span> <span class="plus">+</span>
                            <p>Branches In Pune</p>
                        </div>
                    </div>
                    <div class="offset-lg-1"></div>
                </div>
            </div>
        </section>



        <!--video-->
        <section class="patient_speaks">
            <div class="container">
                <div class="heading">
                    <h2>Patient Speaks</h2>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 col-6 pb-3">
                            <a href="testimonials.php" class="video-box">
                                <img src="images/video/customer1.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 pb-3">
                            <a href="testimonials.php" class="video-box">
                                <img src="images/video/customer2.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 pb-3">
                            <a href="testimonials.php" class="video-box">
                                <img src="images/video/customer3.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 pb-3">
                            <a href="testimonials.php" class="video-box">
                                <img src="images/video/customer4.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div style="text-align:center;">
                            <a href="testimonials.php" class="btn view_more">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--video-->

        <!-- why-choose -->
        <section class="why-choose">
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
                                    <img src="index/images/AFFORDABLE-DENTISTS.webp" alt="Why choose us"
                                        class="img-fluid p-xl-2" src="index/images/AFFORDABLE-DENTISTS.webp">
                                </div>
                                <div class="col-12 pt-2 px-3">
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
                                    <img src="index/images/ISO-CERTIFIED.webp" alt="Why choose us"
                                        class="img-fluid p-xl-2" src="index/images/ISO-CERTIFIED.webp">
                                </div>
                                <div class="col-12 pl-4 pr-4 pt-2">
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
                                    <img src="index/images/Advanced-Technology1.webp" alt="Why choose us"
                                        class="img-fluid p-xl-2" src="index/images/Advanced-Technology1.webp">
                                </div>
                                <div class="col-12 px-3 pt-2">
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
                                    <img src="index/images/SAFETY-&amp;-QUALITY.webp" alt="Why choose us"
                                        class="img-fluid p-xl-2" src="index/images/SAFETY-&amp;-QUALITY.webp">
                                </div>
                                <div class="col-12 px-3 pt-2">
                                    <h5>SAFETY &amp; QUALITY</h5>
                                    <p>Dedication to quality &amp; patient safety is embedded in everything we do.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--review-->
        <section class="review pt-5 pb-5" style="background-color: aliceblue;">
            <div class="container text-center">
                <h5 style="color:#fe235b;">REVIEWS</h5>
                <h2>What Patients Speak</h2>
                <p>Know what our patients say about GoBest Dentist</p>
                <div class="slider-area mt-0">
                    <div id="carouselExampleControls" class="carousel slide mt-0" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item item active">
                                <div class="img-area text-center">
                                    <img src="index/images/Irfan-M.webp" class="d-block w-100 " alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i>Irfan M</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        Doctor of GoBest Dentist is very experienced. They provide very best treatement
                                        at
                                        affordable prices. You can feel relaxed after visiting the place. It is surely
                                        the
                                        <strong>best dental clinic in pimpri chinchwad </strong> <i
                                            class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class=" img-area text-center">
                                    <img src="index/images/Karishma-A.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer" style="padding:5px;"><i> Karishma A</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        Very friendly staff. Nice ambience of the clinic. I had gone to GoBest Dentist
                                        for my teeth whitening. The results are pretty immaculate. I'm very happy with
                                        my treatment. I recommend this clinic as <strong>best dentist in nigdi
                                            pradhikaran</strong>. <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Rafiq-M.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i> Rafiq M</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        Thanks a lot doctor for such a nice treatment to my daughter. The doctor was
                                        handling
                                        very nicely to her. Even i visited for root canal of my father and that too done
                                        very
                                        nicely at affordable cost. It is the <strong>best dental clinic in
                                            pune</strong>. <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Rahul-K.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption  d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer">Rahul K</h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        I went for wisdom tooth extraction of my mother and that happened very smoothly
                                        with
                                        minimum pain and minimum cost too. Also Root canal and CAP were suggested for
                                        other
                                        teeth as precaution. <strong>It can be sonsidered as best orthodontist in
                                            pune.</strong><i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Samir-S.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption  d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i> Samir S</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        The doctor is so polite and yet knowledgeable.The clinic has good facilities and
                                        my root canal and capping were done so neatly with so less pain at affordable
                                        prices. It is surely the <strong>best dental clinic in pimpri chinchwad
                                        </strong>. <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Shainaj-M.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i> Shainaj M</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        Visited two dentists for my tooth pain but both doctors made it worse but my
                                        friend suggested GoBest Dentist is genuine and affordable dentist. In few visits
                                        only my problem was resolved. GoBest Dentist is suerly the <strong>best dentist
                                            in pimpri </strong>. <i class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Shama-M.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i> Shama M</i></h3>
                                    <p style="line-height:100%"><i class="fa fa-quote-left"></i>
                                        Great facilities in the clinic. Effective treatments and dental surgeries. And
                                        most importantly all the doctors are very friendly, cooperative and caring. They
                                        make Most painful dental problem look<strong> like small ones. </strong>. <i
                                            class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item item">
                                <div class="img-area">
                                    <img src="index/images/Shekhar-M.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-caption d-md-block"
                                    style="position:absolute;bottom:0rem !important">
                                    <h3 class="blockquote-footer"><i>Shekhar M</i></h3>
                                    <p style="line-height:100%;"><i class="fa fa-quote-left"></i>
                                        I had severe pain on Sunday and called so many dentists in my area, nobody
                                        helped me but GoBest Dentist attended by appointment on my request. Explained
                                        treatment plan and<strong> overall good experience. </strong>. <i
                                            class="fa fa-quote-right"></i>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev"
                            style="background:aliceblue !important;border:none!important" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <i class="fa fa-chevron-left" style="color:black" aria-hidden="true"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next"
                            style="background:aliceblue !important;border:none!important" bg-color="white"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <i class="fa fa-chevron-right" style="color:black" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


            </div>
        </section>
        <!--review close-->

        <!-- equipments-->
        <section class="advTechnology">
            <div class="container text-center">
                <h5 data-aos="fade-up" data-aos-duration="1000">Equipments</h5>
                <h2 data-aos="fade-up" data-aos-duration="1500">Advanced Technology</h2>
                <p data-aos="fade-up" data-aos-duration="2000">We offer the very latest advantages in dental technology
                    and equipment. Our doctors are continually trained in the use of our advanced technology and
                    equipments.</p>

                <div class="row ">
                    <div class="col-lg-3 col-sm-6 col-6 my-4">
                        <div class="machine" data-aos="fade-up" data-aos-duration="800">
                            <img src="index/images/advT1.webp" alt="" class="img-fluid">
                            <h4 style="fontsize:12px">Rotary Endodontics</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6  my-4">
                        <div class="machine" data-aos="fade-up" data-aos-duration="1600">
                            <img src="index/images/lightcore.webp" alt="" class="img-fluid fluid1">
                            <h4>Light Cure </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6  d-sm-flex my-4">
                        <div class="machine" data-aos="fade-up" data-aos-duration="2400">
                            <img src="index/images/advT3.webp" alt="" class="img-fluid">
                            <h4>CAD CAM & Zirconia </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6  d-sm-flex my-4">
                        <div class="machine" data-aos="fade-up" data-aos-duration="3000">
                            <img src="index/images/advT4.webp" alt="" class="img-fluid">
                            <h4>Ultrasonic Cleaning </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- equipments- -->

        <!--hygiene-->
        <section class="hygiene">
            <div class="container text-center">
                <h5>HYGIENE</h5>
                <h2>We <strong>‘Care’</strong> For You!</h2>
                <p>To ensure hygine and good health, all the instruments are properly sterialised which makes us
                    <strong>Best dentist in pune.</strong>
                </p>
                <div class="row text-lg-left" id="hygiene-part">
                    <div class=" col-lg-12 d-flex pb-4">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-lg-12 mt-3">

                                    <h2>STERIALIZATION</h2>
                                    <p>It is very essential for people to understand the importance of hygiene and
                                        sterilization especially when visiting a dental clinic. We takes every possible
                                        step to prevent cross contamination and protect the health of our patients which
                                        makes us <strong>Best dentist in wakad, pune</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 d-flex pb-4 col-sm-6 col-6" id="size">
                        <div class=" hygines" data-aos="fade-up" data-aos-duration="2000">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img src="index/images/hygiene1.webp" alt="hygiene1" class="img-fluid">

                                    <h4>DISINFECTION</h4>
                                </div>
                                <div class="col-lg-6">
                                    <p class="hygines_txt">OSHA requires surface disinfectants to be efficacious against
                                        HIV and HBV. If blood is present on the surface, an intermediate-level
                                        disinfectant labeled as tuberculocidal should be used for proper hygine. Visit
                                        the <strong>Best dental clinic in wakad, pune</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 d-flex pb-4  col-sm-6 col-6" id="size">
                        <div class="hygines" data-aos="fade-up" data-aos-duration="3000">
                            <div class="row">
                                <div class="col-lg-6 size">
                                    <img src="index/images/hygiene1_img.webp" alt="hygiene1" class="img-fluid">

                                    <h4>ULTRASONIC CLEANING DEVICES</h4>
                                </div>
                                <div class="col-lg-6 ">
                                    <p class="hygines_txt">These devices use sound waves, that are outside the human
                                        hearing range to form oscillating bubbles, a process called cavitation. These
                                        bubbles act on debris to remove it from the instruments. Visit the <strong>Best
                                            dental clinic in pune</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hygiene-->

        <!--more review-->
        <section class="more-review"
            style="background: url(images/background.webp) no-repeat center center; background-size: cover;background-attachment: fixed;">
            <div class="container text-center">
                <h2 class="text-center">More Reviews On</h2>


                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="box mb-3 google-box" data-aos="fade-up" data-aos-duration="2000"
                            style="background:white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/google.webp" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Google</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 1100+ Reviews </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box mb-3 justdial-box" data-aos="fade-up" data-aos-duration="2000"
                            style="background:white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/jd.png" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Just Dial</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 1400+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box mb-3 practo-box" data-aos="fade-up" data-aos-duration="2000"
                            style="background:white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/practo.png" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Practo</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--more review-->

        <!--casestudy-->

        <section class="patient_speaks">
            <div class="container">
                <div class="heading">
                    <h2>Case Study</h2>
                </div>
                <div class="row">
                    <?php
              
              $sql = "SELECT * FROM casestudy WHERE is_delete = '0' LIMIT 4";
              $data = mysqli_query($conn, $sql);
              foreach($data as $d){
                     ?>
                    <div class="col-lg-3 col-6 col-sm-6 m-0 p-1">
                        <div class="case_study_img">
                            <img src="admin/pages/forms/caseimage/<?php echo $d['banner']; ?>" alt="case_study_img"
                                class="img-fluid img-fluid-set" style="height:11rem !important;width:100% !important">
                        </div>
                        <div class="patient_speak_videos">
                            <div class="iframe-footer"><span
                                    class="clinic-location"><?php echo $d['title']; ?></span><span
                                    class="video-time"></span></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div style="text-align:center;">
                <a href="fullcasestudy.php" class="btn view_more">View More</a>
            </div>
        </section>
        <!--casestudy-->

        <!--offer-->
        <div class="processing-contact-us-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <?php $link="select * from offer";
                          $reviews = mysqli_query($conn,$link);
                          while($row = mysqli_fetch_array($reviews)) {?>
                        <div class="footer-cta d-lg-flex"
                            style="background-image:url(admin/pages/forms/image/<?php echo $row["image"]; ?>)">
                            <?php } ?>

                            <div class="ad-price">
                                <span>Special Offer <br> <span class="rate">50% Off</span></span><br>
                                <a href="#.">Get Offer</a>
                            </div>
                            <div class="cta-whitebox ms-auto">
                                <h2><img class="smile" src="index/images/smile.webp" alt="image"> Smile At <span
                                        class="hylyt">Affordable</span> Fees !</h2>
                                <p style="font-size:15px;margin-bottom:1rem !important;">Free Check Up &amp; Upto 50%
                                    Discount On All Dental Treatments | Free Consultation |
                                    Root Canal 50% Flat Discount</p>
                                <a href="javascript:void(0);" class="call-back click-form btn-primary "
                                    title="Call Us">Get Offer</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--offer-->

        <!--map-->
        <section class="section">
            <div class="container">
                <h2 class="mb-5 text-center">Our Branch Location</h2>
                <div class="row pl-0">
                    <div class="r tab" id="r1" style="margin-bottom:40px; text-align: center;">
                        <a target="_blank" href="https://g.page/MokashiDentalClinicAkurdi?share"
                            class="button-50 ">AKURDI
                            <span>BRANCH</span></a>
                        <a target="_blank" href="https://g.page/MokashiDentalClinicWakad?share" class="button-50">WAKAD
                            <span>BRANCH</span> </a>
                        <a target="_blank" href="https://goo.gl/maps/QbWZv3xYr3r14Rbv5" class="button-50">BANER
                            <span>BRANCH</span></a>
                        <a target="_blank" href="https://goo.gl/maps/5yxfzu2CbNG1hbNA9"
                            class="button-50"><span>PIMPLE</span>
                            SAUDAGAR</a>
                        <a target="_blank" href="https://goo.gl/maps/ami8Kd4R4id1SjsF8" class="button-50">HINJEWADI</a>

                    </div>
                </div>
            </div>
        </section>
        <!--map-->



    </div>
    <!-- container -->



    <?php include("include/footer1.php") ?>
    <?php include("include/sidebar1.php") ?>

    <!-- Call Us -->
    <a href="tel:+917264889986;" class="phone-btn wow slideInRight ui-btn ui-shadow ui-corner-all " title="Call Us"
        style="color:#ffffff;"><i class="fa fa-phone"></i></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="js/jsddd.js"></script>
    <!-- <script defer src="wp-content/themes/clove-child/js/style.js"></script> -->



    <script type="text/javascript">
    players = new Array();

    function onYouTubeIframeAPIReady() {
        var temp = $("iframe.yt_players");
        for (var i = 0; i < temp.length; i++) {
            var t = new YT.Player($(temp[i]).attr('id'), {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
            players.push(t);
        }
    }
    onYouTubeIframeAPIReady();

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
            var temp = event.target.getVideoUrl();
            var tempPlayers = $("iframe.yt_players");
            for (var i = 0; i < players.length; i++) {
                if (players[i].getVideoUrl() != temp)
                    players[i].stopVideo();
            }
        }
    }
    </script>



    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("button-50");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>

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
            slider.setAttribute("src", "slider.png")

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

    <script>
    initComparisons();
    </script>
    <script>
    $('.animateHeader').delay(10000).fadeIn('1000');
    </script>

    <script>
    jQuery(document).ready(function() {
        jQuery(".appointment_capchacode #capCode").click(function() {
            jQuery(".enquiry-in").addClass('padd');
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
        var stickyNav = function() {
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

    <!-- <script>
  if (window.matchMedia('(max-width: 1024px)').matches)
{
  $(document).ready(function(){
    $('#bookForm').click(function(){
      $('.phone-btn').css('display','none');
      $('.chat-bot-launcher-container').css('display','none');
      $('.sidebar-contact').css('top':'25%','height':'100%');
    });
    $('.toggle').click(function(){
      $('.phone-btn').css('display','block');
      $('.chat-bot-launcher-container').css('display','block');
    });
  });
}
</script> -->

</body>

</html>