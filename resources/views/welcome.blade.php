<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Adult Dating - Post Classified Ads in India - Safe69</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{ asset('landingpage/images/favicon.png') }}')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- All stylesheet and icons css  -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/custom-icomoon/style.css') }}">
    <style>
        #fullpage {
            display: none;
            position: absolute;
            z-index: 9999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40vw;
            height: 50vh;
            background-size: contain;
            background-repeat: no-repeat no-repeat;
            background-position: center center;
            background-color: black;
        }
    </style>
</head>

<body>
    <!-- preloader start here -->
    <div class="preloader" id="preLoad">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> header section start here <================== -->
    <header class="header header--style2" id="navbar">
        <div class="header__top d-none d-lg-block">
            <div class="container">
                <div class="header__top--area">
                    <div class="header__top--left">
                        <ul>
                            <li>
                                <i class="myicon-mail1"></i> <span>support@safe69.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="header__top--right">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html"><img
                            src="{{ asset('landingpage/images/logo/safe69-dark.png') }}" alt="logo"
                            style="height: 40px;"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler--icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav mainmenu">
                            <ul>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Signup</a></li>
                            </ul>
                        </div>
                        <div class="header__more">
                            <button class="default-btn" type="button">Post Your Ad</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ================> header section end here <================== -->


    <!-- ================> Banner section start here <================== -->
    <div class="banner banner--style3 padding-top bg_img"
        style="background-image: url({{ asset('landingPage/images/banner/bg-3.jpg') }});">
        <div class="container">
            <div class="row g-0 justify-content-center justify-content-xl-between">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="banner__content">
                        <div class="banner__title">
                            <h2>Your Desire <br><span>Ends</span> Here</h2>
                            <p>Still looking for your significant other? Safe69 is the place for you! Join now to meet
                                single men and women worldwide.</p>
                            <a href="register.html" class="default-btn style-2"><span>Registration Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="banner__thumb text-xl-end">
                        <img src="{{ asset('landingpage/images/banner/rr.png') }}" alt="banner">
                        <div class="banner__thumb--shape">
                            <div class="shapeimg">
                                <img src="{{ asset('landingpage/images/banner/shape/home3/01.png') }}"
                                    alt="dating thumb">
                            </div>
                        </div>
                        <div class="banner__thumb--title">
                            <h4>Are You Waiting For Dating?</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Banner section end here <================== -->


    <!-- ================> About section start here <================== -->
    <div class="about about--style3 padding-top pt-xl-0">
        <div class="container">
            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <form action="#">
                    <div class="banner__list">
                        <div class="row align-items-center">
                            <div class="col-sm-3">
                                <div class="banner__inputlist">
                                    <select id="serviceType">
                                        <option value="0">Escorts</option>
                                        <option value="1">Massage</option>
                                        <option value="2">Male Escort</option>
                                        <option value="3">Female Escort</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="banner__inputlist">
                                    <select id="stateId">
                                        <option value="">Loading....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="banner__inputlist">
                                    <select id="cityId">
                                        <option value="">--Select City--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="javascript:void(0);"  class="default-btn reverse d-block text-center" id="showPostAddBtn"><span>Search
                                        Now</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ================> About section end here <================== -->
