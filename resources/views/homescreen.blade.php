<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Holidays move2travelhub</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{ !! url('css/color/color-default.css')!!}" />
		<link href="{!!url('css/plugin.css')!!}" rel="stylesheet" type="text/css" />
		<link href="{!!url('fonts/flaticon.css')!!}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
	 <div id="preloader"><div id="status"></div></div> 
		<!--=============Header Start===============-->
		<header class="main_header_area">
			<div class="header-content">
				<div class="container">
					<div class="links links-right pull-right">
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-phone-alt"></i> (000)999-898-888 </a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-envelope-open"></i>
									<span class="__cf_email__" data-cfemail="dab3b4bcb59a94bfaabba3bbaea8b3f4b9b5b7">support@move2travelhub.com</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="links links-right pull-right">
						<ul>
							<li>
								<ul class="social-links">
									<li>
										<a href="#">
											<i class="fab fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-linkedin" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="/login">
									<i class="fa fa-sign-in-alt"></i> Login </a>
							</li>
							<li>
								<a href="/register" >
									<i class="fa fa-sign-out-alt"></i> Register </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header_menu affix-top">
				<nav class="navbar navbar-default">
					<div class="container">
						<div class="navbar-flex">
							<div class="navbar-header">
								<a class="navbar-brand" href="index.html">
									<img src="images/logo-black.png" alt="image" />
								</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav" id="responsive-menu">
									<li class="dropdown submenu active">
										<a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="submenu dropdown">
												<a href="index.html">Home Style <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="index.html">Home Slider</a>
													</li>
													<li>
														<a href="index-1.html">Home Banner</a>
													</li>
													<li>
														<a href="index-2.html">Home Video</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="index-3.html">Home Style 1</a>
											</li>
											<li>
												<a href="index-4.html">Home Style 2</a>
											</li>
											<li>
												<a href="index-5.html">Home Style 3</a>
											</li>
											<li class="submenu dropdown">
												<a href="home-search.html">Home Search <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="home-search.html">search Banner</a>
													</li>
													<li>
														<a href="home-search1.html">Search Slider</a>
													</li>
													<li>
														<a href="home-search2.html">Search Video</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="index-flights.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flights <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="index-flights.html">Flight Home</a>
											</li>
											<li>
												<a href="flightlist.html">Flight Grid</a>
											</li>
											<li>
												<a href="flightlist-1.html">Flight List</a>
											</li>
											<li>
												<a href="flight-single.html">Flight Detail</a>
											</li>
											<li>
												<a href="flight-booking.html">Booking</a>
											</li>
											<li>
												<a href="flight-confirm.html">Thank You</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="index-hotel.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="index-hotel.html">Hotel Home</a>
											</li>
											<li class="submenu dropdown">
												<a href="hotellist-1.html.html/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Lists <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="hotellist-1.html">Hotel List 1</a>
													</li>
													<li>
														<a href="hotellist-2.html">Hotel List 2</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="hotelsingle-1.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel Detail <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="hotelsingle-1.html">Hotel Single 1</a>
													</li>
													<li>
														<a href="hotelsingle-2.html">Hotel Single 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="hotel-booking.html">Hotel Booking</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="index-cars.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cars <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="index-cars.html">Cars Home</a>
											</li>
											<li>
												<a href="car-grid-view.html">Cars Grid</a>
											</li>
											<li>
												<a href="car-list-view.html">Cars List</a>
											</li>
											<li>
												<a href="car-detail.html">Cars Detail</a>
											</li>
											<li>
												<a href="car-booking.html">Cars Booking</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="index-cruise.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cruise <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="index-cruise.html">Cruise Home</a>
											</li>
											<li>
												<a href="cruise-grid-view.html">Cruise Grid</a>
											</li>
											<li>
												<a href="cruise-list-view.html">Cruise List</a>
											</li>
											<li>
												<a href="cruise-detail.html">Cruise Detail</a>
											</li>
											<li>
												<a href="cruise-booking.html">Cruise Booking</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="submenu dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="tourlist-1.html">Tour List 1</a>
													</li>
													<li>
														<a href="tourlist-2.html">Tour List 2</a>
													</li>
													<li>
														<a href="tourlist-3.html">Tour List 3</a>
													</li>
													<li>
														<a href="toursinge-1.html">Tour Single 1</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="service.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="service.html">Service</a>
													</li>
													<li>
														<a href="service-detail.html">Service Detail</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="about.html">About Us</a>
													</li>
													<li>
														<a href="about1.html">About Us 1</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="events.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="events.html">Events One</a>
													</li>
													<li>
														<a href="events1.html">Events Two</a>
													</li>
													<li>
														<a href="events-detail.html">Events Detail</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="gallery.html">Gallery 1</a>
													</li>
													<li>
														<a href="gallery1.html">Gallery 2</a>
													</li>
													<li>
														<a href="gallery2.html">Gallery Masonry</a>
													</li>
													<li>
														<a href="gallery3.html">Gallery Lightbox</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="contact.html">Contact Us</a>
													</li>
													<li>
														<a href="contact1.html">Contact Us 1</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="404.html">Error Page 1</a>
													</li>
													<li>
														<a href="404-1.html">Error Page 2</a>
													</li>
												</ul>
											</li>
											<li class="submenu dropdown">
												<a href="comingsoon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comming Soon <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="comingsoon.html">Coming Soon 1</a>
													</li>
													<li>
														<a href="comingsoon-1.html">Coming Soon 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="hotel-booking.html">Booking</a>
											</li>
											<li>
												<a href="confirmation.html">Confirmation</a>
											</li>
											<li>
												<a href="testimonial.html">Testimonials</a>
											</li>
											<li>
												<a href="pricing.html">Pricing</a>
											</li>
											<li>
												<a href="terms.html">Terms</a>
											</li>
											<li>
												<a href="faq.html">FAQ</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="blog-home.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="blog-home.html">Blog Homepage</a>
											</li>
											<li>
												<a href="blog-list.html">Blog List</a>
											</li>
											<li>
												<a href="blog-grid.html">Blog Grid</a>
											</li>
											<li>
												<a href="blog-full.html">Blog Fullwidth</a>
											</li>
											<li>
												<a href="blog-left.html">Blog Left</a>
											</li>
											<li>
												<a href="blog-list.html">Blog Right</a>
											</li>
											<li>
												<a href="blog-masonry.html">Blog Masonry</a>
											</li>
											<li class="submenu dropdown">
												<a href="blog-single.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog Single <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="blog-single.html">Blog Single</a>
													</li>
													<li>
														<a href="single-full.html">Blog Single Full</a>
													</li>
													<li>
														<a href="single-left.html">Blog Single Left</a>
													</li>
													<li>
														<a href="blog-single.html">Blog Single Right</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="dashboard.html">Dashboard</a>
											</li>
											<li>
												<a href="dashboard-my-profile.html">User Profile</a>
											</li>
											<li>
												<a href="dashboard-list.html">User Wishlist</a>
											</li>
											<li>
												<a href="dashboard-messages.html">User Messages</a>
											</li>
											<li>
												<a href="dashboard-history.html">Booking History</a>
											</li>
											<li>
												<a href="dashboard-add-new.html">Add New</a>
											</li>
											<li>
												<a href="dashboard-hotel-list.html">Hotel List</a>
											</li>
											<li>
												<a href="dashboard-reviews.html">Dashboard Reviews</a>
											</li>
										</ul>
									</li>
									<li class="submenu dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="shop.html">Shop Home</a>
											</li>
											<li>
												<a href="shop-list.html">Shop List</a>
											</li>
											<li>
												<a href="shop-detail.html">Shop Single</a>
											</li>
											<li>
												<a href="cart.html">Cart</a>
											</li>
											<li>
												<a href="checkout.html">Checkout</a>
											</li>
											<li>
												<a href="login.html">Account</a>
											</li>
											<li>
												<a href="forgot-password.html">Forgot Password</a>
											</li>
										</ul>
									</li>
									<li class="dropdown submenu">
										<a href="#search1" class="mt_search">
											<i class="fa fa-search"></i>
										</a>
									</li>
									<li class="dropdown submenu">
										<a href="cart.html" class="mt_cart">
											<i class="fa fa-shopping-cart"></i>
											<span class="number-cart">1</span>
										</a>
									</li>
								</ul>
							</div>
							<div id="slicknav-mobile"></div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--==================================--> 
    @if(session('sucess')) 
    <div class="alert alert-success alert-dismissible" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" role="alert">
			<p>{{session('sucess')}}</p>
		</div> @elseif(session('error')) <div class="alert alert-danger alert-dismissible fade show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" role="alert">
			<p>{{session('error')}}</p>
		</div> @endif <section class="banner">
			<div class="slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="slide-inner">
								<div class="slide-image" style="background-image: url(images/slider/slider20.jpg)"></div>
								<div class="swiper-content">
									<h1>Make you Free to <span>travel</span> with us </h1>
									<p class="mar-bottom-20">Foresee the pain and trouble that are bound to ensue and equal fail in their duty through weakness.</p>
									<a href="#" class="biz-btn">Explore More</a>
									<a href="#" class="biz-btn mar-left-10">Contact Us</a>
								</div>
								<div class="overlay"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-inner">
								<div class="slide-image" style="background-image: url(images/slider/slider12.jpg)"></div>
								<div class="swiper-content">
									<h1>
										<span>Sensation Ice Trip</span> Is Coming For Kids
									</h1>
									<p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London, Foresee the pain and trouble</p>
									<a href="#" class="biz-btn">Find More</a>
								</div>
								<div class="overlay"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-inner">
								<div class="slide-image" style="background-image: url(images/slider/slider21.jpg)"></div>
								<div class="swiper-content">
									<h1>Your <span>Adventure</span> Wonderful Travel Calls Fast </h1>
									<p class="mar-bottom-20">Find awesome hotel, tour, car and activities in London to ensue and equal fail in their duty</p>
									<a href="#" class="biz-btn">View More</a>
								</div>
								<div class="overlay"></div>
							</div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</section>
		<!--=================-->
		<form action="/sendquote" method="post" id="contactus"> @csrf <section class="banner-form">
				<div class="container">
					<div class="row display-flex">
						<div class="col-lg-7 col-sm-12">
							<div class="why-us-about">
								<div class="why-about-inner">
									<h3 class="mar-bottom-5 themecolor">About move2travelhub</h3>
									<h2 class="bold">MOVE 2 TRAVEL HUB is one of India’s Start Up & Fast Growing Company.</h2>
									<p class="mar-0">   We are leading B2B travel Company. Move 2 Travel Hub is one of the best travel agencies providing back-end solutions to travel trade partners. Our core competence is in our excellent negotiated tariffs and quick and efficient reverts. Our dedicated staff ensure that all your queries are addressed and the best possible options are offered to you. We offer the best of global offers in destinations favoured most and also those which are not the ordinary. Excellent outbound packages, series departures, bespoke travel, FIT, Leisure, incentive travel, conference management, visa facilitation, business travel... we plan and coordinate everything, so that you can rest assured your client is in safe hands.
