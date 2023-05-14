<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>DotCreative – Web Design Agency HTML Template</title>
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

			<!-- template sections -->

			<!--topline section visible only on small screens|-->
			<div class="header_absolute s-pb-30">
				<header class="page_header ds">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="./" class="logo text-center">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-lg-6 col-1 text-sm-center">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">


										<li class="active">
											<a href="index.html">Home</a>
											<ul>
												<li>
													<a href="index.html">Home 1</a>
												</li>
												<li>
													<a href="index-2.html">Home 2</a>
												</li>
												<li>
													<a href="index_static.html">Static Intro</a>
												</li>
												<li>
													<a href="index_singlepage.html">Single Page</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="about.html">About</a>
										</li>
										<li>
											<a href="services1.html">Services</a>
											<ul>
												<li>
													<a href="services1.html">Services 1</a>
												</li>
												<li>
													<a href="services2.html">Services 2</a>
												</li>
												<li>
													<a href="services3.html">Services 3</a>
												</li>
												<li>
													<a href="services4.html">Services 4</a>
												</li>
												<li>
													<a href="services5.html">Services 5</a>
												</li>
												<li>
													<a href="service-single1.html">Single Service</a>
													<ul>
														<li>
															<a href="service-single1.html">Single Service 1</a>
														</li>
														<li>
															<a href="service-single2.html">Single Service 2</a>
														</li>
														<li>
															<a href="service-single3.html">Single Service 3</a>
														</li>
														<li>
															<a href="service-single4.html">Single Service 4</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<!-- blog -->

										<!-- gallery -->
										<li>
											<a href="gallery-regular.html">Works</a>
											<ul>
												<!-- Gallery image only -->
												<li>
													<a href="gallery-regular.html">Gallery Regular</a>
													<ul>
														<li>
															<a href="gallery-regular-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-regular.html">3 columns</a>
														</li>
														<li>
															<a href="gallery-regular-4-cols-fullwidth.html">4 columns fullwidth</a>
														</li>

													</ul>
												</li>
												<!-- eof Gallery image only -->

												<!-- Gallery with title -->
												<li>
													<a href="gallery-title.html">Gallery Title</a>
													<ul>
														<li>
															<a href="gallery-title-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-title.html">3 column</a>
														</li>
														<li>
															<a href="gallery-title-4-cols-fullwidth.html">4 columns fullwidth</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with title -->

												<!-- Gallery with excerpt -->
												<li>
													<a href="gallery-excerpt.html">Gallery Extended</a>
													<ul>
														<li>
															<a href="gallery-excerpt-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-excerpt.html">3 column</a>
														</li>
														<li>
															<a href="gallery-excerpt-4-cols-fullwidth.html">4 columns fullwdith</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with excerpt -->

												<li>
													<a href="gallery-tiled.html">Tiled Gallery</a>
												</li>

												<li>
													<a href="gallery-list.html">Gallery List</a>
												</li>

												<!-- Gallery item -->
												<li>
													<a href="gallery-item.html">Gallery Item</a>
													<ul>
														<li>
															<a href="gallery-item.html">Style 1</a>
														</li>
														<li>
															<a href="gallery-item2.html">Style 2</a>
														</li>
														<li>
															<a href="gallery-item3.html">Style 3</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery item -->
											</ul>
										</li>
										<!-- eof Gallery -->


										<li>
											<a href="about.html">Pages</a>
											<ul>
												<li>
													<a href="process.html">Process</a>
												</li>
												<li>
													<a href="clients.html">Clients</a>
												</li>
												<li>
													<a href="testimonials.html">Testimonials</a>
												</li>
												<li>
													<a href="pricing.html">Pricing</a>
												</li>

												<!-- shop -->
												<li>
													<a href="shop-right.html">Shop</a>
													<ul>
														<li>
															<a href="shop-account-dashboard.html">Account</a>
															<ul>

																<li>
																	<a href="shop-account-details.html">Account details</a>
																</li>
																<li>
																	<a href="shop-account-address-edit.html">Edit Address</a>
																</li>
																<li>
																	<a href="shop-account-orders.html">Orders</a>
																</li>
																<li>
																	<a href="shop-account-order-single.html">Single Order</a>
																</li>
																<li>
																	<a href="shop-account-downloads.html">Downloads</a>
																</li>
																<li>
																	<a href="shop-account-password-reset.html">Password Reset</a>
																</li>
																<li>
																	<a href="shop-account-login.html">Login/Logout</a>
																</li>

															</ul>
														</li>
														<li>
															<a href="shop-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="shop-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="shop-product-right.html">Product Right Sidebar</a>
														</li>
														<li>
															<a href="shop-product-left.html">Product Left Sidebar</a>
														</li>
														<li>
															<a href="shop-cart.html">Cart</a>
														</li>
														<li>
															<a href="shop-checkout.html">Checkout</a>
														</li>
														<li>
															<a href="shop-order-received.html">Order Received</a>
														</li>

													</ul>
												</li>
												<!-- eof shop -->

												<!-- features -->
												<li>
													<a href="shortcodes_iconbox.html">Shortcodes</a>
													<ul>
														<li>
															<a href="shortcodes_typography.html">Typography</a>
														</li>
														<li>
															<a href="shortcodes_buttons.html">Buttons</a>
														</li>
														<li>
															<a href="shortcodes_iconbox.html">Icon Boxes</a>
														</li>
														<li>
															<a href="shortcodes_progress.html">Progress</a>
														</li>
														<li>
															<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
														</li>
														<li>
															<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
														</li>
														<li>
															<a href="shortcodes_animation.html">Animation</a>
														</li>
														<li>
															<a href="shortcodes_icons.html">Template Icons</a>
														</li>
														<li>
															<a href="shortcodes_socialicons.html">Social Icons</a>
														</li>
													</ul>
												</li>
												<!-- eof shortcodes -->

												<li>
													<a href="shortcodes_widgets_default.html">Widgets</a>
													<ul>
														<li>
															<a href="shortcodes_widgets_default.html">Default Widgets</a>
														</li>
														<li>
															<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
														</li>
													</ul>

												</li>


												<!-- events -->
												<li>
													<a href="events-left.html">Events</a>
													<ul>
														<li>
															<a href="events-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="events-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="events-full.html">Full Width</a>
														</li>
														<li>
															<a href="event-single-left.html">Single Event</a>
															<ul>
																<li>
																	<a href="event-single-left.html">Left Sidebar</a>
																</li>
																<li>
																	<a href="event-single-right.html">Right Sidebar</a>
																</li>
																<li>
																	<a href="event-single-full.html">Full Width</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<!-- eof events -->

												<li>
													<a href="team-1.html">Team</a>
													<ul>
														<li>
															<a href="team-1.html">Team 1</a>
														</li>
														<li>
															<a href="team-2.html">Team 2</a>
														</li>
														<li>
															<a href="team-single-1.html">Single Team</a>
															<ul>
																<li>
																	<a href="team-single-1.html">Team Member 1</a>
																</li>
																<li>
																	<a href="team-single-2.html">Team Member 2</a>
																</li>
																<li>
																	<a href="team-single-3.html">Team Member 3</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<li>
													<a href="comingsoon.html">Comingsoon</a>
												</li>
												<li>
													<a href="maintenance.html">Maintenance</a>
												</li>
												<li>
													<a href="faq-1.html">FAQ</a>
													<ul>
														<li>
															<a href="faq-1.html">FAQ 1</a>
														</li>
														<li>
															<a href="faq-2.html">FAQ 2</a>
														</li>
														<li>
															<a href="faq-3.html">FAQ 3</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>

											</ul>
										</li>
										<!-- eof pages -->

										<li>
											<a href="blog-1.html">Blog</a>
											<ul>

												<li>
													<a href="blog-1.html">Blog 1</a>
												</li>
												<li>
													<a href="blog-2.html">Blog 2</a>
												</li>
												<li>
													<a href="blog-3.html">Blog 3</a>
												</li>
												<li>
													<a href="blog-4.html">Blog 4</a>
												</li>
												<li>
													<a href="blog-list.html">Blog List</a>
												</li>
												<li>
													<a href="blog-masonry.html">Blog Masonry</a>
												</li>

												<li>
													<a href="post1.html">Post</a>
													<ul>
														<li>
															<a href="post1.html">Post 1</a>
														</li>
														<li>
															<a href="post2.html">Post 2</a>
														</li>
														<li>
															<a href="post3.html">Post 3</a>
														</li>
														<li>
															<a href="post4.html">Post 4</a>
														</li>
														<li>
															<a href="post5.html">Post 5</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="blog-single-video-right.html">Video Post</a>
													<ul>
														<li>
															<a href="blog-single-video-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-full.html">Full Width</a>
														</li>
													</ul>
												</li>

											</ul>
										</li>
										<!-- eof blog -->

										<li>
											<a href="contact.html">Contacts</a>
											<ul>
												<li>
													<a href="contact.html">Contact 1</a>
												</li>
												<li>
													<a href="contact2.html">Contact 2</a>
												</li>
												<li>
													<a href="contact3.html">Contact 3</a>
												</li>
												<li>
													<a href="contact4.html">Contact 4</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->

										<li>
											<a href="#">Features</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<a href="#">Headers</a>
														<ul>
															<li>
																<a href="header1.html">Header Type 1</a>
															</li>
															<li>
																<a href="header2.html">Header Type 2</a>
															</li>
															<li>
																<a href="header3.html">Header Type 3</a>
															</li>
															<li>
																<a href="header4.html">Header Type 4</a>
															</li>
															<li>
																<a href="header5.html">Header Type 5</a>
															</li>
															<li>
																<a href="header6.html">Header Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">Side Menus</a>
														<ul>
															<li>
																<a href="header-side.html">Push Left</a>
															</li>
															<li>
																<a href="header-side-right.html">Push Right</a>
															</li>
															<li>
																<a href="header-side-slide.html">Slide Left</a>
															</li>
															<li>
																<a href="header-side-slide-right.html">Slide Right</a>
															</li>
															<li>
																<a href="header-side-sticked.html">Sticked Left</a>
															</li>
															<li>
																<a href="header-side-sticked-right.html">Sticked Right</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="title1.html">Title Sections</a>
														<ul>
															<li>
																<a href="title1.html">Title section 1</a>
															</li>
															<li>
																<a href="title2.html">Title section 2</a>
															</li>
															<li>
																<a href="title3.html">Title section 3</a>
															</li>
															<li>
																<a href="title4.html">Title section 4</a>
															</li>
															<li>
																<a href="title5.html">Title section 5</a>
															</li>
															<li>
																<a href="title6.html">Title section 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="footer1.html#footer">Footers</a>
														<ul>
															<li>
																<a href="footer1.html#footer">Footer Type 1</a>
															</li>
															<li>
																<a href="footer2.html#footer">Footer Type 2</a>
															</li>
															<li>
																<a href="footer3.html#footer">Footer Type 3</a>
															</li>
															<li>
																<a href="footer4.html#footer">Footer Type 4</a>
															</li>
															<li>
																<a href="footer5.html#footer">Footer Type 5</a>
															</li>
															<li>
																<a href="footer6.html#footer">Footer Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="copyright1.html#copyright">Copyright</a>

														<ul>
															<li>
																<a href="copyright1.html#copyright">Copyright 1</a>
															</li>
															<li>
																<a href="copyright2.html#copyright">Copyright 2</a>
															</li>
															<li>
																<a href="copyright3.html#copyright">Copyright 3</a>
															</li>
															<li>
																<a href="copyright4.html#copyright">Copyright 4</a>
															</li>
															<li>
																<a href="copyright5.html#copyright">Copyright 5</a>
															</li>
															<li>
																<a href="copyright6.html#copyright">Copyright 6</a>
															</li>
														</ul>
													</li>

												</ul>
											</div>
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->

										<!-- contacts -->

									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
								<div class="header_phone">
									<h6>
										<span>1-800</span>-123-4567
									</h6>
								</div>
							</div>
							<div class="search-box">
								<input type="text" name="search" placeholder="search keyword" class="search-text">
								<a href="#" class="search-btn">
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu">
						<span></span>
					</span>
				</header>
			</div>
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
													<p class="text-uppercase intro_after_featured_word">welcome to</p>
												</div>

												<div class="intro_layer" data-animation="slideRight">
													<h2 class="text-uppercase intro_featured_word">
														it agency
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="intro_before_featured_word">
														<span class="color-main2">Web Design</span>,
														<span class="color-main3">Marketing</span> &
														<span class="color-main4">Branding</span>
													</h3>
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
									We are the one of the most effective Web Design Companies
								</h5>
								<p>
									Getting online is easy. Succeeding online is a different story. You’ll need more than just a beautiful website to stand out these days.
									<strong>Online marketing solutions.</strong> Conversion-based web design coupled with a lead generating marketing plan, your online success is inevitable.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div>
									<div class="divider-40"></div>
									<button type="button" class="btn btn-outline-maincolor">Get Started</button>
									<div class="divider-40"></div>
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
										<a href="service-single1.html">Marketing</a>
									</h6>

									<p>
										We use strategic marketing tactics that have been proven to work.
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
										<a href="service-single1.html">Development</a>
									</h6>

									<p>
										Custom programming for most complex functions you can think.
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
										<a href="service-single1.html">Web Design</a>
									</h6>

									<p>
										Pork chop pork belly hamburger prosciutto, fatback andouille flank.
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
										<a href="service-single1.html">SEO Optimization</a>
									</h6>

									<p>
										Optimizing our web designs to rank on the first page of google is our specialty.
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
										We build your online store using a flexible, modular platform that allows
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
										A solid brand strategy, logo and guidelines help you to get You recognized.
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
									<span class="color-main">01</span>Strategy</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_1.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We define your competition and target audience. Discover what is working in your online industry, then design your website accordingly.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part">
								<h2 class="step-title color1">
									<span class="color-main2">02</span>Design</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right part3">
								<h2 class="step-title">
									<span class="color-main3">03</span>Develop</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_3.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We turn your ideas into a reality. &our website is placed on a "development server" where you get to watch the whole process, live.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part part4">
								<h2 class="step-title color1">
									<span class="color-main4">04</span>Support</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center last">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
							</div>
						</div>
					</div>
					<div class="divider-10 d-block d-sm-none"></div>
					<div class="img-wrap text-center">
						<img src="img/vertical_line2.png" alt="">
					</div>
					<div class=" white-button text-center">
						<a class="btn white-btn" href="#">Get Started</a>
					</div>
					<div class="divider-30 d-none d-xl-block"></div>
				</div>
			</section>

			<section class="s-pt-75 s-pt-xl-50 gallery-carousel main-gallery container-px-0" id="gallery">
				<div class="container-fluid">
					<div class="img-wrap text-center">
						<img src="img/vertical_line.png" alt="">
						<div class="divider-40 d-block d-sm-none"></div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-5">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".web-design">Web Design</a>
										<a href="#" data-filter=".logo-design">Logo Design</a>
										<a href="#" data-filter=".advertisement">Advertisement</a>
										<a href="#" data-filter=".branding">Branding</a>
										<a href="#" data-filter=".design">Design</a>
										<a href="#" data-filter=".photo">Photo</a>
									</div>
								</div>
							</div>
							<div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">
								<div class="vertical-item item-gallery content-absolute text-center ds web-design">
									<div class="item-media">
										<img src="images/gallery/gallery-1.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">web-design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds logo-design">
									<div class="item-media">
										<img src="images/gallery/gallery-2.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">logo-design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds advertisement">
									<div class="item-media">
										<img src="images/gallery/gallery-3.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">advertisement</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds branding">
									<div class="item-media">
										<img src="images/gallery/gallery-4.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">branding</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds design">
									<div class="item-media">
										<img src="images/gallery/gallery-5.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds photo">
									<div class="item-media">
										<img src="images/gallery/gallery-6.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">photo</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
							</div>
							<!-- .owl-carousel-->
						</div>
					</div>
				</div>
			</section>

			<section class="page_slider team_slider" id="team">
				<div class="container-fluid">
					<div class="row">
						<div class="shortcode-team-slider main-team">
							<h3 class="slider-title">Team</h3>
							<div class="flexslider team-slider" data-nav="false" data-dots="true">
								<ul class="slides">
									<li class="ls">
										<img src="images/team/team_slide_01.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_02.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_03.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_04.jpg" alt="">
									</li>
								</ul>
							</div>
							<!-- eof flexslider -->
							<div class="flexslider-controls">
								<ul class="flex-control-nav-1">
									<li class="menu_item flex-active">
										Gregory F. Parrino
										<span class="position">CEO</span>
										<span class="team-social-icons">
											<span class="social-icons">
												<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
												<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
												<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
											</span>
										</span>
									</li>
									<li class="menu_item">
										Letha L. Young
										<span class="position">Designer</span>
										<span class="team-social-icons">
											<span class="social-icons">
												<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
												<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
												<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
											</span>
										</span>
									</li>
									<li class="menu_item">
										Harold D. Cote
										<span class="position">Developer</span>
										<span class="team-social-icons">
											<span class="social-icons">
												<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
												<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
												<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
											</span>
										</span>
									</li>
									<li class="menu_item">
										Oren R. Odom
										<span class="position">Marketer</span>
										<span class="team-social-icons">
											<span class="social-icons">
												<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
												<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
												<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>
											</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms book-item s-pb-30 s-pb-lg-25">
				<div class="corner corner-light"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="text-block text-center">
								<div class="btn-book-section overflow-visible">
									<a href="#" class="btn btn-maincolor">Get Started</a>
								</div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
									<div class="divider-35"></div>
								</div>
								<h5>
									B2B Marketing & Web Design
									<br> Resources
								</h5>
								<p>
									B2B client acquisition is not the same as B2C– a B2B website, brand messaging and content marketing play a much different role. We understand the B2B marketing and sales funnel and the tactics that generate and nurture ideal client leads.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
							</div>
						</div>
						<div class="divider-40"></div>
						<div class="row c-gutter-30 c-mb-30 c-mb-lg-0 text-center book">
							<div class="col-12 col-lg-4">
								<div class="stage book-1 ls">
									<img src="images/book-1.png" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">Annual Report
													<br>2017-2018</a>
											</h6>
										</header>
										<p>
											At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
										</p>
										<p class="small-text link-a">
											<a href="#">Buy It Now!</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="stage book-2 ds">
									<img src="images/book-2.png" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">Tools of Trading: Modern Marketing</a>
											</h6>
										</header>
										<p>
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam numy eirmod.
										</p>
										<p class="small-text link-a">
											<a href="#">Buy It Now!</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="stage book-3 ls">
									<img src="images/book-3.png" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">Business Magazine: Design</a>
											</h6>
										</header>
										<p>
											Et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
										</p>
										<p class="small-text link-a">
											<a href="#">Buy It Now!</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="divider-30"></div>
						<div class="text-center img-wrap col-md-12">
							<div>
								<img src="img/vertical_line.png" alt="">
							</div>
							<div class="divider-40"></div>
							<a href="#" class="btn btn-outline-maincolor">Get Started</a>
							<div class="divider-40"></div>
							<div>
								<img src="img/vertical_line.png" alt="">
							</div>
						</div>
					</div>
					<div class="divider-10"></div>
				</div>
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
						<div class="divider-20"></div>
						<div class="text-center img-wrap line col-md-12">
							<img src="img/vertical_line2.png" alt="">
						</div>
						<div class="divider-40 d-none d-md-block"></div>
						<div class="col-md-12">
							<div class="owl-carousel" data-autoplay="false" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true" id="quote">
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_02.jpg" alt="">
									</div>
									<p class="small-text author-job">
										Eye Insurance
									</p>
									<h5>
										<a href="#">George M. Baty</a>
									</h5>
									<p>
										<em class="big">
											I needed more leads for my services. Pay-per-click, banners of maybe even broschures. They made an analysis of my existing site. It occurred that my webdite is banned with Google, and I never knew about that!
										</em>
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>
									<p class="small-text author-job">
										Moving co
									</p>
									<h5>
										<a href="#">Jeffrey P. McAllister</a>
									</h5>
									<p>
										<em class="big">
											I highly recommend this company for all and any of your design needs. I am very happy with the new redesigned and restructured website they built for my moving company!
										</em>
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_03.jpg" alt="">
									</div>
									<p class="small-text author-job">
										Paradox Inc
									</p>
									<h5>
										<a href="#">Josephine B. Anderson</a>
									</h5>
									<p>
										<em class="big">
											This guys are awesome! It is hard to find a web design company who can actually listen and understand what you need. I’m 100% satisfied with this guys. My website is exactly what I needed and even more...
										</em>
									</p>

								</div>
							</div>
							<!-- .testimonials-slider -->
						</div>
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
									Lets Get Started
									<br> Your Project
								</h1>
								<p>
									We’ll help to achieve your goals and to grow business
								</p>
								<div class="divider-30"></div>
							</div>
							<img src="img/vertical_line.png" alt="">
							<div>
								<div class="divider-40"></div>
								<a href="#" class="btn btn-outline-maincolor">Let’s Talk!</a>
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
								Call Us
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
								Write Us
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