<div class="shop-page padding-bottom aside-bg">
        <div class="container">
           
            <div class="row justify-content-center pb-15 pt-3 wow fadeInUp" data-wow-duration="2s">
                <div class="col-lg-12 col-12">
                    <article>
                     
                        <div class="shop-product-wrap list row justify-content-center g-4" id="postAddDataBind">
                        </div>
                        {{-- <ul class="default-pagination lab-ul mt-5 justify-content-center">
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-left"></i></a>
                            </li>
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#" class="active">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                        </ul> --}}
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- ================> Member section start here <================== -->

    <div class="story padding-top padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
                <h2>Post Your Adult Advertisement or Search Hot Advertisers</h2><br>
                <p>Locate the Best Escorts in Your City</p>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-duration="2s">
                <div class="row g-4 justify-content-center row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="blog-single.html"><img
                                            src="{{ asset('landingpage/images/story/10.jpg') }}"
                                            alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Escorts</span>
                                </div>
                                <div class="story__content">
                                    <a href="blog-single.html">
                                        <h6>Hot and independent escorts ads. Sexy girls ready with their escort services
                                            to make you feel satisfied sexually.Women seeking men for a great session
                                            with their erotic services.</h6>
                                    </a>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Bangalore Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Delhi Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Mumbai Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="blog-single.html"><img
                                            src="{{ asset('landingpage/images/story/11.jpg') }}"
                                            alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Male Escorts</span>
                                </div>
                                <div class="story__content">
                                    <a href="blog-single.html">
                                        <h6>Male escorts, gay escorts, and gigolos. Dating with call boys and male
                                            escorts for erotic services. Enjoy your fantasies with male model escorts.
                                        </h6>
                                    </a>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Bangalore Male Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Delhi Male Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author mt-2">
                                        <div class="story__content--thumb">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Mumbai Male Escorts</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="blog-single.html"><img
                                            src="{{ asset('landingpage/images/story/12.jpg') }}"
                                            alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Massage</span>
                                </div>
                                <div class="story__content">
                                    <a href="blog-single.html">
                                        <h6>Best sensual massage ads. Sensual services to let you feel relaxed and calm.
                                            Sexy girls give you hot massage and full body massage.</h6>
                                    </a>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb mt-2">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Bangalore Massage</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb mt-2">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Delhi Massage</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb mt-2">
                                            <img src="{{ asset('landingpage/images/story/author/heart.png') }}"
                                                width="30" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <a href="blog-single.html">
                                                <p>Mumbai Massage</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ================> Member section end here <================== -->



    <!-- ================> Work section start here <================== -->
    <div class="work padding-top padding-bottom bg_img"
        style="background-image: url({{ asset('landingPage/images/bg-img/01.jpg') }});">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-duration="1.5s">
                <h2>Why Choose Safe69</h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <div class="d-xl-flex align-items-start work__area">
                    <div class="nav flex-xl-column nav-pills me-xl-4 work__tablist" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link" id="work__tab1-tab" data-bs-toggle="pill"
                            data-bs-target="#work__tab1" type="button" role="tab" aria-controls="work__tab1"
                            aria-selected="true"><img src="{{ asset('landingpage/images/work/01.png') }}"
                                alt="dating thumb" class="me-3"><span>Search Your
                                Partner</span></button>
                        <button class="nav-link active" id="work__tab2-tab" data-bs-toggle="pill"
                            data-bs-target="#work__tab2" type="button" role="tab" aria-controls="work__tab2"
                            aria-selected="false"><img src="{{ asset('landingpage/images/work/02.png') }}"
                                alt="dating thumb" class="me-3"><span>100% Match People</span></button>
                        <button class="nav-link" id="work__tab3-tab" data-bs-toggle="pill"
                            data-bs-target="#work__tab3" type="button" role="tab" aria-controls="work__tab3"
                            aria-selected="false"><img src="{{ asset('landingpage/images/work/03.png') }}"
                                alt="dating thumb" class="me-3"><span>Find Out
                                Partner</span></button>
                        <button class="nav-link" id="work__tab4-tab" data-bs-toggle="pill"
                            data-bs-target="#work__tab4" type="button" role="tab" aria-controls="work__tab4"
                            aria-selected="false"><img src="{{ asset('landingpage/images/work/04.png') }}"
                                alt="dating thumb" class="me-3"><span>Live The
                                Story</span></button>
                    </div>
                    <div class="tab-content work__tabcontent" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="work__tab1" role="tabpanel" aria-labelledby="work__tab1-tab">
                            <div class="work__item">
                                <div class="work__inner">
                                    <div class="work__thumb">
                                        <img src="{{ asset('landingpage/images/work/05.png') }}" alt="dating thumb">
                                    </div>
                                    <div class="work__content">
                                        <h3>Search Your Partner</h3>
                                        <p>The simple steps to follow to have great experience using ollya. all you have
                                            to do is follows your gut and awesome your heart!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="work__tab2" role="tabpanel"
                            aria-labelledby="work__tab2-tab">
                            <div class="work__item">
                                <div class="work__inner">
                                    <div class="work__thumb">
                                        <img src="{{ asset('landingpage/images/work/06.png') }}" alt="dating thumb">
                                    </div>
                                    <div class="work__content">
                                        <h3>100% Match People</h3>
                                        <p>The simple steps to follow to have great experience using ollya. all you have
                                            to do is follows your gut and awesome your heart!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="work__tab3" role="tabpanel" aria-labelledby="work__tab3-tab">
                            <div class="work__item">
                                <div class="work__inner">
                                    <div class="work__thumb">
                                        <img src="{{ asset('landingpage/images/work/07.png') }}" alt="dating thumb">
                                    </div>
                                    <div class="work__content">
                                        <h3>Find Out Partner</h3>
                                        <p>The simple steps to follow to have great experience using ollya. all you have
                                            to do is follows your gut and awesome your heart!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="work__tab4" role="tabpanel" aria-labelledby="work__tab4-tab">
                            <div class="work__item">
                                <div class="work__inner">
                                    <div class="work__thumb">
                                        <img src="{{ asset('landingpage/images/work/08.png') }}" alt="dating thumb">
                                    </div>
                                    <div class="work__content">
                                        <h3>Live The Story</h3>
                                        <p>The simple steps to follow to have great experience using ollya. all you have
                                            to do is follows your gut and awesome your heart!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Work section end here <================== -->


    <!-- ================> Footer section start here <================== -->
    <footer class="footer footer--style3">

        <div class="footer__bottom wow fadeInUp" data-wow-duration="1.5s">
            <div class="container">
                <div class="row g-4 g-lg-0 justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__content text-center">
                            <p class="mb-0">All Rights Reserved &copy; <a href="index.html">Safe69</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__newsletter--social">
                            <ul class="justify-content-center justify-content-lg-end">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ad Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="shop-single aside-bg">
						<div class="container">
							<div class="row justify-content-center pt-4">
								<div class="col-lg-12 col-12">
									<article>
										<div class="product-details">
											<div class="row align-items-center">
												<div class="col-md-4 col-12">
													<div class="product-thumb">
														<div class="swiper-container pro-single-top ">
															<div class="swiper-wrapper">
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list1.jpg')}}" alt="shop"></div>
																</div>
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list2.jpg')}}" alt="shop"></div>
																</div>
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list3.jpg')}}" alt="shop"></div>
																</div>
															</div>
														</div>
														<div class="swiper-container pro-single-thumbs">
															<div class="swiper-wrapper">
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list1.jpg')}}" alt="shop"></div>
																</div>
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list2.jpg')}}" alt="shop"></div>
																</div>
																<div class="swiper-slide">
																	<div class="single-thumb"><img src="{{ asset('landingpage/images/search/list3.jpg')}}" alt="shop"></div>
																</div>
															</div>
														</div>
														
														<div class="pro-single-next"><i class="fa-solid fa-angle-left"></i></div>
														<div class="pro-single-prev"><i class="fa-solid fa-angle-right"></i></div>
													</div>
												</div>
												<div class="col-md-8 col-12">
													<div class="post-content">
														<i style="color: #617bc5;">20 FEB </i>
														<p>21 YEARS | Escorts | Bangalore | Bengaluru
														</p>
														<p><b>Ad Id </b>: in0hlsarp</p>
														<h4>Bengaluru Myself kajal call girl service anytime booking VIP TOP BEST CALL GIRL SEX service available 24 horse available</h4>
														<p>WhatsApp ME</p>
														<p>SAFE & SECURE HIGH CLASS SARVICE AFFORDABLE RATE HUNDRED PRESENT SATAFICATION UNLIMITED ENJOY MENT TIME FOR MODEL / TEEN ESCORT AGENCY</p>
														<p>* CALL USE HIGH CLASS LUXRY AND PREMIUM ESCORT AGENCY WE PROVIDE WILL EDUCATED ROYAL CLASS FEMALE HIGH CLASS ESCORT AGENCY OFFERING EIGHT OF HIGH CLASS ESCORT SERVICE IN THE SARVEL NEARBY ALL PLACE</p>
														<p>*** GET HIGH PROFILE QUEEN WELL EDUCATED GOOD LOOKING FULL COOPERATIVE MODEL SARVICE YOU CAN SEE..</p>
														<form>
															<button type="submit" class="default-btn"><span><i class="myicon-phone-call"></i> Call</span></button>
															<button type="submit" class="default-btn"><span><i class="myicon-whatsapp"></i> WhatsApp</span></button>
														</form>
													</div>
												</div>
											</div>
										</div>
										<div class="review">
											<div class="review-content description-show">
												<div class="description">
													<h6><i class="myicon-alert-triangle"></i> Report Abuse</h6>
													<div class="post-item">
														<div class="post-content">
															<ul class="lab-ul">
																<li>
																	You can send an email to privacy.in@sduko.com to report for any improper use of images, report of intellectual property (for example telephone, e-mail, names and addresses).
																</li>
																<li>
																	You can send an email to grievances@sduko.com to report for any kind of deemed illegal or any abusive content.
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="review">
											<div class="review-content description-show">
												<div class="description">
													<p>
														<strong>Safe69 Does Not Mediate in the Affairs Between Pleasure Seekers and Advertisers.</strong>
													</p>
													<p>
														By visiting our website and using our adult classified ads, the VISITORS accept our Terms and Conditions of use, and the code of conducts we expect from our visitors to follow.
													</p>
													<p>
														The adult classified ads in safe69 has been published by the advertisers under their complete responsibility. The advertisements are not subjected to any type of prior verification by safe69. This classified ad portal is not responsible regarding the veracity, legality, respect to the property right and possible displeasure with the public or moral order of the online contents entered by the user under any condition.
													</p>
													<p>
														Safe69 is a free adult classified ad portal that allow the publishers to promote their adult services. The ad portal is not supposed to intervene in any kind of relationship or settlement between the pleasure seekers and service providers.
													</p>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade view-Modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="fullpage" onclick="this.style.display='none';" witdth="200px">
                    <div class="btn-align-right">
                        <a href="javascript:void(0);" onclick="closeFullScreen()"><i class="myicon-x"></i></a>
                    </div>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">Ad Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Service Type</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="Loading....modalService"></span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Region</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalState">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">City</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalCity">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Post Heading</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalPostHeading">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Post Description</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalPostDesc">Loading....</span></label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Model Age</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label fw-bold text-white"><span
                                            id="modalAge">Loading....</span></label>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Images</label>
                                <label class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9">
                                    <div class="card-body px-0 pt-3 image-grid">
                                        <div class="row gap-3 lightgallery">
                                           
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>


    <!-- All Needed JS -->
    <script src="{{ asset('landingpage/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/swiper.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/wow.js') }}"></script>
    <script src="{{ asset('landingpage/js/counterup.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/lightcase.js') }}"></script>
    <script src="{{ asset('landingpage/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/plugins.js') }}"></script>
    <script src="{{ asset('landingpage/js/main.js') }}"></script>

    <script>
         function getPics() { //just for this demo
            const imgs = document.querySelectorAll('.lightgallery img');
            const fullPage = document.querySelector('#fullpage');

            imgs.forEach(img => {
                img.addEventListener('click', function() {
                    fullPage.style.backgroundImage = 'url(' + img.src + ')';
                    fullPage.style.display = 'block';
                });
            });
        }

        function closeFullScreen() {
            $(document).ready(function() {
                $('#fullpage').css('display', 'none');
            });
        }
         function viewPostModal(param) {
            $(document).ready(function() {

                $.ajax({
                    url: "{{ url('/viewPostDataWelcome') }}",
                    data: {
                        id: param
                    },
                    success: function(res) {
                        var dataGh = res.data;
                        var serv = "";
                        if (res.data.serviceType == 1) {
                            serv = "Massage";
                        } else if (res.data.serviceType == 2) {
                            serv = "Male Escort";
                        } else if (res.data.serviceType == 3) {
                            serv = "Female Escort";
                        }
                        $('#modalService').html(serv);
                        $('#modalState').html(res.data.state);
                        $('#modalCity').html(res.data.city);
                        $('#modalPostHeading').html(res.data.postHeading);
                        $('#modalPostDesc').html(res.data.postDesc);
                        $('#modalAge').html(res.data.modelAge);

                        var imageDataLength = res.images.length;
                        var imageBindArr = [];
                        for (var i = 0; i < imageDataLength; i++) {
                            var imageLink = 'uploads/PostImages' + '/' + res.images[i].image + '';
                            var img = '<img class="img-thumbnail" src="' + imageLink +
                                '" style="width:100%;"  alt="image"/>'
                            var imageBin =
                                '<a href="javascript:void(0);" onclick="getPics()" data-exthumbimage="' +
                                imageLink + '" data-src="' + imageLink +
                                '" class="col-lg-3 col-md-6 mb-4"> ' + img + ' </a>';
                            imageBindArr.push(imageBin);
                        }
                        $('.lightgallery').html(imageBindArr.join(" "));

                    }
                });
            })
        }
          $(document).ready(function() {
            
            $('#showPostAddBtn').on('click',function(){
                var serviceType = $('#serviceType').val();
                var stateId = $('#stateId').val();
                var cityId = $('#cityId').val();
                $('#preLoad').show();
                $.ajax({
                    url: "{{ url('/getAddPost') }}",
                    data:{
                        'serviceType': serviceType,
                        'stateId':stateId,
                        'cityId':cityId,

                    },
                    success: function(res) {
                        var postData = [];
                        var postDataLength = res['data'].length;
                        for (var i = 0; i < postDataLength; i++) {
                            var image = '{{asset('uploads/PostImages/')}}'+'/'+res['data'][i]['image']+'';
                                var hhh = '<img src="'+image+'"  alt="shop">';
                            var postDataKt = '<img src="'+image+'"  alt="shop">';
                            var postDataKt = '<div class="col-lg-4 col-md-6 col-12"> <div class="product-list-item"> <div class="product-thumb"> <div class="pro-thumb"> '+hhh+' </div> </div> <div class="product-content"> <h5 class="mb-3"> <a href="javascript:void(0);" data-bs-toggle="modal" onclick="viewPostModal('+res['data'][i]['pId']+')" data-bs-target=".view-Modal"> '+res['data'][i]['postHeading']+' </a> </h5> <h6 class="mb-3"> '+res['data'][i]['modelAge']+' | '+res['data'][i]['typeS']+' | '+res['data'][i]['state']+' | '+res['data'][i]['city']+' </h6> <p class="mb-3">'+res['data'][i]['postDesc']+' </p> <a class="default-btn reverse py-2 px-2 me-2"  href="//api.whatsapp.com/send?phone=91'+ res['data'][i]['whatsApp']+'" target="_blank"> <span><i class="myicon-whatsapp" ></i> WhatsApp</span>  </a>  </div> </div>  </div>';
                          
                            postData.push(postDataKt);
                        }
                        $('#postAddDataBind').html(postData.join(" "));
                        $('#preLoad').hide();
                       
                    }
                });
            })

          $.ajax({
                    url: "{{ url('/getStateWelcome') }}",
                    success: function(res) {
                        var optionState = [
                            '<option value="" >--Select Religion--</option>'
                        ];
                        var optionLengthState = res['data'].length;

                        for (var i = 0; i < optionLengthState; i++) {
                            var resOptionState = '<option value="' + res['data'][i]['state_name'] + '" >' +
                                res['data'][i]['state_name'] + '</option>'
                            optionState.push(resOptionState);
                        }
                        $('#stateId').html(optionState.join(" "));
                    }
                });

                $('#stateId').on('change', function() {
                    var optionCity = '<option value="" >Loading....</option>';
                    $('#cityId').html(optionCity);
                    var stateId = $('#stateId').val();
                    $.ajax({
                        url: "{{ url('/getCityWelcome') }}",
                        data: {
                            stateId: stateId
                        },
                        success: function(res) {
                            optionCity = [
                                '<option value="" >--Select City--</option>'
                            ];
                            var optionLengthCity = res['data'].length;

                            for (var i = 0; i < optionLengthCity; i++) {
                                var resOptionCity = '<option value="' + res['data'][i][
                                    'city_name'
                                ] + '" >' + res['data'][i]['city_name'] + '</option>'
                                optionCity.push(resOptionCity);
                            }
                          
                            $('#cityId').html(optionCity.join(" "));
                        }
                    });
                })
                })
    </script>
</body>

</html>
