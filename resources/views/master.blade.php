<!doctype html>

<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tstore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}}>
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href={{asset('assets/css/core.css')}}>
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href={{asset('assets/css/shortcode/shortcodes.css')}}>
    <!-- Theme main style -->
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
    <!-- Responsive css -->
    <link rel="stylesheet" href={{asset('assets/css/responsive.css')}}>
    <!-- User style -->
    <link rel="stylesheet" href={{asset('assets/css/custom.css')}}>
    <!-- Modernizr JS -->
    <script src={{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}></script>
</head>
<body>
<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header header--3 bg__white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('assets/img/logo.png')}}" alt="logo" style="padding-left:10%;width: 100px;">
                            </a>
                        </div>
                    </div>
                    <!-- Start MAinmenu Ares -->
                    <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                        <nav class="mainmenu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="/">Home</a></li>
                                <li class="drop"><a href="/about">About Us</a></li>
                                <li class="drop"><a href="">Blog</a>
                                    <ul class="dropdown col-md-6">
                                        @foreach(App\Blog::all() as $blog)
                                        <li><a href="/blog-details/{{$blog->id}}">Blog {{$blog->id}} :  {{$blog->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="drop"><a href="shop.html">Shop</a>
                                    <ul class="dropdown mega_dropdown">
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="shop.html">shop layout</a>
                                            <ul class="mega__item">
                                                <li><a href="shop.html">default shop</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="shop.html">product details layout</a>
                                            <ul class="mega__item">
                                                <li><a href="product-details.html">tab style 1</a></li></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li>
                                            <ul class="mega__item">
                                                <li>
                                                    <div class="mega-item-img">
                                                        <a href="shop.html">
                                                            <img src="images/feature-img/3.png" alt="">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                    </ul>
                                </li>
                                <li class="drop"><a href="/wishlist">wishlist</a>
                                </li>
                                <li><a href="/contact">contact</a></li>
                            </ul>
                        </nav>
                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="/">blog</a>
                                        <ul class="dropdown">
                                            @foreach(App\Blog::all() as $blog)
                                                <li><a href="blog-details/{{$blog->id}}">{{$blog->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about">about</a></li>
                                            <li><a href="customer-review.html">customer review</a></li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="/login">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End MAinmenu Ares -->
                    <div class="col-md-2 col-sm-4 col-xs-3">
                        <ul class="menu-extra">
                            <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                            <li><a href="/login"><span class="ti-user"></span></a></li>
                            <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                            <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->

    <div class="body__overlay"></div>
    <!-- Start Offset Wrapper -->
    <div class="offset__wrapper">
        <!-- Start Search Popap -->
        <div class="search__area">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12" >
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Offset MEnu -->
        <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset("assets/img/logo.png")}}" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="offset__widget">
                    <div class="offset__single">
                        <h4 class="offset__title">Language</h4>
                        <ul>
                            <li><a href="#"> Engish </a></li>
                            <li><a href="#"> French </a></li>
                            <li><a href="#"> German </a></li>
                        </ul>
                    </div>
                    <div class="offset__single">
                        <h4 class="offset__title">Currencies</h4>
                        <ul>
                            <li><a href="#"> USD : Dollar </a></li>
                            <li><a href="#"> EUR : Euro </a></li>
                            <li><a href="#"> POU : Pound </a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset__sosial__share">
                    <h4 class="offset__title">Follow Us On Social</h4>
                    <ul class="off__soaial__link">
                        <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                        <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                        <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Offset MEnu -->
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="/cart">View Cart</a></li>
                    <li class="shp__checkout"><a href="/checkout">Checkout</a></li>
                </ul>
            </div>
        </div>
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->
    @yield('content')
    <!-- Start Footer Area -->
    <footer class="htc__foooter__area gray-bg">
        <div class="container">
            <div class="row">
                <div class="footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/img/logo.png')}}" alt="footer logo" style="width: 60px">
                                </a>
                            </div>
                            <div class="footer-address">
                                @foreach(\App\Info::orderBy('created_at','desc')->take(1)->get() as $info)
                                <ul>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>{{$info->location}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="address-text">
                                            <a href="#">{{$info->phone_number}}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="address-icon">
                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                        </div>
                                        <div class="address-text">
                                            <p>{{$info->mail_address}}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social__icon">
                                <li><a href="/{{$info->twitter_address}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="/{{$info->instgram_address}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="/{{$info->facebook_address}}"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Categories</h2>
                            <ul class="footer-categories">
                                @foreach(App\SuperCategory::take(6)->get() as $super_category)
                                <li><a href="shop-sidebar.html">{{$super_category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Infomation</h2>
                            <ul class="footer-categories">
                                <li><a href="about">About Us</a></li>
                                <li><a href="contact">Contact Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <p>Subscribe to our newsletter and get 10% off your first purchase .</p>
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
            <!-- Start Copyright Area -->
            <div class="htc__copyright__area">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="copyright__inner">
                            <div class="copyright">
                                <p>© 2019 <a href="https://github.com/YounesChellaf/">Younes Chellaf</a>
                                    All Right Reserved.</p>
                            </div>
                            <ul class="footer__menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </div>
    </footer>
    <!-- End Footer Area -->
</div>
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
         @foreach(App\Product::all() as $product)
    <!-- Modal -->
    <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal__container" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- Start product images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="big images" src="{{asset('assets/img/products/product7.jpg')}}">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1>{{$product->name}}</h1>
                            <div class="rating__and__review">
                                <ul class="rating">
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                            </div>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    @if($product->promotion == null)
                                    <span class="new-price">${{$product->price}}</span>
                                    @else
                                        <span class="old-price">${{$product->price}}</span>
                                        <span class="new-price">${{$product->price - $product->price*$product->promotion/100}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="quick-desc">
                                {{$product->details}}
                            </div>
                            <div class="select__color">
                                <h2>Select color</h2>
                                <ul class="color__list">
                                    <li class="red"><a title="Red" href="#">Red</a></li>
                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                </ul>
                            </div>
                            <div class="select__size">
                                <h2>Select size</h2>
                                <ul class="color__list">
                                    <li class="l__size"><a title="L" href="#">L</a></li>
                                    <li class="m__size"><a title="M" href="#">M</a></li>
                                    <li class="s__size"><a title="S" href="#">S</a></li>
                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                </ul>
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                        <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="addtocart-btn">
                                <a href="/cart">Add to cart</a>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
        @endforeach
</div>
<!-- END QUICKVIEW PRODUCT -->
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src={{asset('assets/js/vendor/jquery-1.12.0.min.js')}}></script>
<!-- Bootstrap framework js -->
<script src={{asset('assets/js/bootstrap.min.js')}}></script>
<!-- All js plugins included in this file. -->
<script src={{asset('assets/js/plugins.js')}}></script>
<script src={{asset('assets/js/slick.min.js')}}></script>
<script src={{asset('assets/js/owl.carousel.min.js')}}></script>
<!-- Waypoints.min.js. -->
<script src={{asset('assets/js/waypoints.min.js')}}></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src={{asset('assets/js/main.js')}}></script>

</body>

</html>