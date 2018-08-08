<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/nikado-v1/nikado/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Aug 2018 00:40:58 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon-logo.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/css-plugins-call.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bundle.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/main.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">

        @yield('custom-head')
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper">
            <!-- HEADER AREA START -->
            <header class="header-area">
                <!-- Header top area start -->
                <div class="header-top-area border-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 col-12">
                                <div class="top-bar-left">
                                    <!-- welcome -->
                                    <div class="welcome">
                                        <p>WELCOME TO OUR SHOP!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-7 col-12">
                                <div class="top-bar-right pull-right clearfix text-uppercase">
                                    <!-- language-menu -->
                                    <div class="language-menu pull-left">
                                        <select class="nice-select-menu">
                                            <option data-display="English">English</option>
                                            <option value="1">Chinese</option>
                                            <option value="2">Spanish</option>
                                            <option value="3">Russian</option>
                                            <option value="4">Hindi</option>
                                            <option value="5">Arabic</option>
                                        </select>
                                    </div>
                                    <!-- currency-menu -->
                                    <div class="currency-menu pull-left">
                                        <select class="nice-select-menu">
                                            <option data-display="USD">USD</option>
                                            <option value="1">CHF</option>
                                            <option value="2">EUR</option>
                                            <option value="3" disabled>TAKA</option>
                                            <option value="4">GBP</option>
                                        </select>
                                    </div>
                                    <!-- login-register -->
                                    <ul class="login-register pull-left">
                                      @if(!Auth::check())
                                        <li><a href="{{route('login')}}">SIGN IN</a></li>
                                        <li>Or</li>
                                        <li><a href="{{route('login')}}">REGISTER</a></li>
                                      @else

                                      <div class="currency-menu pull-left">
                                          <select class="nice-select-menu">
                                              <option data-display="MY ACCOUNT"</option>
                                              <option value="1">LOGOUT</option>

                                          </select>
                                      </div>
                                      @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top bar area end -->
                <!-- Header middle area start -->
                <div class="header-middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <!-- site-logo -->
                                <div class="site-logo">
                                    <a href="index.html"><img src="{{asset('frontend')}}/images/logo/logo.png" alt="Nikado"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <!-- header-search -->
                                <div class="header-search clearfix">
                                    <div class="category-select pull-left">
                                        <select class="nice-select-menu">
                                            <option data-display="Categories">Categories</option>
                                            <option value="1">Decor & Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Fashion & clothings</option>
                                            <option value="4" disabled>Sport & Outdoors</option>
                                            <option value="5">Toy, Kids & Baby</option>
                                        </select>
                                    </div>
                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search product...">
                                            <input type="submit" name="submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-12">
                                <!-- shop-cart-menu -->
                                <div class="shop-cart-menu pull-right">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-bag"></i><sup>3</sup></a>
                                            <ul>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="single-product.html">sport t-shirt men</a></h5>
                                                            <span class="price">£515.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="single-product.html">sport coat amet</a></h5>
                                                            <span class="price">£100.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- single-shop-cart-wrapper -->
                                                    <div class="single-shop-cart-wrapper">
                                                        <div class="shop-cart-img">
                                                            <a href="#"><img src="{{asset('frontend')}}/images/product/3.jpg" alt="Image of Product"></a>
                                                        </div>
                                                        <div class="shop-cart-info">
                                                            <h5><a href="single-product.html">Pellentesque men</a></h5>
                                                            <span class="price">£265.00</span>
                                                            <span class="quantaty">Qty: 1</span>
                                                            <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- shop-cart-total -->
                                                    <div class="shop-cart-total">
                                                        <p>Subtotal: <span class="pull-right">£880.00</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shop-cart-btn">
                                                        <a href="checkout.html">Checkout</a>
                                                        <a href="cart.html" class="pull-right">View Cart</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                <!-- hotline -->
                                <div class="hotline d-lg-none clearfix">
                                    <div class="hotline-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="hotline-number">
                                        <span><strong>(+800) 123 456 329</strong></span>
                                        <span>Support Any Time</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header middle area end -->
                <!-- Header bottom area start -->
                <div id="sticky-header" class="header-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-12">
                                <!-- main-menu -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li class="current"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home Shop 1</a></li>
                                                    <li><a href="index-2.html">Home Shop 2</a></li>
                                                    <li><a href="index-3.html">Home Shop 3</a></li>
                                                    <li><a href="index-4.html">Home Shop 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu-3-column">
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="contact.html">Contact Us</a></li>
                                                            <li><a href="service.html">Services</a></li>
                                                            <li><a href="faq.html">Frequently Questins</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="blog-without-sidebar.html">None Sidebar</a></li>
                                                            <li><a href="blog-left-sidebar.html">Sidebar Left</a></li>
                                                            <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                                            <li><a href="blog-audio-format.html">Audio Format</a></li>
                                                            <li><a href="blog-video-format.html">Video Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop-full-width.html">Full Width</a></li>
                                                            <li><a href="shop-right-sidebar.html">Sidebar Right</a></li>
                                                            <li><a href="shop-list-view.html">List View</a></li>
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu clearfix"></div>
                            </div>
                            <div class="col-lg-3">
                                <!-- hotline -->
                                <div class="hotline clearfix pull-right d-none d-lg-block">
                                    <div class="hotline-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="hotline-number color-white">
                                        <span><strong>(+800) 123 456 329</strong></span>
                                        <span>Support Any Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header bottom area end -->
            </header>
            <!-- HRADER AREA END -->
