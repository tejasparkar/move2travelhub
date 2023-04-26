<!-- <title>Index Page</title>
<h1>Home Page of move2 travelhub</h1>
<form action="{{ route('package.create')}}" method="GET">
    @csrf
    <button type="submit">Create Holiday Package</button>
</form>
@if($packages->count())

@foreach($packages as $package)

<h2>{{$package->title}}</h2>
<p>{{$package->description}}</p>
<span>location :{{$package->location}} |</span>
<span>Price : {{$package->price}} |</span>
<span>Days/Nights : {{$package->numberOfdaysItenary}} |</span>
<br>
<span>More Description : {{$package->longDescription}}</span>
@endforeach

@else
<p>No package found </p>

@endif

<footer>I am Index page</footer> -->

@extends('layout')

@section('content')


<body>

    <div id="preloader">
        <div id="status"></div>
    </div>


    <header class="main_header_area">
        <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="index#">
                                <img src="images/logo-black.png" alt="image" />
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="index#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="submenu dropdown">
                                            <a href="index#">Home Style <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index#">Home Slider</a></li>
                                                <li><a href="index-1#">Home Banner</a></li>
                                                <li><a href="index-2#">Home Video</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-3#">Home Style 1</a></li>
                                        <li><a href="index-4#">Home Style 2</a></li>
                                        <li><a href="index-5#">Home Style 3</a></li>
                                        <li class="submenu dropdown">
                                            <a href="home-search#">Home Search <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="home-search#">search Banner</a></li>
                                                <li><a href="home-search1#">Search Slider</a></li>
                                                <li><a href="home-search2#">Search Video</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="index-flights#" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">Flights <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-flights#">Flight Home</a></li>
                                        <li><a href="flightlist#">Flight Grid</a></li>
                                        <li><a href="flightlist-1#">Flight List</a></li>
                                        <li><a href="flight-single#">Flight Detail</a></li>
                                        <li><a href="flight-booking#">Booking</a></li>
                                        <li><a href="flight-confirm#">Thank You</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="index-hotel#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Hotel <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-hotel#">Hotel Home</a></li>
                                        <li class="submenu dropdown">
                                            <a href="hotellist-1##/index#" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-haspopup="true"
                                                aria-expanded="false">Hotel Lists<i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="hotellist-1#">Hotel List 1</a></li>
                                                <li><a href="hotellist-2#">Hotel List 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="hotelsingle-1#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Hotel Detail<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="hotelsingle-1#">Hotel Single 1</a></li>
                                                <li><a href="hotelsingle-2#">Hotel Single 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="hotel-booking#">Hotel Booking</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="index-cars#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Cars <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-cars#">Cars Home</a></li>
                                        <li><a href="car-grid-view#">Cars Grid</a></li>
                                        <li><a href="car-list-view#">Cars List</a></li>
                                        <li><a href="car-detail#">Cars Detail</a></li>
                                        <li><a href="car-booking#">Cars Booking</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="index-cruise#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Cruise <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-cruise#">Cruise Home</a></li>
                                        <li><a href="cruise-grid-view#">Cruise Grid</a></li>
                                        <li><a href="cruise-list-view#">Cruise List</a></li>
                                        <li><a href="cruise-detail#">Cruise Detail</a></li>
                                        <li><a href="cruise-booking#">Cruise Booking</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">Tour <i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="tourlist-1#">Tour List 1</a></li>
                                                <li><a href="tourlist-2#">Tour List 2</a></li>
                                                <li><a href="tourlist-3#">Tour List 3</a></li>
                                                <li><a href="toursinge-1#">Tour Single 1</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="service#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Service<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="service#">Service</a></li>
                                                <li><a href="service-detail#">Service Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="about#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">About Us <i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about#">About Us</a></li>
                                                <li><a href="about1#">About Us 1</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="events#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Events<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="events#">Events One</a></li>
                                                <li><a href="events1#">Events Two</a></li>
                                                <li><a href="events-detail#">Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="gallery#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Gallery<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="gallery#">Gallery 1</a></li>
                                                <li><a href="gallery1#">Gallery 2</a></li>
                                                <li><a href="gallery2#">Gallery Masonry</a></li>
                                                <li><a href="gallery3#">Gallery Lightbox</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="contact#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Contact Us <i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="contact#">Contact Us</a></li>
                                                <li><a href="contact1#">Contact Us 1</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="404#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">Error<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="404#">Error Page 1</a></li>
                                                <li><a href="404-1#">Error Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="comingsoon#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Comming Soon<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="comingsoon#">Coming Soon 1</a></li>
                                                <li><a href="comingsoon-1#">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="hotel-booking#">Booking</a></li>
                                        <li><a href="confirmation#">Confirmation</a></li>
                                        <li><a href="testimonial#">Testimonials</a></li>
                                        <li><a href="pricing#">Pricing</a></li>
                                        <li><a href="terms#">Terms</a></li>
                                        <li><a href="faq#">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="blog-home#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Blogs <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-home#">Blog Homepage</a></li>
                                        <li><a href="blog-list#">Blog List</a></li>
                                        <li><a href="blog-grid#">Blog Grid</a></li>
                                        <li><a href="blog-full#">Blog Fullwidth</a></li>
                                        <li><a href="blog-left#">Blog Left</a></li>
                                        <li><a href="blog-list#">Blog Right</a></li>
                                        <li><a href="blog-masonry#">Blog Masonry</a></li>
                                        <li class="submenu dropdown">
                                            <a href="blog-single#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-haspopup="true" aria-expanded="false">Blog Single <i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-single#">Blog Single</a></li>
                                                <li><a href="single-full#">Blog Single Full</a></li>
                                                <li><a href="single-left#">Blog Single Left</a></li>
                                                <li><a href="blog-single#">Blog Single Right</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Dashboard <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="dashboard-my-profile#">User Profile</a></li>
                                        <li><a href="dashboard-list#">User Wishlist</a></li>
                                        <li><a href="dashboard-messages#">User Messages</a></li>
                                        <li><a href="dashboard-history#">Booking History</a></li>
                                        <li><a href="dashboard-add-new#">Add New</a></li>
                                        <li><a href="dashboard-hotel-list#">Hotel List</a></li>
                                        <li><a href="dashboard-reviews#">Dashboard Reviews</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Shop<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop#">Shop Home</a></li>
                                        <li><a href="shop-list#">Shop List</a></li>
                                        <li><a href="shop-detail#">Shop Single</a></li>
                                        <li><a href="cart#">Cart</a></li>
                                        <li><a href="checkout#">Checkout</a></li>
                                        <li><a href="login#">Account</a></li>
                                        <li><a href="forgot-password#">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#search1" class="mt_search"><i class="fa fa-search"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="cart#" class="mt_cart"><i class="fa fa-shopping-cart"></i><span
                                            class="number-cart">1</span></a>
                                </li>
                            </ul>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div>

            </nav>
        </div>

    </header>


    <section class="banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image: url(images/slider/slider1.jpg)"></div>
                            <div class="swiper-content">
                                <h1 style="text-shadow: 2px 2px 4px #000000;">Make you Free to <span>travel</span> with
                                    us</h1>
                                <p style="text-shadow: 2px 2px 4px #000000;" class="mar-bottom-20">Foresee the pain and
                                    trouble that are bound to ensue and equal fail in their duty through weakness.</p>
                                <a style="text-shadow: 2px 2px 4px #000000;" href="#" class="biz-btn">Explore More</a>
                                <a style="text-shadow: 2px 2px 4px #000000;" href="#"
                                    class="biz-btn mar-left-10">Contact Us</a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image: url(images/slider/slider7.jpg)"></div>
                            <div class="swiper-content">
                                <h1 style="text-shadow: 2px 2px 4px #000000;"><span>Sensation Ice Trip</span> Is Coming
                                    For Kids</h1>
                                <p style="text-shadow: 2px 2px 4px #000000;" class="mar-bottom-20">Find awesome hotel,
                                    tour, car and activities in London, Foresee the pain and trouble</p>
                                <a style="text-shadow: 2px 2px 4px #000000;" href="#" class="biz-btn">Find More</a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image: url(images/slider/slider3.jpg)"></div>
                            <div class="swiper-content">
                                <h1 style="text-shadow: 2px 2px 4px #000000;">Your <span>Adventure</span> Wonderful
                                    Travel Calls Fast</h1>
                                <p style="text-shadow: 2px 2px 4px #000000;" class="mar-bottom-20">Find awesome hotel,
                                    tour, car and activities in London to ensue and equal fail in their duty</p>
                                <a style="text-shadow: 2px 2px 4px #000000;" href="#" class="biz-btn">View More</a>
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


    <section class="banner-form">
        <div class="container">
            <div class="row display-flex">
                <div class="col-lg-7 col-sm-12">
                    <div class="why-us-about">
                        <div class="why-about-inner">
                            <h3 class="mar-bottom-5 themecolor">About holidays move2travelhub</h3>
                            <h2class="bold">We're truely dedicated to make your travel experience as much as simple and
                                fun as possible</h2class=>
                                <p class="mar-0">
                                    Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam
                                    sollicitudin. Proin sed augue sed neque ultricies
                                    condimentum. In ac ultrices lectus.<br />
                                    Nullam ex elit, vestibulum ut urna non, tincidunt condimentum sem. Sed enim tortor,
                                    accumsan at consequat et, tempus sit ame
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="form-content">
                        <div class="tab-content">
                            <div id="travel" class="tab-pane in active">
                                <div class="row filter-box filter-box1">
                                    <h3 style="text-shadow: 2px 2px 4px #000000;" class="form-title text-center">Send us
                                        your Quote</h3>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Your Destination</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Where are you going?">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Enter your name">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>From</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mm-dd" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>To</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 offset-sm-2">
                                        <div class="form-group mar-top-5 mar-bottom-0 text-center">
                                            <a href="#" class="biz-btn biz-btn1"><i class="fa fa-search"></i> Find
                                                Now</a>
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


    <section class="why-us pad-top-0">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
            <div class="why-us-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="why-us-item text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-price"></i>
                            </div>
                            <div class="why-us-content">
                                <h3><a href="#">Competetive Pricing</a></h3>
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
                                <h3><a href="#">Award Winning Service</a></h3>
                                <p class="mar-0">Fabulous Travel worry free knowing that we're here if you need us, 24
                                    hours a day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="why-us-item text-center">
                            <div class="why-us-icon">
                                <i class="flaticon-global"></i>
                            </div>
                            <div class="why-us-content">
                                <h3><a href="#">Worldwide Coverage</a></h3>
                                <p class="mar-0">1,200,000 hotels in more than 200 countries and regions & flights to
                                    over 5,000 citites.</p>
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
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="images/destination3.jpg" alt="desti" />
                    <div class="desti-title">
                        <div class="desti-title-inner">
                            <h2 class="white bold">Top Most <br />Destination</h2>
                            <p class="white mar-bottom-0">Lorem Ipsum is simply dummy text the printing and typesetting
                                industry.</p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6">
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


    <section class="trending">
        <div class="container">
            <div class="section-title">
                <h2>Perfect Holiday Plan</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
                <h1>Home</h1>
                
            </div>
            <div class="trend-box">
                <div class="row mix tour">
                @if($packages)
                @foreach($packages as $package)
                
                <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="trend-item">
                        <h3> <a href="">{{$package['title']}}</a></h3>
                
                            
                            <div class="trend-image">
                                <img src="images/trending1.jpg" alt="image" />
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                                <div class="trend-price">
                                    <p class="price">From <span>{{$package->price}}</span></p>
                                </div>
                            </div>
                            <div class="trend-content">
                                <p><i class="flaticon-location-pin"></i>{{$package->title}}</p>
                                <h4><a href="#">{{$package->location}}</a></h4>
                                <div class="rating mar-bottom-10">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <span class="mar-left-5">38 Reviews</span>
                                <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 days & 2 night
                                <p>{{$package['description']}}</p></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <p>No Packages found</p>
                @endif
      
                
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action">
        <div class="container">
            <div class="action-content text-center mar-bottom-20">
                <h2 class="white mar-bottom-0">Find next place to visit</h2>
                <h3 class="white package-name">EXPLORE THE WORLD</h3>
            </div>
            <div class="video-button text-center">
                <div class="call-button1">
                    <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                        data-channel="vimeo">
                        <i class="fa fa-play"></i>
                    </button>
                </div>
                <div class="video-figure"></div>
            </div>
        </div>
    </section>


    <section class="cta-one">
        <div class="container">
            <div class="cta-one_block display-flex space-between">
                <h2 class="white mar-bottom-0">Work with our amazing tour guides</h2>
                <a href="contact#" class="biz-btn-white">Join our team</a>
            </div>
        </div>
    </section>


    <section class="top-deals">
        <div class="container">
            <div class="section-title">
                <h2>Today's Top Deals</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
            <div class="row top-deal-slider">
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="images/trending7.jpg" alt="image" />
                    </div>
                    <div class="slider-content">
                        <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="images/trending8.jpg" alt="image" />
                    </div>
                    <div class="slider-content">
                        <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
                        <h4><a href="#">Save big on hotels!</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="images/trending9.jpg" alt="image" />
                    </div>
                    <div class="slider-content">
                        <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
                        <h4><a href="#">Experience Europe Your Way</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="images/trending10.jpg" alt="image" />
                    </div>
                    <div class="slider-content">
                        <h6 class="mar-bottom-10"><i class="fa fa-map-marker-alt"></i> Germany</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="discount-action pad-top-0">
        <div class="container">
            <div class="call-banner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-banner-inner text-center">
                            <h2>SUMMER SPECIAL <br />UPTO 25% OFF</h2>
                            <h3 class="mar-bottom-20">SPEND THE BEST VACTION WITH US <br />The nights of Thailand</h3>
                            <a href="#" class="biz-btn biz-btn1">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="travelcounter">
        <div class="container">
            <div class="section-title">
                <h2 class="white">call our agents to book</h2>
                <p class="white">Travel award winning and top rated tour operator</p>
            </div>
            <div class="row service-gg">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fas fa-hiking" aria-hidden="true"></i>
                        </div>
                        <div class="counter-content">
                            <h3 class="boats">80</h3>
                            <p class="mar-0">Pro Tour Guides</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        </div>
                        <div class="counter-content">
                            <h3 class="location">19</h3>
                            <p class="mar-0">Tours are Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa fa-walking" aria-hidden="true"></i>
                        </div>
                        <div class="counter-content">
                            <h3 class="showroom">10</h3>
                            <p class="mar-0">Traveling Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="counter-content">
                            <h3 class="lisence">100</h3>
                            <p class="mar-0">Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="top-review bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Top Tour Reviews</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
            <div class="review-wrap">
                <div class="review-slider">
                    <div class="col-md-4 reviews-list align-center">
                        <div class="list-rv-detail">
                            <p class="mar-0">
                                <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged
                            </p>
                        </div>
                        <div class="rev-author mar-top-40">
                            <div class="rev-image"><img src="images/inbox3.jpg" alt="image" /></div>
                            <div class="rev-content mar-left-20">
                                <h4 class="mar-bottom-5">John Doe</h4>
                                <p class="mar-bottom-5">CEO/Mario Brand</p>
                                <ul class="list-inline">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 reviews-list align-center">
                        <div class="list-rv-detail">
                            <p class="mar-0">
                                <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged
                            </p>
                        </div>
                        <div class="rev-author mar-top-40">
                            <div class="rev-image"><img src="images/inbox1.jpg" alt="image" /></div>
                            <div class="rev-content mar-left-20">
                                <h4 class="mar-bottom-5">Drank Bastis Doe</h4>
                                <p class="mar-bottom-5">COO/Nell & wells Co.</p>
                                <ul class="list-inline">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 reviews-list align-center">
                        <div class="list-rv-detail">
                            <p class="mar-0">
                                <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged
                            </p>
                        </div>
                        <div class="rev-author mar-top-40">
                            <div class="rev-image"><img src="images/inbox2.jpg" alt="image" /></div>
                            <div class="rev-content mar-left-20">
                                <h4 class="mar-bottom-5">John Doe</h4>
                                <p class="mar-bottom-5">CEO/Mario Brand</p>
                                <ul class="list-inline">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 reviews-list align-center">
                        <div class="list-rv-detail">
                            <p class="mar-0">
                                <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged
                            </p>
                        </div>
                        <div class="rev-author mar-top-40">
                            <div class="rev-image"><img src="images/inbox3.jpg" alt="image" /></div>
                            <div class="rev-content mar-left-20">
                                <h4 class="mar-bottom-5">Wayne Nell</h4>
                                <p class="mar-bottom-5">Director/Franchisis Com</p>
                                <ul class="list-inline">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 reviews-list align-center">
                        <div class="list-rv-detail">
                            <p class="mar-0">
                                <i class="fa fa-quote-left mar-right-10"></i> Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged
                            </p>
                        </div>
                        <div class="rev-author mar-top-40">
                            <div class="rev-image"><img src="images/inbox4.jpg" alt="image" /></div>
                            <div class="rev-content mar-left-20">
                                <h4 class="mar-bottom-5">Yolksel Doke</h4>
                                <p class="mar-bottom-5">CEO/Rupens Trator</p>
                                <ul class="list-inline">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog">
        <div class="container">
            <div class="section-title">
                <h2>Recent Activities</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
            <div class="blog-home-main">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 mar-bottom-25">
                                <div class="grid">
                                    <div class="grid-item">
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i>
                                                Mar 15, 2017</div>
                                            <h3><a href="blog-single#">Raising say express had chiefly detract</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus,
                                                velit nec luctus dictum Nam finibus.</p>
                                            <a href="blog-single#" class="biz-btn biz-btn1">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="grid">
                                    <div class="grid-item grid-item1">
                                        <div class="grid-image">
                                            <img src="images/trending2.jpg" alt="blog" />
                                        </div>
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-10 white"><i
                                                    class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                            <h3 class="mar-0"><a href="blog-single#" class="white">Raising say express
                                                    had chiefly detract</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-sm-12 mar-bottom-25">
                                <div class="grid">
                                    <div class="grid-item grid-item1">
                                        <div class="grid-image">
                                            <img src="images/trending6.jpg" alt="blog" />
                                        </div>
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-10 white"><i
                                                    class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                            <h3 class="mar-0"><a href="blog-single#" class="white">Raising say express
                                                    had chiefly detract</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="grid">
                                    <div class="grid-item">
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i>
                                                Mar 15, 2017</div>
                                            <h3><a href="blog-single#">Raising say express had chiefly detract</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus,
                                                velit nec luctus dictum Nam finibus.</p>
                                            <a href="blog-single#" class="biz-btn biz-btn1">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-sm-12 mar-bottom-25">
                                <div class="grid">
                                    <div class="grid-item">
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-15"><i class="flaticon flaticon-calendar"></i>
                                                Mar 15, 2017</div>
                                            <h3><a href="blog-single#">Raising say express had chiefly detract</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus,
                                                velit nec luctus dictum Nam finibus.</p>
                                            <a href="blog-single#" class="biz-btn biz-btn1">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="grid">
                                    <div class="grid-item grid-item1">
                                        <div class="grid-image">
                                            <img src="images/trending7.jpg" alt="blog" />
                                        </div>
                                        <div class="gridblog-content">
                                            <div class="date mar-bottom-10 white"><i
                                                    class="flaticon flaticon-calendar"></i> Mar 15, 2017</div>
                                            <h3 class="mar-0"><a href="blog-single#" class="white">Raising say express
                                                    had chiefly detract</a></h3>
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


    <section class="partners bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Our Awesome Parnters</h2>
                <p>
                    Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
            <section id="clients" class="clients clients">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-2.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                                data-aos-delay="100">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                                data-aos-delay="200">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                                data-aos-delay="300">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                                data-aos-delay="400">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/cl-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                                data-aos-delay="500">
                        </div>

                    </div>

                </div>
            </section>
    </section>


    <section class="insta-main pad-0">
        <div class="insta-inner">
            <div class="row display-flex">
                <div class="col-lg-2 col-md-3">
                    <div class="insta-title">
                        <div class="insta-title-inner text-center">

                            <h3 class="white bold">holidays move2travelhub</h3>
                            <a href="#" class="biz-btn-white">Follow Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="row attract-slider">
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination3.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination4.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination5.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination6.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination7.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination8.jpg" alt="insta" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="insta-image">
                                <a href="#"><img src="images/destination9.jpg" alt="insta" /></a>
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-about">
                            <div class="footer-about-in mar-bottom-30">
                                <h3 class="white">Need holidays move2travelhub Help?</h3>
                                <div class="footer-phone">
                                    <div class="cont-icon"><i class="flaticon-call"></i></div>
                                    <div class="cont-content mar-left-20">
                                        <p class="mar-0">Got Questions? Call us 24/7!</p>
                                        <p class="bold mar-0"><span>Call Us:</span> (888) 1234 56789</p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="white">Contact Info</h3>
                            <p>
                                PO Box: +47-252-254-2542<br />
                                Location: Collins Stree, Vicotria 80, Australia
                            </p>
                            <ul class="social-links">
                                <li>
                                    <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-links">
                            <h3 class="white">Company</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Statement</a></li>
                                <li><a href="#">Feedbacks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-links">
                            <h3 class="white">Support</h3>
                            <ul>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Legal</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
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
                        <a href="index#"><img src="images/logo-black.png" alt="image" /></a>
                    </div>
                    <div class="footer-payment-nav pull-right">
                        <ul>
                            <li><img src="images/payment/mastercard.png" alt="image" /></li>
                            <li><img src="images/payment/paypal.png" alt="image" /></li>
                            <li><img src="images/payment/skrill.png" alt="image" /></li>
                            <li><img src="images/payment/visa.png" alt="image" /></li>
                            <li>
                                <select>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                </select>
                            </li>
                            <li>
                                <select>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-text pull-left">
                    <p class="mar-0">2020 holidays move2travelhub. All rights reserved.</p>
                </div>
                <div class="footer-nav pull-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="login-content">
                <div class="login-title section-border">
                    <h3>Login</h3>
                </div>
                <div class="login-form section-border">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter password" />
                        </div>
                    </form>
                    <div class="form-btn">
                        <a href="#" class="biz-btn biz-btn1">LOGIN</a>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox" /> Remember Me
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="login-social section-border">
                    <p>or continue with</p>
                    <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="sign-up">
                    <p>Do not have an account?<a href="#">Sign Up</a></p>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    </div>
    <div class="modal fade" id="register" role="dialog">
        <div class="modal-dialog">
            <div class="login-content">
                <div class="login-title section-border">
                    <h3>Register</h3>
                </div>
                <div class="login-form section-border">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="User Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" />
                        </div>
                    </form>
                    <div class="form-btn">
                        <a href="#" class="biz-btn biz-btn1">REGISTER</a>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox" /> Remember Me
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="login-social section-border">
                    <p>or continue with</p>
                    <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="sign-up">
                    <p>Do not have an account?<a href="#">Sign Up</a></p>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    </div>

    

@stop
