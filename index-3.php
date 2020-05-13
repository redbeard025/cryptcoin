<?php
session_start();
error_reporting(0);
$varsession = $_SESSION['nombre'];

if ($varsession == null || $varsession = '') {
	header("location:guestuser.html");;
	die();

}

?>


<!DOCTYPE html>
<html lang="zxx">


<!-- index-2.html 02:25  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>Welcome</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/css/icofont.css">	
    <!-- font awesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">	
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/css/extralayers.css" media="screen" />		
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />	
    <!-- Style CSS --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home-2">



	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">CryptCoin.</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-2">
		<!-- START TOP AREA -->
		<div class="top-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
							<ul>
								<li class="social-header"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li class="social-header"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
								<li class="social-header"><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
								<li class="social-header"><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				
					<!-- end col -->
					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<div class="info-menu">						
						<p>Welcome to CryptCoin - Bitcoin And Crypto Currency<p>  
						<h7 style="color: orange;" > Welcome: <?php echo $_SESSION['nombre'] ?> </h7>
						</div>
					</div> 
					<!-- end col -->
					
					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
						
							<ul>
								<li><a href="logout.php"><i class="icofont icofont-login"></i> Log out </a></li>
								<li><a href="#"><i class="icofont icofont-hand-drag2"></i> Help </a></li>
								<li><a href="#"><i class="icofont icofont-live-support"></i> Support </a></li>
							</ul>
							
						</div>
					</div> 
					
				</div>
			</div>
		</div>
		<!-- END TOP AREA -->
		<!-- START LOGO AREA -->
		<div class="logo-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-5 col-md-3 col-sm-6 col-7 mx-auto pl-0 mb-lg-0 mb-5">
					
						<div class="logo">
							<a href="index-3.html">
							   <img class="img-fluid" src="assets/img/loguis.png" alt="">
							</a>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-7 col-md-12 col-sm-12 col-12">
						<div class="header-info-box">
                            <div class="header-info-icon">
								<i class="fa fa-envelope-open"></i>
							</div>
							<p>Correo</p>
                            <h6>info@CryptCoin.com</h6>
                        </div>
						<div class="header-info-box">
                            <div class="header-info-icon">
								<i class="icofont icofont-phone"></i>
							</div>
							<p>Llamanos </p>
                            <h6>849-456-0975</h6>
                        </div>
						<div class="header-info-box">
                            <a href="#" class="quote-btn">Comenzar <i class="icofont icofont-caret-right"></i></a>
                        </div>
					</div>


					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END LOGO AREA -->
		<!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-9 d-none d-lg-block d-md-none">
							<nav class="navbar navbar-expand-lg justify-content-left">
								<ul class="navbar-nav">
								   <li><a href="index-3.html" class="active nav-link">Home</a>
										<!-- <ul class="dropdown-menu">
											<li><a href="index-2.html">Home 1</a></li>
											<li><a href="index-3.html">Home 2</a></li>
											<li><a href="index-4.html">Home 3</a></li>
											<li><a href="index-5.html">Home 4</a></li>
										</ul> -->
									</li>
									<li class="dropdown"><a class="nav-link" href="#">Pages</a>
										<ul class="dropdown-menu">
											<li><a href="about.html">About Us</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="single-team.html">Team Single</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="pricing.html">Our Pricing</a></li>
											<li><a href="faq.html">FAQ</a></li>
											<li><a href="error.html">404</a></li>
											<li class="dropdown"><a href="service.html" class="nav-link">Services</a>
										</ul>
									</li>
										<ul class="dropdown-menu">
											<li><a href="service.html">Our All Services</a></li>
											<li><a href="single-service.html">Bitcoin Trading</a></li>
											<li><a href="single-service.html">Coin Buy & Sell</a></li>
											<li><a href="single-service.html">Bitcoin & Ethereum</a></li>
											<li><a href="single-service.html">Cryptocurrency</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="service.html" class="nav-link">Shop</a>
										<ul class="dropdown-menu">
											<li><a href="shop.html">Our Products</a></li>
											<li><a href="single-product.html">Product Details</a></li>
											<li><a href="shop-cart.html">Shopping Cart</a></li>
											<li><a href="shop-checkout.html">Shopping Checkout</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="buy.html" class="nav-link">Coin</a>
										<ul class="dropdown-menu">
											<li><a href="buy.html">Buy & Sell</a></li>
											<li><a href="data.html">Analyze</a></li>
											<li><a href="wallet.html">wallet</a></li>
											<li><a href="exchange.html">Exchange</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="blog.html" class="nav-link">News</a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Latest News</a></li>
											<li><a href="single-blog.html">Single News</a></li>
										</ul>
									</li>
									<li><a href="contact.html" class="nav-link">Contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-3 d-none d-lg-block d-md-none text-right pr-0">
							<a href="#" class="quote-btn">Get A Quote <i class="icofont icofont-caret-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGATION AREA -->	
	</header>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE 1 -->
				<li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide One">
					<!-- MAIN IMAGE -->
					<img src="assets/img/bg/slide4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="home-slide-overlay"></div> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2>The Bitcoin and Blockchain <br> its power for innovation</h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-endelementdelay="0.1">
						<a  href="#" class="btn-style btn-filled">Read More</a> &ensp;&ensp; 
						<a href="#" class="btn-style btn-border">OUR SERVICES</a>
					</div>
						data-elementdelay="0.01"
				</li>
				<!-- SLIDE 2 -->
				<li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Two">
					<!-- MAIN IMAGE -->
					<img src="assets/img/bg/slide2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="home-slide-overlay"></div> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2>Bitcoin is better than <br> currency and a big industry</h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<a  href="about-us.html" class="btn-style btn-border">Learn More</a> &ensp;&ensp; 
						<a href="services.html" class="btn-style btn-filled">Buy Coin</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- END SLIDER SECTION  -->
	<!-- START SERVICE SECTION -->
    <section id="service" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-8 mx-auto text-center">
					<div class="section-title">
						<h5>what we do</h5>
						<h3>CryptCoin <span>Services</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
			</div>
			<!-- end section title -->	 
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
					<div class="single-service-item">
						<div class="single-service">
							<div class="single-service-img">
								<img class="img-fluid" src="assets/img/service/4.jpg" alt="">
							</div>
							<div class="single-service-title">
								<div class="single-service-icon">
									<i class="fa fa-dollar-sign"></i>
								</div>
								<div class="single-service-text">
									<h5>Cryptocurrency Trading</h5>
								</div>
							</div>
							<div class="single-service-dec">
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
				</div>
				<!-- end single service -->
				<div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
					<div class="single-service-item">
						<div class="single-service">
							<div class="single-service-img">
								<img class="img-fluid" src="assets/img/service/1.jpg" alt="">
							</div>
							<div class="single-service-title">
								<div class="single-service-icon">
									<i class="fab fa-gg"></i>
								</div>
								<div class="single-service-text">
									<h5>Bitcoin Trading</h5>
								</div>
							</div>
							<div class="single-service-dec">
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
				</div>
				<!-- end single service -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-service-item">
						<div class="single-service">
							<div class="single-service-img">
								<img class="img-fluid" src="assets/img/service/3.jpg" alt="">
							</div>
							<div class="single-service-title">
								<div class="single-service-icon">
									<i class="fa fa-shekel-sign"></i>
								</div>
								<div class="single-service-text">
									<h5>Coin Buy & Sell</h5>
								</div>
							</div>
							<div class="single-service-dec">
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
				</div>
				<!-- end single service -->
			</div>
			<div class="row mt-5">
				<div class="col-12 text-center">
					<div class="serviceall-btn wow fadeInDown">
						<a href="#">Check All Services <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
				</div>
			</div>	
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SERVICE SECTION -->

    <!-- START PROMO SECTION -->
    <section id="promondex2" class="section-padding bg-gray">
        <div class="container">	 
			<div class="row mb-5">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 faq-page-into">
					<h6>Sed ut perspiciatis unde omnis</h6>
					<h3>Secure & easy way to buy & sell bitcoin</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					<ul>
						<li><i class="icofont icofont-ui-press"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
						<li><i class="icofont icofont-ui-press"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</li>
					</ul>
					<a href="#" class="quote-btn mt-4">Learn More <i class="icofont icofont-caret-right"></i></a>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-blog-slider owl-carousel owl-theme">
						<div class="single-blog-slider-item">
							<img class="img-fluid" src="assets/img/blog/1.jpg" alt="">
						</div>
						<div class="single-blog-slider-item">
							<img class="img-fluid" src="assets/img/blog/2.jpg" alt="">
						</div>
						<div class="single-blog-slider-item">
							<img class="img-fluid" src="assets/img/blog/3.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- end col -->					
			</div>
			<!-- end row -->					
		</div>
    </section>
    <!-- END PROMO SECTION -->
	
	<!-- START GALLERY SECTION -->
    <section id="gallery" class="section-padding pb-5">
        <div class="container">
			<div class="row">
				<div class="col-8 mx-auto text-center">
					<div class="section-title">
						<h5>photo gallery</h5>
						<h3>Awesome <span>Portfolio</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
			</div>
			<!-- end section title -->	 
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0 ">
					<div class="widget cat_wid mb-5">
						<h3 class="widget-title">Category</h3>
						<!-- end widget tittle-->
						<div class="widget-inner mt-5">
							<div class="category-menu">
								<ul>
									<li><a href="#">Bitcoin <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Ethereum <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Cryptocurrency <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Trading <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Business <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Security <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Buy & Sell <i class="float-right icofont icofont-thin-right"></i></a></li>
									<li><a href="#">Investment <i class="float-right icofont icofont-thin-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end widget -->				
				</div>
				<!-- end col -->
				<div class="col-lg-9 col-md-9 col-12">
					<div class="row">
						<div class="col-12">
							<div class="grid">
								<div class="grid-item entry">
									<a href="assets/img/service/1.jpg" data-title="IMAGE TITLE 1" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/1.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item grid-item--width2 entry">
									<a href="assets/img/service/2.jpg" data-title="IMAGE TITLE 2" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/2.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/service/3.jpg" data-title="IMAGE TITLE 3" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/3.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/service/4.jpg" data-title="IMAGE TITLE 4" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/4.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/service/5.jpg" data-title="IMAGE TITLE 5" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/5.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/service/6.jpg" data-title="IMAGE TITLE 6" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/service/6.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item grid-item--width2 entry">
									<a href="assets/img/bg/bg3.jpg" data-title="IMAGE TITLE 7" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/bg/bg3.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/bg/counterbg2.jpg" data-title="IMAGE TITLE 8" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/bg/counterbg2.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/blog/2.jpg" data-title="IMAGE TITLE 9" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/blog/2.jpg" alt=""></a>
								</div>
								<!-- end single item -->
								<div class="grid-item entry">
									<a href="assets/img/blog/3.jpg" data-title="IMAGE TITLE 10" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="assets/img/blog/3.jpg" alt=""></a>
								</div>
								<!-- end single item -->
							</div>
						</div>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END GALLERY SECTION -->
	
	<!-- START PROMO 2 SECTION -->
    <section id="promot" class="section-padding bg-gray">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>Request <span>free quote</span></h3>
							</div>
						</div>
					</div>
					<!-- end section title -->
					<div class="home-p-form-wrapper">
						<div class="home-p-form">
							<form action="#">
								<div class="row">
									<div class="form-group col-lg-6 mb-3">
										<input name="aname" class="form-control" id="afirst-name" placeholder="Your Name*" required="required" type="text">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="aemail" class="form-control" id="aemail" placeholder="Email id*" required="required" type="email">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="aphone" class="form-control" id="aphone" placeholder="Phone Number*" required="required" type="text">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="asubject" class="form-control" id="asubject" placeholder="Subject" required="required" type="text">
									</div>									
									<div class="form-group col-lg-12 mb-3">
										<textarea rows="6" name="rmessage" class="form-control" id="adescription" placeholder="Your Message Here..." required="required"></textarea>
									</div>
									<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0">
										<a href="#" title="Click here to submit your message!" class="btn-style btn-filled btn-filled-2">Send Message <i class="fa fa-paper-plane"></i></a>
									</div>
									<div class="form-group col-lg-7">
										<p><strong>Note:</strong> We promise that we don't do spam & your mail id is confidential. </p>
									</div>
								</div>
							</form>								
						</div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>Jobs <span>& Career</span></h3>
							</div>
						</div>
					</div>
					<!-- end section title -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. <br> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. <br> Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque posuere nunc justo tempus leo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					<a href="#" class="mt-4 btn-style btn-border btn-border-2">Read More</a>
				</div>
				<!-- end col -->				
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PROMO 2 SECTION -->
	
	<!-- START TEAM SECTION -->
    <section id="team" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-8 mx-auto text-center">
					<div class="section-title">
						<h5>our masters</h5>
						<h3>CryptCoin <span>Expert</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
			</div>
			<!-- end section title -->	 
			<div class="row text-center">
				<div class="team-slider owl-carousel owl-theme">
					<div class="single-team-wrapper">
						<div class="single-team">
							<div class="single-team-img">
								<img class="img-fluid" src="assets/img/team/1.png" alt="">
								<div class="single-team-social">
									<ul>
									   <li><a class="sicon1" href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									   <li><a class="sicon2" href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									   <li><a class="sicon3" href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="single-team-meta">
								<h4>Jone Doe</h4>
								<span>Hash Theme, CEO</span>
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
					<!-- end col -->
					<div class="single-team-wrapper">
						<div class="single-team">
							<div class="single-team-img">
								<img class="img-fluid" src="assets/img/team/2.png" alt="">
								<div class="single-team-social">
									<ul>
									   <li><a class="sicon1" href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									   <li><a class="sicon2" href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									   <li><a class="sicon3" href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="single-team-meta">
								<h4>Mark Henry</h4>
								<span>Hash Theme, CEO</span>
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
					<!-- end col -->
					<div class="single-team-wrapper">
						<div class="single-team">
							<div class="single-team-img">
								<img class="img-fluid" src="assets/img/team/3.png" alt="">
								<div class="single-team-social">
									<ul>
									   <li><a class="sicon1" href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									   <li><a class="sicon2" href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									   <li><a class="sicon3" href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="single-team-meta">
								<h4>Bishen Ketty</h4>
								<span>Hash Theme, CEO</span>
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
					<!-- end col -->
					<div class="single-team-wrapper">
						<div class="single-team">
							<div class="single-team-img">
								<img class="img-fluid" src="assets/img/team/4.png" alt="">
								<div class="single-team-social">
									<ul>
									   <li><a class="sicon1" href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									   <li><a class="sicon2" href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									   <li><a class="sicon3" href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="single-team-meta">
								<h4>Kwasan Rowy</h4>
								<span>Hash Theme, CEO</span>
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
					<!-- end col -->
					<div class="single-team-wrapper">
						<div class="single-team">
							<div class="single-team-img">
								<img class="img-fluid" src="assets/img/team/1.png" alt="">
								<div class="single-team-social">
									<ul>
									   <li><a class="sicon1" href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									   <li><a class="sicon2" href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									   <li><a class="sicon3" href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="single-team-meta">
								<h4>Jone Doe</h4>
								<span>Hash Theme, CEO</span>
								<p>Lorem ipsum dolor sit amet consectetur ullamco adipiscing elit, sed do eiusmod tempor exercitat incididunt ut labore.</p>
							</div>	
						</div>							
					</div>
					<!-- end col -->	
				</div>
			</div>
			<!-- end row -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END TEAM SECTION -->
	
	<!-- START CALLTOACTION SECTION -->
	<section id="calltoaction" class="calltoaction-padding section-padding bg-theme">
		<div class="auto-container">
			<div class="row">
				<div class="col-12 mx-auto text-center">
					<div class="calltoaction-two-wrap mb-4">
						<h4 class="text-uppercase">Need More Service?</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
					</div>
					<a href="#" class="wow fadeInDown btn-style btn-border btn-border-3">Contact Us <i class="icofont icofont-hand-right"></i></a>
				</div>
				<!-- end col -->
				<!-- end col -->
			</div>
			<!-- end row-->
		</div>
	</section>
    <!-- END CALLTOACTION SECTION -->
	
    <!-- START FOOTER -->
    <footer class="footer-2">
        <!--Footer top -->
        <div class="footer-top">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-0 footer-widget">
                        <div class="footer-section-title col-12 no-padding">
                            <h3>Stay With Us</h3>
                        </div>
                        <!-- END SECTION TITLE -->
						<div class="col-12 footer-widget-inner">
							<div class="single-fcontact mb-2">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-pin"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Compnay Name:</h6>
									<p>10004, Battery Park, New York, USA </p>
								</div>
							</div>
							<div class="single-fcontact mb-2">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-envelope-open"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Email Us:</h6>
									<p>info@yoursite.com</p>
								</div>
							</div>
							<div class="single-fcontact mb-2">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-mobile-phone"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Phone Number:</h6>
									<p>123-456-0975</p>
								</div>
							</div>
							<div class="single-fcontact">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-eye-alt"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Door Open:</h6>
									<p>Mon - Sun : 09:00 - 18:00</p>
								</div>
							</div>
						</div>
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-5 footer-widget">
                        <div class="footer-section-title col-12 no-padding">
                            <h3>latest Post</h3>
                        </div>
                        <!-- END SECTION TITLE -->
						<div class="col-12 footer-widget-inner recentPost">
							<div class="singleRecpost">
								<img src="assets/img/blog/1.jpg" alt="" class="img-fluid">
								<h6 class="recTitle">
									<a href="#">Lorem ipsum dolor sit amet, consectetuer.</a>
								</h6>
								<p class="posted-on">3 DEC 2018</p>
							</div>
							<div class="singleRecpost">
								<img src="assets/img/blog/2.jpg" alt="" class="img-fluid">
								<h6 class="recTitle">
									<a href="#">Lorem ipsum dolor sit amet, consectetuer.</a>
								</h6>
								<p class="posted-on">4 DEC 2018</p>
							</div>
							<div class="singleRecpost">
								<img src="assets/img/blog/3.jpg" alt="" class="img-fluid">
								<h6 class="recTitle">
									<a href="#">Lorem ipsum dolor sit amet, consectetuer.</a>
								</h6>
								<p class="posted-on">5 DEC 2018</p>
							</div>
						</div>
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-5 footer-widget">
                        <div class="footer-section-title col-12 no-padding">
                            <h3>Malling List</h3>
                        </div>
                        <!-- END SECTION TITLE -->
                        <div class="col-12 about mb-2">
                            <p>Lorem ipsum dolor ametconsde etur adipiscing elit, sed dositlor eiusmod tempor incididunt utlr labo reetdolor emagna aliqua.</p>
                        </div>
                        <div class="col-12 footer-news">
							<form action="#">
                                <div class="row">
									<div class="form-group col-lg-9 col-md-9 col-8 pr-lg-0 pr-md-0 pr-2">
										<input name="semail" class="form-control" placeholder="Email Address" type="email">
									</div>
									<button type="submit" class="col-lg-3 col-md-2 col-2 p-0 fnews-btn"><i class="fa fa-paper-plane"></i></button>
								</div>
							 </form>
                        </div>
                        <div class="col-12 about mt-3">
                            <p>We promise that we don't do spam.</p>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-5 footer-widget">
                        <div class="footer-section-title col-12 no-padding">
                            <h3>Flickr Stream</h3>
                        </div>
                        <!-- END SECTION TITLE -->
                        <div class="col-12 footer-widget-inner recent-photo">
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/1.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/2.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/3.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/4.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/5.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/6.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/1.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/2.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/4.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/3.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/5.jpg" alt="">
							</a>
							<a href="#">
							    <img class="img-fluid" src="assets/img/service/6.jpg" alt="">
							</a>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
            </div>
        </div>
		
        <!--Footer Bottom -->
        <div class="copyright">
            <div class="auto-container">
                <div class="row">
                    <div class="col-12 copyright-text text-center">
                        <p><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p>
                    </div>
                </div>
            </div>
        </div>
		
    </footer>
    <!-- END FOOTER -->
	
	<!-- Latest jQuery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- meanmenu min js  -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- Sticky JS -->
    <script src="assets/js/jquery.sticky.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	
    <!-- jquery appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- countTo js -->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!-- venobox js -->
    <script src="assets/venobox/js/venobox.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <!-- scroll to top js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
    <script>
            jQuery(document).ready(function() {			
            	jQuery('.tp-banner').show().revolution(
            	{
            		dottedOverlay:"none",
            		delay:16000,
            		startwidth:1170,
            		startheight:550,
            		hideThumbs:200,
            		
            		thumbWidth:100,
            		thumbHeight:50,
            		thumbAmount:5,
            		
            		navigationType:"bullet",
            		navigationArrows:"solo",
            		navigationStyle:"preview3",
            		
            		touchenabled:"on",
            		onHoverStop:"on",
            		
            		swipe_velocity: 0.7,
            		swipe_min_touches: 1,
            		swipe_max_touches: 1,
            		drag_block_vertical: false,
            								
            		parallax:"mouse",
            		parallaxBgFreeze:"on",
            		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
            								
            		keyboardNavigation:"off",
            		
            		navigationHAlign:"center",
            		navigationVAlign:"bottom",
            		navigationHOffset:0,
            		navigationVOffset:20,
            
            		soloArrowLeftHalign:"left",
            		soloArrowLeftValign:"center",
            		soloArrowLeftHOffset:20,
            		soloArrowLeftVOffset:0,
            
            		soloArrowRightHalign:"right",
            		soloArrowRightValign:"center",
            		soloArrowRightHOffset:20,
            		soloArrowRightVOffset:0,
            				
            		shadow:0,
            		fullWidth:"on",
            		fullScreen:"off",
            
            		spinner:"spinner4",
            		
            		stopLoop:"off",
            		stopAfterLoops:-1,
            		stopAtSlide:-1,
            
            		shuffle:"off",
            		
            		autoHeight:"off",						
            		forceFullWidth:"off",						
            									
            								
            		hideThumbsOnMobile:"off",
            		hideNavDelayOnMobile:1500,						
            		hideBulletsOnMobile:"off",
            		hideArrowsOnMobile:"off",
            		hideThumbsUnderResolution:0,
            		
            		hideSliderAtLimit:0,
            		hideCaptionAtLimit:0,
            		hideAllCaptionAtLilmit:0,
            		startWithSlide:0,
            		fullScreenOffsetContainer: ""	
            	});				
            });	//ready
            
       </script>
</body>


<!-- index-2.html 02:57  -->
</html>