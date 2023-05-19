<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Hestenn Development</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">--}}

    <link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

                {{--Section HEADER --}}


			@include('partials.header') {{-- Include Header --}}

                {{--Section HEADER --}}



			<span class="toggle_menu_side header-slide">
				<span></span>
			</span>

			<section class="page_slider main_slider">
				<div class="flexslider" data-nav="true" data-dots="false">
					<ul class="slides">
						<li class="ds text-center slide1">
							<span class="flexslider-overlay"></span>
							<span class="embed-responsive embed-responsive-16by9">
								<iframe src="https://www.youtube.com/embed/UBufeh1yv2c?feature=oembed&;showinfo=0&;autoplay=1&;controls=0&;mute=1&;loop=1&;playlist=UBufeh1yv2c" allowfullscreen=""></iframe>
							</span>
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<p class="text-uppercase intro_after_featured_word">Bienvenue chez</p>
												</div>

												<div class="intro_layer" data-animation="slideRight">
													<h2 class="text-uppercase intro_featured_word">
														Hestenn
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="intro_before_featured_word">
														<span class="color" style="color: #3190ee">Développement Web</span>
{{--														<span class="color-main3">Marketing</span> &--}}
{{--														<span class="color-main4">SEO</span>--}}
													</h3>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="#about">Notre expertise</a>
												</div>
											</div>
											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li class="ds text-center slide2">
							<span class="flexslider-overlay"></span>
							<img src="images/slide_02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="text-lowercase intro_before_featured_word">
														Online
													</h3>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word">
														Marketing
													</h2>
												</div>
												<div class="intro_layer" data-animation="pullDown">
													<p class="text-uppercase intro_after_featured_word">Solutions</p>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="about.html">Get Started</a>
												</div>
											</div>
											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li class="ds text-center slide3">
							<img src="images/slide_03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h2 class="text-uppercase intro_featured_word light">
														Modern
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word bold">
														Marketing & design
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word">
														That works
													</h2>
												</div>

												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="about.html">Get Started</a>
													<a class="btn btn-outline-maincolor" href="#">our folio</a>
												</div>
											</div>
											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->
				<div class="flexslider-bottom d-none d-xl-block">
					<a href="#about" class="mouse-button animated floating"></a>
				</div>
			</section>
			<div class="divider-10 d-block d-sm-none"></div>
			<section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
				<div class="divider-5 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<div class="main-content text-center">
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
									<div class="divider-35"></div>
								</div>
								<h5>
									Un service personnalisé qui répond à vos besoins
								</h5>
								<p>
									Faites l'expérience d'un service sur mesure, conçu pour vous offrir des solutions web performantes et adaptées à vos besoins spécifiques.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>					
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div class="divider-10 d-none d-xl-block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-10 d-block d-sm-none"></div>
			</section>

			<section class="s-pt-30 s-pb-3 service-item2 ls animate" id="services" data-animation="fadeInUp">
				<div class="container">
					<div class="row c-mb-50 c-mb-md-60">
						<div class="d-none d-lg-block divider-20"></div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_1-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										Statistiques Google
									</h6>

									<p>
										 Profitez d'un suivi clair et personnalisé de vos performances en ligne.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_2-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Développement</a>
									</h6>

									<p>
										Bénéficiez d'un développement web professionnel et sur mesure pour créer un site adapté à vos besoins et objectifs.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_3-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Désigne</a>
									</h6>

									<p>
										Captez l'attention de vos visiteurs grâce à un design unique et attrayant qui reflète parfaitement votre identité.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_4-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Optimisation SEO</a>
									</h6>

									<p>
										Améliorer votre visibilité et attirer plus de visiteur.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_5-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Ecommerce</a>
									</h6>

									<p>
										Développer et multiplier vos ventes grâce à une boutique en ligne optimisée, conçue pour offrir une expérience d'achat irréprochable à vos clients.

									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_6-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Branding</a>
									</h6>

									<p>
										Créer et établissez une image en ligne reflètent vos valeurs et votre vision.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
					</div>
					<div class="pink-line text-center">
						<img src="img/pink_line_big.png" alt="">
					</div>
				</div>
			</section>

			<section class="s-pt-100 s-pt-lg-130 ds process-part skew_right s-parallax top_white_line_big overflow-visible" id="steps">
				<div class="container">
					<div class="divider-65"></div>
					
					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right">
								<h2 class="step-title">
									<span class="color-main">01</span>Collaboration Étroite</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_1.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">Travaillons main dans la main lors de chaque étape de votre projet. Vos idées et vos retours sont essentiels pour nous assurer que le résultat final répond à vos attentes.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part">
								<h2 class="step-title color1">
									<span class="color-main2">02</span>Livraison continue</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">Nous livrons votre projet en plusieurs étapes, vous permettant de visualiser les progrès, de donner votre avis et d'apporter des modifications si nécessaire.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right part3">
								<h2 class="step-title">
									<span class="color-main3">03</span>Flexibilité et Adaptabilité</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_3.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">Grâce à la méthode agile, nous sommes en mesure de nous adapter rapidement aux changements, garantissant ainsi que votre projet reste aligné avec vos objectifs même si ceux-ci évoluent.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part part4">
								<h2 class="step-title color1">
									<span class="color-main4">04</span>Perfectionnement Progressif</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center last">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text"> Au fil des itérations, nous affinons et améliorons votre projet pour assurer une qualité optimale et une correspondance parfaite avec vos besoins.</p>
							</div>
						</div>
					</div>
					<div class="divider-10 d-block d-sm-none"></div>
					<div class="img-wrap text-center">
						<img src="img/vertical_line2.png" alt="">
					</div>
				</div>
			</section>

			<section class="ls s-pt-50 s-pb-130 gallery-title">
							<div class="text-block text-center">	
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
									<div class="divider-35"></div>
								</div>
								<h5>
									Nos projets
								</h5>
									<div class="d-none d-lg-block divider-20"></div>
									<div class="container">
										<div class="row">
											<div class="col-lg-12">
												
					
												<div class="row isotope-wrapper masonry-layout c-gutter-10 c-mb-10" data-filters=".gallery-filters">
					
													<div class="col-xl-6 col-sm-6 web-design logo-design">
					
														<div class="vertical-item text-center ls ms">
															<div class="item-media">
																<img src="images/gallery/01.jpg" alt="">
																<div class="media-links">
																</div>
															</div>
															<div class="item-content">
																<h6>
																	<a href="/gallery-item3.html">Allaitement Québec</a>
																</h6>
																<div class="small-text link-a">
																	<a href="https://chat.allaitementquebec.org/">chat.allaitementquebec.org</a>
																</div>
					
															</div>
														</div>
					
													</div>
					
													<div class="col-xl-6 col-sm-6 advertisement branding">
														<div class="vertical-item text-center ls ms">
															<div class="item-media">
																<img src="images/gallery/02.jpg" alt="">
																<div class="media-links">
																</div>
															</div>
															<div class="item-content">
																<h6>
																	<a href="/gallery-item3.html">Festival canin de Dégelis</a>
																</h6>
																<div class="small-text link-a">
																	<a href="https://www.festivalcanin.com/">festivalcanin.com</a>
																</div>
					
															</div>
														</div>
													</div>
											</div>
												<!-- .isotope-wrapper-->			
											</div>
										</div>
									</div>
									<div class="d-none d-lg-block divider-75"></div>

						<div class="divider-30"></div>
						<div class="text-center img-wrap col-md-12">
							<div>
								<img src="img/vertical_line.png" alt="">
							</div>
							<div class="divider-40"></div>
							<h4>Témoignages</h4>
							<div class="divider-40"></div>
							<div>
								<img src="img/vertical_line.png" alt="">
							</div>


					<div class="divider-10"></div>
			</section>

			<section class="ls ms blog-post-carousel">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="owl-carousel" data-responsive-lg="4" data-responsive-md="3" data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-dots="false" data-loop="true" data-margin="4">
								<article class="box text-center">
									<div class="item-content">
										<p class="small-text">
											<a href="#">December 29, 2017</a>
										</p>
										<h6>
											<a href="#">Traffic control test by New York Cabs program</a>
										</h6>
										<div class="post-author">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
								<article class="box text-center">
									<div class="item-content ">
										<p class="small-text">
											<a href="#">December 26, 2017</a>
										</p>
										<h6>
											<a href="#">Live support, key of an endless satisfaction</a>
										</h6>
										<div class="post-author">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
								<article class="box text-center">
									<div class="item-content ">
										<p class="small-text">
											<a href="#">December 21, 2017</a>
										</p>
										<h6>
											<a href="#">Strong servers, customer friendly services</a>
										</h6>
										<div class="post-author">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
								<article class="box text-center">
									<div class="item-content ">
										<p class="small-text">
											<a href="#">December 15, 2017</a>
										</p>
										<h6>
											<a href="#">Weekly meeting in companies Think Room</a>
										</h6>
										<div class="post-author">
											<img src="images/small_author.png" alt="">
											<p>
												<a href="#">by Admin</a>
											</p>
										</div>
									</div>
									<!-- .item-content -->
								</article>
								<!-- #post-## -->
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-130 s-pb-15 s-pb-md-50 s-pt-xl-100 s-pb-lg-30 overflow-visible s-parallax testimonials-sliders main-testimonials ds" id="testimonials">
				<div class="corner ls ms"></div>
				<div class="container">
					<div class="row c-mt-30 c-mt-md-0">
						<div class="divider-40 d-none d-md-block"></div>
						
						<div class="divider-55 d-none d-md-block"></div>
						<div class="text-center img-wrap col-md-12">
							<img src="img/vertical_line2.png" alt="">
						</div>
						<div class="divider-10 d-none d-md-block"></div>
					</div>
				</div>
				<div class="testimonials-btn text-center">
					<a href="#quote" class="btn-maincolor">
						<i class="fa fa-angle-up"></i>
					</a>
				</div>
				<div class="corner corner-light"></div>
			</section>

			<section class="s-pt-130 s-pt-md-50 ls text-section">
				<div class="divider-30"></div>
				<div class="container">
					<div class="row">
						<div class="text-center col-md-12 justify-content-center text-block">
							<img src="img/vertical_line.png" alt="">
							<div class="divider-35"></div>
							<div class="content">
								<h1>
									Lancez-vous dans l'aventure
									<br> De votre projet
								</h1>
								<p>
									Nous vous aiderons à développer votre projet
								</p>
								<div class="divider-30"></div>
							</div>
							<img src="img/vertical_line.png" alt="">
							<div>
								<div class="divider-40"></div>
								<a href="#" class="btn btn-outline-maincolor">Parlons-en ! </a>
								<div class="divider-30"></div>
							</div>
							<div class="img-wrap overflow-visible">
								<img src="img/vertical_line.png" alt="">
								<div class="divider-5 d-none d-xl-block"></div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pb-100 s-pt-lg-30 s-pb-lg-75 ls ms teaser-contact-icon main-icon s-parallax" id="contact">
				<div class="corner corner-inverse"></div>
				<div class="text-center img-wrap col-md-12">
					<img src="img/dark_line_short.png" alt="">
				</div>
				<div class="container">
					<div class="divider-10 d-none d-xl-block"></div>
					<div class="row c-mb-50 c-mb-lg-0">
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1.png" alt="">
								</div>
							</div>
							<h6>
								Contactez-nous
							</h6>
							<p>
								<strong>New Accounts:</strong> 1-800-123-4567
								<br>
								<strong>Support:</strong> 1-800-123-4569
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Écrivez-nous
							</h6>
							<p>
								example@example.com
								<br> example@example.com
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon2.png" alt="">
								</div>
							</div>
							<h6>
								Visit Us
							</h6>
							<p>
								2231 Sycamore Lake Road
								<br> Green Bay, WI 54304
							</p>
						</div>
					</div>
					<div class="divider-30 d-none d-lg-block"></div>
					<div class="text-center img-wrap col-md-12 layout-2">
						<img src="img/dark_line_short.png" alt="">
					</div>
				</div>
				<div class="divider-10"></div>
			</section>


			<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

				<div class="container">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
								<img class="margin-negative" src="images//footer_logo.png" alt="">
								<div class="widget widget_social_buttons">
									<a href="http://www.facebook.com/#" class="fa fa-facebook color-icon" title="facebook"></a>
									<a href="http://www.twitter.com/#" class="fa fa-twitter color-icon" title="twitter"></a>
									<a href="http://www.plus.google.com/#" class="fa fa-google color-icon" title="google"></a>
									<a href="http://www.youtube.com/#" class="fa fa-youtube-play color-icon" title="youtube-play"></a>
									<a href="http://www.linkedin.com/#" class="fa fa-linkedin color-icon" title="linkedin"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright
								<span class="copyright_year">2018</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>
