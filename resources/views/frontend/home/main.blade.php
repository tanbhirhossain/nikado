@extends('frontend.front_master')
@section('page-content')
<!-- SLIDER AREA START -->
<div class="slider-area">
    <div class="slider-carousel-active owl-carousel arrow-style-2">
        <!-- single-slider-wrapper -->
        <div class="single-slider-wrapper slider-1-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content slider-content-1 slider-animated-1">
                            <h3>SALE<strong>-40%</strong> </h3><br>
                            <h2><strong>NEW</strong> COLLECTION</h2><br>
                            <h4>WOMEN'S<strong>SPORTS</strong> </h4><br>
                            <div class="button-1 hover-button-1">
                                <a href="single-product.html">SHOP IT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-slider-wrapper -->
        <div class="single-slider-wrapper slider-1-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content slider-content-2 slider-animated-1">
                            <h3>SALE UP TO OFF ALL </h3>
                            <h2><strong>50%</strong><span>BACK PACK</span><span>&<b>JACKETS</b></span></h2>
                            <div class="button-1 hover-btn-2">
                                <a href="single-product.html">SHOP IT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="banner-area banner-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-item banner-1">
                    <a href="shop.html"><img src="{{asset('frontend')}}/images/banner/1.jpg" alt="Image of Banner"></a>
                    <div class="banner-info">
                        <h3>OMNIUM TRAINER</h3>
                        <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. NAM VOLUTPAT URNA EGET MI AUCTOR ALIQUET. SED NON MAXIMUS ARCU</p>
                        <a class="more-info" href="shop.html">MORE INFO</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-item">
                    <a href="shop.html"><img src="{{asset('frontend')}}/images/banner/2.jpg" alt="Image of Banner"></a>
                </div>
                <div class="banner-item">
                    <a href="shop.html"><img src="{{asset('frontend')}}/images/banner/3.jpg" alt="Image of Banner"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- PRODUCT AREA START -->
<div class="product-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab-menu">
                    <div class="nav">
                        <a class="active" data-toggle="tab" href="#product-link-1-1">FEATURED</a>
                        <a data-toggle="tab" href="#product-link-1-2">SALE</a>
                        <a data-toggle="tab" href="#product-link-1-3">NEW ARRIVELS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-link-1-1" >
                        <div class="row">
                            <div class="product-carousel-active owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/3.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/4.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-link-1-2" >
                        <div class="row">
                            <div class="product-carousel-active owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/6.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/7.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/8.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/9.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-link-1-3" >
                        <div class="row">
                            <div class="product-carousel-active owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src={{asset('frontend')}}/"images/product/10.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/11.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/12.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/13.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
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
    </div>
</div>
<!-- PRODUCT AREA END -->

<!-- SERVICE AREA START -->
<div class="service-area bg-1 color-white text-center pt-60 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- single-service-wrapper -->
                <div class="single-service-wrapper">
                    <div class="service-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="service-info">
                        <h4 class="color-theme">FREE SHIPPING</h4>
                        <p>Free shipping on all orders over $100</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- single-service-wrapper -->
                <div class="single-service-wrapper">
                    <div class="service-icon">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <div class="service-info">
                        <h4 class="color-theme">MONEY BACK</h4>
                        <p>100% money back guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- single-service-wrapper -->
                <div class="single-service-wrapper">
                    <div class="service-icon">
                        <i class="fa fa-life-bouy"></i>
                    </div>
                    <div class="service-info">
                        <h4 class="color-theme">ONLINE SUPPORT</h4>
                        <p>Service support fast 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- PRODUCT AREA 2 START -->
<div class="product-area product-area-2 pt-60 pb-30 mt--145">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab-menu">
                    <div class="nav">
                        <a class="active" data-toggle="tab" href="#product-link-2-1">WOMEN</a>
                        <a data-toggle="tab" href="#product-link-2-2">MEN</a>
                        <a data-toggle="tab" href="#product-link-2-3">SPORT</a>
                        <a data-toggle="tab" href="#product-link-2-4">ACCESSORIES</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-link-2-1" >
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/3.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/3.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/4.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/4.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-link-2-2" >
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/6.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/6.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/7.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/7.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/8.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/8.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag fringilla</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/9.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/9.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Handbag feugiat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-link-2-3" >
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/10.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/10.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/11.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/11.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/12.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/12.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/13.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/13.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-link-2-4" >
                        <div class="row">
                            <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/10.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/10.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/11.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/11.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/12.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/12.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/13.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/13.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/14.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
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
    </div>
</div>
<!-- PRODUCT AREA 2 END -->

