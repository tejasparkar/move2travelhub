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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

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
								<a class="navbar-brand" href="/">
									<img src="{{asset('images/logo-black.png')}}" alt="image" />
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
	



<section class="single">
<div class="container">
<div class="row">
<div class="col-md-12 col-12">
<div class="single-content">
<div class="single-full-title section-border">
<div class="single-title">
<h2>{{$package->title}}</h2>
<p><i class="flaticon-location-pin"></i>{{$package->location}}</p>

</div>
</div>

<div class="tour-includes">
<ul>
<li><i class="fa fa-calendar"></i>Days : {{$package->numberOfdaysItenary}}</li>
<li><i class="fa fa-indian-rupee-sign"></i> Price : {{$package->price}}</li>
<li><i class="fa fa-location-pin" aria-hidden="true"></i> Location : {{$package->location}}</li>

</ul>
</div>
<div class="description mar-bottom-30">
<div class="col-lg-12 col-md-12 col-12">
<div class="td-item">
<div class="td-image">
<img src="/storage/{{$package->coverImage}}" alt="image">
</div>
</div>
</div>
</div>
<h3>Description</h3>
<p>
{{$package->description}}
</p>



<div class="description mar-bottom-30">
<h3>What to Expect</h3>
<p>
{{$package->longDescription}}
</p>

</div>
@if($package['itenaryday1'])
<div class="itinerary mar-bottom-30">
<h3>Itinerary</h3>

@for($i=1;$i<51;++$i)
@if($package['itenaryday'.$i])
<div class="itinerary-item">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#it2">
<i class="fa fa-angle-double-right" aria-hidden="true"></i>
</button>
<p class="mar-bottom-0"><span>Day {{$i}}</span>{{$package['itenaryday'.$i]}} </p>
<div id="it2" class="collapse itinerary-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
@endif
@endfor
@endif


</div>
<div class="single-review mar-bottom-30">
<h3>Average Reviews</h3>
<div class="row">
<div class="col-md-4 col-sm-4 col-12">
<!-- <div class="review-box">
<p class="rating"><span>4.2</span>/5</p>
<h4>Very Good</h4>
<p class="mar-0">From 40 Reviews</p>
</div> -->
</div>
<div class="col-md-12 col-sm-12 col-12">
<div class="review-progress">
<div class="progress-item">
<p>Cleanliness</p>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
<span class="sr-only">70% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Facilities</p>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
<span class="sr-only">70% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Value for money</p>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
<span class="sr-only">70% Complete</span>
 </div>
</div>
</div>
<div class="progress-item">
<p>Service</p>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span class="sr-only">70% Complete</span>
</div>
</div>
</div>
<div class="progress-item">
<p>Location</p>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
<span class="sr-only">70% Complete</span>
</div>
</div>
</div>
</div>
</div>
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
            <img src="{{asset('images/logo-black.png')}}" alt="image" />
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