At Move 2 Travel Hub, it is our passion to make travel a pleasure.
We are truly passionate about building strong and lasting relationships. Our clients have always recommended us, and for good reason! We promise to keep travel simple, and focus on making it a WOW experience for you and your clients!
We are a one-stop solution to all your travel needs and no request is ignored. Whether you want a ticket for yourself, an entire itinerary planned for your family, or even a custom-experience designed for your honeymoon, get in touch with us.
</p>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-sm-12">
							<div class="form-content">
								<div class="tab-content">
									<div id="travel" class="tab-pane in active">
										<div class="row filter-box filter-box1">
											<h3 class="form-title text-center">Write to Us</h3>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Your Name</label>
													<div class="input-box">
														<i class="flaticon-user"></i>
														<input type="text" name="name" placeholder="Your Name" id="" /> @error('name') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Your Email</label>
													<div class="input-box">
														<i class="flaticon-user"></i>
														<input type="text" name="email" placeholder="Your Email address" id="" /> @error('email') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Your Phone</label>
													<div class="input-box">
														<i class="flaticon-call"></i>
														<input type="text" name="number" placeholder="Your Phone number" id="" /> @error('number') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Your Destination</label>
													<div class="input-box">
														<i class="flaticon-placeholder"></i>
														<input type="text" name="location" id="" /> @error('location') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>From</label>
													<div class="input-box">
														<i class="flaticon-calendar"></i>
														<input id="date-range0" name="FromDate" type="text" placeholder="yyyy-mm-dd" /> @error('FromDate') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>To</label>
													<div class="input-box">
														<i class="flaticon-calendar"></i>
														<input id="date-range1" name="ToDate" type="text" placeholder="yyyy-mm-dd" /> @error('ToDate') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Adult</label>
													<div class="input-box">
														<i class="flaticon-add-user"></i>
														<select class="niceSelect" name="noOfAdults">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select> @error('noOfAdults') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Children</label>
													<div class="input-box">
														<i class="flaticon-add-user"></i>
														<select class="niceSelect" name="noOfChildrens">
															<option value="0">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select> @error('noOfChildrens') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group">
													<label>Your Message</label>
													<div class="input-box">
														<i class="flaticon-airplane-travelling-around-earth"></i>
														<input type="text" name="message" placeholder="Your Message" id="" /> @error('message') <small style="color:red !important" id="" class="form-text text-muted">{{$message}}</small> @enderror
													</div>
												</div>
											</div>
											<div class="col-sm-8 offset-sm-2">
												<div class="form-group mar-top-5 mar-bottom-0 text-center">
													<button type="submit" href="#" class="biz-btn biz-btn1"> Contact Now </button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
		<!--=================-->
		<section class="trending">
			<div class="container">
				<div class="section-title">
					<h2>Perfect Holiday Plan</h2>
					<p> Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
				<div class="trend-box">
					<div class="row mix tour"> 
           			 @if($packages) 
            		@foreach($packages as $package) 
            		<div class="col-lg-4 col-md-6 mar-bottom-30">
							<div class="trend-item">
								<h3>
									<a href="/detailedpackage/{{$package->id}}">{{$package['title']}}</a>
								</h3>
								<div class="trend-image">
									<img src="/storage/{{$package->coverImage}}" alt="image" />
									<div class="trend-tags">
										<a href="#">
											<i class="flaticon-like"></i>
										</a>
									</div>
									<div class="trend-price">
										@if($package->price != null)
										<p class="price">From <span> ₹{{$package->price}}</span>
										</p>
										@endif
									</div>
								</div>
								<div class="trend-content">
									<p>
										<i class="flaticon-location-pin"></i>{{$package->title}}
									</p>
									<h4>
										<a href="#">{{$package->location}}</a>
									</h4>
									<!-- <div class="rating mar-bottom-10">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
									</div> 
									<span class="mar-left-5">38 Reviews</span> -->
									<p class="mar-0">
										<i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night
									<p>{{$package['description']}}</p>
									</p>	
								</div>
							</div>
						</div> @endforeach
						
             		@else <p>No Packages found</p> 
            		 @endif 

			 
            		</div>
				</div>
			</div>
			<div class="row">
				<div class="col" style="    height: 22px;
    margin-left: 40%;
    padding: 1%;">
					{{$packages->links()}}
				</div>
			</div>
			
		</section>
		
		<section class="why-us pad-top-0">
			<div class="container">
				<div class="section-title">
					<h2>Why Choose Us</h2>
					<p> Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
				<div class="why-us-box">
					<div class="row">
						<div class="col-lg-4">
							<div class="why-us-item text-center">
								<div class="why-us-icon">
									<i class="flaticon-price"></i>
								</div>
								<div class="why-us-content">
									<h3>
										<a href="#">Competetive Pricing</a>
									</h3>
									<p class="mar-0">With 500+ suppliers and the purchasing power of 300 million members</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="why-us-item text-center">
								<div class="why-us-icon">
									<i class="flaticon-quality"></i>
								</div>
								<div class="why-us-content">
									<h3>
										<a href="#">Award Winning Service</a>
									</h3>
									<p class="mar-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="why-us-item text-center">
								<div class="why-us-icon">
									<i class="flaticon-global"></i>
								</div>
								<div class="why-us-content">
									<h3>
										<a href="#">Worldwide Coverage</a>
									</h3>
									<p class="mar-0">1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 citites.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="top-desti pad-0">
			<div class="desti-inner">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<img src="images/destination3.jpg" alt="desti" />
						<div class="desti-title">
							<div class="desti-title-inner">
								<h2 class="white bold">Top Most Destination</h2>
								<p class="white mar-bottom-0">Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination3.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">New York</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination4.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">Armania</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination5.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">Manchester</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination7.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">kathmandu</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination8.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">Tokyo</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination9.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">Norwich</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="desti-image">
							<img src="images/destination10.jpg" alt="desti" />
							<div class="desti-content">
								<div class="rating mar-bottom-5">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
								<h3 class="white mar-bottom-0">Norwich</h3>
							</div>
							<div class="desti-overlay">
								<a href="#" class="biz-btn-white">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cta-one">
			<div class="container">
				<div class="cta-one_block display-flex space-between">
					<h2 class="white mar-bottom-0">Work with our amazing tour guides</h2>
					<a href="#contactus" class="biz-btn-white">Contact us now!</a>
				</div>
			</div>
		</section>
		<section class="top-deals">
			<div class="container">
				<div class="section-title">
					<h2>Today's Top Deals</h2>
					<p> Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
        <div class="row top-deal-slider">
          @if($packages)
          @foreach($packages as $package)
					<div class="col-lg-12 slider-item">
						<div class="slider-image">
							<img src="/storage/{{$package->coverImage}}" alt="image" />
						</div>
						<div class="slider-content">
							<h6 class="mar-bottom-10">
								<i class="fa fa-map-marker-alt"></i> {{$package->location}}
							</h6>
							<h4>
								<a href="#">{{$package->title}}</a>
							</h4>
							<p>{{$package->description}}</p>
							<div class="deal-price">
								<p class="price">From <span>₹{{$package->price}}</span>
								</p>
							</div>
						</div>
					</div>
          @endforeach
          @endif
				</div>
			</div>
		</section>

		<footer>
  <div class="footer-upper pad-bottom-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <div class="footer-about">
            <div class="footer-about-in mar-bottom-30">
              <h3 class="white">Need move2travelhub Help?</h3>
              <div class="footer-phone">
                <div class="cont-icon">
                  <i class="flaticon-call"></i>
                </div>
                <div class="cont-content mar-left-20">
                  <p class="mar-0">Got Questions? Call us 24/7!</p>
                  <p class="bold mar-0">
                    <span>Call Us:</span> (888) 1234 56789
                  </p>
                </div>
              </div>
            </div>
            <h3 class="white">Contact Info</h3>
            <p> PO Box: +47-252-254-2542 <br /> Location: Collins Stree, Vicotria 80, Australia </p>
            <ul class="social-links">
              <li>
                <a href="#">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-links">
            <h3 class="white">Company</h3>
            <ul>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Careers</a>
              </li>
              <li>
                <a href="#">Terms of Use</a>
              </li>
              <li>
                <a href="#">Privacy Statement</a>
              </li>
              <li>
                <a href="#">Feedbacks</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="footer-links">
            <h3 class="white">Support</h3>
            <ul>
              <li>
                <a href="#">Account</a>
              </li>
              <li>
                <a href="#">Legal</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">Affiliate Program</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <div class="footer-subscribe">
            <h3 class="white">Mailing List</h3>
            <p class="white">Sign up for our mailing list to get latest updates and offers</p>
            <form>
              <input type="email" placeholder="Your Email" />
              <a href="#" class="biz-btn mar-top-15">Subscribe</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-payment pad-top-30 pad-bottom-30 bg-white">
    <div class="container">
      <div class="pay-main display-flex space-between">
        <div class="footer-logo pull-left">
          <a href="index.html">
            <img src="images/logo-black.png" alt="image" />
          </a>
        </div>
       
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="copyright-text pull-left">
        <p class="mar-0">2023 move2travelhub. All rights reserved.</p>
      </div>
      <div class="footer-nav pull-right">
        <ul>
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">About Us</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="#">Careers</a>
          </li>
          <li>
            <a href="#">Terms of Use</a>
          </li>
          <li>
            <a href="#">Privacy</a>
          </li>
          <li>
            <a href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="{{ asset('js/plugin.js')}}"></script>
		<script src="{{ asset('js/main.js')}}"></script>
		<script src="{{ asset('js/menu.js')}}"></script>
		<script src="{{ asset('js/custom-swiper2.js')}}"></script>
		<script src="{{ asset('js/custom-nav.js')}}"></script>
		<script src="{{ asset('js/custom-date.js')}}"></script>
	</body>
</html>