<!-- PRODUCT DEAL START -->
<div class="product-deal-area bg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-1">
                    <h2>DEAL OF THE DAYS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="deal-carousel-active owl-carousel arrow-style-1">
                    <!-- single-deal-wrapper -->
                    <div class="single-deal-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <!-- deal-img -->
                                <div class="deal-img">
                                    <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                    <div class="quick-view">
                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <!-- deal-info -->
                                <div class="deal-info">
                                    <div class="deal-counter">
                                        <div data-countdown="2019/02/02"></div>
                                    </div>
                                    <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                    <div class="product-rattings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</P>
                                    <div class="deal-price">
                                        <span>£145.00</span><del>£150.00</del>
                                    </div>
                                    <div class="select-option">
                                        <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-deal-wrapper -->
                    <div class="single-deal-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <!-- deal-img -->
                                <div class="deal-img">
                                    <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                    <div class="quick-view">
                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <!-- deal-info -->
                                <div class="deal-info">
                                    <div class="deal-counter">
                                        <div data-countdown="2019/08/02"></div>
                                    </div>
                                    <h4><a href="single-product.html">Handbag lobortis2</a></h4>
                                    <div class="product-rattings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</P>
                                    <div class="deal-price">
                                        <span>£145.00</span><del>£150.00</del>
                                    </div>
                                    <div class="select-option">
                                        <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- - -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DEAL OF THE DAYS AREA END -->

<!-- PRODUCT AREA 3 START -->
<div class="product-area product-area-3 pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab-menu">
                    <div class="nav">
                        <a class="active" data-toggle="tab" href="#product-link-3-1">RANDOM</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-link-3-1" >
                        <div class="row">
                            <div class="product-carousel-active owl-carousel arrow-style-1">
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/1.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/2.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/3.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">The Shirt Women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/4.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- single-product-wrapper -->
                                    <div class="single-product-wrapper">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="{{asset('frontend')}}/images/product/5.jpg" alt="Image of Product"></a>
                                            <div class="product-hover">
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                </div>
                                                <div class="product-action clearfix">
                                                    <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                    <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info -->
                                        <div class="product-info">
                                            <h4><a href="single-product.html">Pellentesque men</a></h4>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-price">
                                                <span>£145.00</span><del>£150.00</del>
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
    </div>
</div>
<!-- PRODUCT AREA 3 END -->

<!-- BLOG AREA START -->
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-1">
                    <h2>BLOG POSTS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="blog-carousel-active owl-carousel arrow-style-1">
                        <div class="col-lg-12">
                            <!-- single-blog-wrapper -->
                            <div class="single-blog-wrapper">
                                <div class="blog-img">
                                    <a href="single-blog.html"><img src="{{asset('frontend')}}/images/blog/1.jpg" alt="Nikado"></a>
                                </div>
                                <div class="blog-content clearfix">
                                    <div class="blog-date-pin">
                                        <span>10</span>
                                        <span class="month">Mar</span>
                                    </div>
                                    <div class="blog-info">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                        <div class="button-2">
                                            <a href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- single-blog-wrapper -->
                            <div class="single-blog-wrapper">
                                <div class="blog-img">
                                    <a href="single-blog.html"><img src="{{asset('frontend')}}/images/blog/2.jpg" alt="Nikado"></a>
                                </div>
                                <div class="blog-content clearfix">
                                    <div class="blog-date-pin">
                                        <span>10</span>
                                        <span class="month">Mar</span>
                                    </div>
                                    <div class="blog-info">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                        <div class="button-2">
                                            <a href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- single-blog-wrapper -->
                            <div class="single-blog-wrapper">
                                <div class="blog-img">
                                    <a href="single-blog.html"><img src="{{asset('frontend')}}/images/blog/3.jpg" alt="Nikado"></a>
                                </div>
                                <div class="blog-content clearfix">
                                    <div class="blog-date-pin">
                                        <span>10</span>
                                        <span class="month">Mar</span>
                                    </div>
                                    <div class="blog-info">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                        <div class="button-2">
                                            <a href="single-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- single-blog-wrapper -->
                            <div class="single-blog-wrapper">
                                <div class="blog-img">
                                    <a href="single-blog.html"><img src="{{asset('frontend')}}/images/blog/3.jpg" alt="Nikado"></a>
                                </div>
                                <div class="blog-content clearfix">
                                    <div class="blog-date-pin">
                                        <span>10</span>
                                        <span class="month">Mar</span>
                                    </div>
                                    <div class="blog-info">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                        <div class="button-2">
                                            <a href="single-blog.html">Read More</a>
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
</div>
<!-- BLOG AREA END -->
@endsection
