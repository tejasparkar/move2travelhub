
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Holidays move2travelhub</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('css/style.css'); }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{ !! url('css/color/color-default.css')!!}" />

    <link href="{!!url('css/plugin.css')!!}" rel="stylesheet" type="text/css" />

    <link href="{!!url('fonts/flaticon.css')!!}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet"
        href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>

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
                                    <a href="/login" class="mt_cart">Login<i class="fa fa-shopping-cart"></i><span
                                            class="number-cart">1</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="/register" class="mt_cart">Register<i class="fa fa-shopping-cart"></i><span
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

@yield('content')


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

<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="{{ asset('js/plugin.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/menu.js')}}"></script>
    <script src="{{ asset('js/custom-swiper2.js')}}"></script>
    <script src="{{ asset('js/custom-nav.js')}}"></script>
    <script src="{{ asset('js/custom-date.js')}}"></script>


</html>