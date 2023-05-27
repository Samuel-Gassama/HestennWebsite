<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Hestenn</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" type="image/x-icon" href="favicon.ico">

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

	<style>
		.blur-image {
		  filter: blur(5px) grayscale(50%); /* Adjust the blur amount as desired */
		}
	  </style>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

                {{--Section HEADER --}}
			@include('partials.header') {{-- Include Header --}}

                {{--Section HEADER --}}
			{{-- <span class="toggle_menu_side header-slide">
				<span></span>
			</span> --}}

			<section class="page_slider main_slider">
				<div class="flexslider" data-nav="true" data-dots="false">
					<ul class="slides">
						<li class="ds text-center slide1">
								<img class="blur-image" src="img/landing.jpg"/>
							</span>
							<div id="Accueil" class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<p class="text-uppercase intro_after_featured_word">Hestenn</p>
												</div>

												<div class="intro_layer" data-animation="slideRight">
													<h4 class="intro_featured_word">
														Donnez vie à votre projet web
													</h4>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="intro_before_featured_word">
														<span class="color" style="color: #3190ee">Développement Web</span>
{{--														<span class="color-main3">Marketing</span> &--}}
{{--														<span class="color-main4">SEO</span>--}}
													</h3>
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
					<a href="#Service" class="mouse-button animated floating"></a>
				</div>
			</section>

			<section class="s-pt-30 s-pt-lg-50 ls about">
				<div id="Apropos" class="divider-60 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="main-content text-center">
								<h5>
									"Nous aimons ce que nous faisons et nous aimons aider les autres à réussir dans ce qu'ils aiment faire"
								</h5>
								<i class="rt-icon2-user"></i>
								<p>
									Maxence MAZEAU,
									<span class="link-a">
										<a href="#">CEO</a>
									</span>
								</p>
								<p>
									Samuel GASSAMA,
									<span class="link-a">
										<a href="#">CO-CEO</a>
									</span>
								</p>

								<div class="divider-10 d-none d-xl-block"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75 ls about-icon teaser-contact-icon">
				<div class="divider-10 d-none d-xl-block"></div>
				<div class="container">
					<div class="row c-mt-50 c-mt-lg-0">
						<div class="col-lg-4 text-center call-icon">						
							<h6>
								Qui sommes-nous
							</h6>
							<div class="icon-content">
								<p>
									Chez Hestenn, nous sommes une équipe passionnée de développement web composée de deux développeurs dévoués.
									Notre objectif est de créer des sites web uniques qui captent l'essence de nos clients et reflètent leur identité de manière authentique.
									Nous croyons fermement que chaque entreprise mérite une présence en ligne qui lui ressemble, et c'est pourquoi nous mettons tout en œuvre pour offrir des solutions personnalisées. 
									Avec notre expertise technique et notre sensibilité artistique, nous sommes là pour donner vie à votre vision et vous aider à établir une connexion significative avec votre public.
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center write-icon">
							<div class="divider-30 d-none d-xl-block"></div>							
							<div class="icon-content">
								<h6>
									Que faisons-nous
								</h6>
								<p>
									Notre principal métier est de créer des sites web sur mesure qui répondent aux besoins spécifiques de nos clients. 
									Nous nous engageons à concevoir des expériences en ligne exceptionnelles, en accordant une attention particulière aux détails et à l'ergonomie. 
									Notre approche centrée sur l'utilisateur nous permet de comprendre vos objectifs, votre marché cible et votre identité de marque afin de concevoir des sites web intuitifs et esthétiquement plaisants.
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center visit-icon">
							<div class="icon-content">
								<h6>
									Pourquoi nous le faisons
								</h6>
								<p>
									Nous croyons au pouvoir de la présence en ligne pour renforcer les liens entre les entreprises et leurs clients, stimuler la croissance et favoriser l'engagement. 
									En tant que développeurs web passionnés, nous combinons notre expertise technique et notre créativité pour créer des expériences digitales uniques. Notre engagement se traduit par une étroite collaboration avec nos clients, en écoutant attentivement leurs besoins et en offrant des solutions sur mesure qui renforcent leur image de marque et optimisent leur performance en ligne. 
									La réussite de nos clients est notre plus grande satisfaction.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="divider-10 d-block d-sm-none"></div>
			<section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
				<div class="divider-5 d-none d-xl-block"></div>
				<div class="container">
					<div id="Service" class="row">
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

			<section class="s-pt-30 s-pb-3 service-item2 ls animate" data-animation="fadeInUp">
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
									<span class="color-main4">04</span>Progrès Continu</h2>
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

			<section id="Projets" class="ls s-pt-50 s-pb-130 gallery-title">
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
																	<img src="img/chatallaitement.png" alt="Chat Allaitement">
																<div class="media-links">																
																</div>
															</div>
															<div class="item-content">
																<h6>
																	<a>Allaitement Québec</a>
																</h6>
																<div class="small-text link-a">
																	<a href="https://chat.allaitementquebec.org/" target="_blank">chat.allaitementquebec.org</a>
																</div>
					
															</div>
														</div>
					
													</div>
					
													<div class="col-xl-6 col-sm-6 advertisement branding">
														<div class="vertical-item text-center ls ms">
															<div class="item-media">
																		<img src="img/festivalcanin.png" alt="">
																<div class="media-links">	
																</div>
															</div>
															<div class="item-content">
																<h6>
																	<a>Festival canin de Dégelis</a>
																</h6>
																<div class="small-text link-a">
																	<a href="https://www.festivalcanin.com/" target="_blank">festivalcanin.com</a>
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


					<div class="divider-10"></div>
			</section>

			<section class="ls s-pt-20 s-pb-130 s-pb-lg-100 testimonials-page">
				<div class="container">
					<div id="Temoignage" class="text-block text-center">	
						<h5>
							Témoignages
						</h5>
					</div>		
					<div class="divider-75 d-none d-xl-block"></div>
					<div class="row c-mb-lg-30 c-gutter-60">
						<div class="col-md-6">
							<div class="text-center">
								<h6>
									Allaitement Québec
								</h6>
								<p>
								Le projet a été réalisé très professionnellement et ils ont été présents tout au long du processus. Ils avaient à cœur de nous tenir informés des avancements. Ils étaient très à l'écoute des besoins exprimés et prenaient le temps de bien expliquer les étapes en termes clairs pour une personne ne travaillant pas dans le domaine de l'informatique.
								</p>
							</div>
						</div>					
					</div>
					<div class="divider-70 d-none d-xl-block"></div>
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
					<a href="#Accueil" class="btn-maincolor">
						<i class="fa fa-angle-up"></i>
					</a>
				</div>
				<div class="corner corner-light"></div>
			</section>

			<section id="Contacte" class="s-pt-130 s-pt-md-50 ls text-section">
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
								<a href="#ContacteForm" class="btn btn-outline-maincolor">Parlons-en ! </a>
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

			<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
				<div class="divider-15 d-none d-xl-block"></div>
				<div class="container">

					<div class="divider-60 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-lg-12 ">
							<for class="contact-form" method="post" action="/">

								<div class="row c-gutter-20">

									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="name">Nom et prénom
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Nom et prénom">
										</div>
										<div class="form-group has-placeholder ">
											<label for="email">Adresse courriel
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="Adresse courriel">
										</div>
										<div class="form-group has-placeholder">
											<label for="subject">Sujet
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control text-left" placeholder="Sujet">
										</div>
									</div>
									<div class="col-12 col-md-6">

										<div class="form-group has-placeholder">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Votre message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Envoyer votre message</button>
										</div>
									</div>

								</div>
							</form>

						</div>
						<!--.col-* -->

						<div class="divider-80 d-none d-xl-block"></div>

					</div>
				</div>
			</section>


			<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

				<div class="container">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
								<h1>Hestenn</h1>
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
								<span class="copyright_year">2023</span> Tous droits réservés</p>
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
	<script src="js/navigation.js"></script>

</body>

</html>

