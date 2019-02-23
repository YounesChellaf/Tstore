@extends('master')
@section('content')
    <section class="categories-slider-area bg__white">
    <div class="container">
        <div class="row">
            <!-- Start Left Feature -->
            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                <div class="categories-menu mrg-xs">
                    <div class="category-heading">
                        <h3> Browse Categories</h3>
                    </div>
                    <div class="category-menu-list">
                        @foreach(App\SuperCategory::take(10)->get() as $super_category)
                        <ul>
                            <li><a href="#"><img alt="" src="images/icons/thum2.png">{{$super_category->name}}<i class="zmdi zmdi-chevron-right"></i></a>
                                <div class="category-menu-dropdown">
                                    <div class="category-part-1 category-common mb--30">
                                        <h4 class="categories-subtitle">{{$super_category->name}} Sub categories</h4>
                                        @foreach(App\Category::take(12)->get() as $category)
                                            @if($category->super_category_id == $super_category->id)
                                        <ul>
                                            <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                                        </ul>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        </ul>
                            @endforeach
                    </div>
                </div>
            </div>
            <!-- End Left Feature -->
        </div>
    </div>
    </section>
    <!-- Start Product annocement -->
    <section class="htc__product__area shop__page ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter__menu__container">
                            <div class="product__menu col-md-8">
                                <button data-filter="*"  class="is-checked">All</button>
                                <button data-filter=".cat--1">Promotion</button>
                            </div>
                            <div class="filter__box">
                                <a class="filter__menu" href="#">filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Filter Menu -->
                <div class="filter__wrap">
                    <div class="filter__cart">
                        <div class="filter__cart__inner">
                            <div class="filter__menu__close__btn">
                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                            </div>
                            <div class="filter__content">
                                <!-- Start Single Content -->
                                <div class="fiter__content__inner">
                                    <div class="single__filter">
                                        <h2>Price</h2>
                                        <ul class="filter__list">
                                            <li><a href="filter-price-one">$0.00 - $50.00</a></li>
                                            <li><a href="filter-price-two">$50.00 - $200.00</a></li>
                                            <li><a href="filter-price-three">$200.00 - $500.00</a></li>
                                            <li><a href="filter-price-four">$500.00 - $700.00</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Product State</h2>
                                        <ul class="filter__list">
                                            <li><a href="/new-products">New</a></li>
                                            <li><a href="/used-products">Used</a></li>
                                            <li><a href="/selling-products">For Selling</a></li>
                                            <li><a href="/exchange-products">Exchange</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Delivery</h2>
                                        <ul class="filter__list">
                                            <li><a href="/express-delivering">Express</a></li>
                                            <li><a href="/normal-delivering">Normal</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Payment</h2>
                                        <ul class="filter__list">
                                            <li><a href="cash-payment">Cash</a></li>
                                            <li><a href="e-payment">E-payment</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter Menu -->
                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">
                        @foreach($Product as $product)
                        <!-- Start Single Product -->
                            @if($product->promotion == null)
                                <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/products/product1.jpg')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="/product-details/{{$product->id}}">{{$product->name}}</a></h2>
                                    <ul class="product__price">
                                        <li class="new__price">${{$product->price}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            @else
                                <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                    <div class="product foo">
                                        <div class="product__inner">
                                            <div class="pro__thumb">
                                                <a href="#">
                                                    <img src="{{asset('assets/img/products/product1.jpg')}}" alt="product images">
                                                </a>
                                            </div>
                                            <div class="product__hover__info">
                                                <ul class="product__action">
                                                    <li><a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                    <li><a title="Add TO Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                    <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__details">
                                            <h2><a href="/product-details/{{$product->id}}">{{$product->name}}</a></h2>
                                            <ul class="product__price">
                                                <li class="old__price">${{$product->price}}</li>
                                                <li class="new__price">${{$product->price - $product->price*$product->promotion/100}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        <!-- End Single Product -->
                        @endforeach
                    </div>
                </div>
                <!-- Start Load More BTn -->
                <div class="row mt--60">
                    <div class="col-md-12">
                        <div class="htc__loadmore__btn">
                            <a href="/all-products">load all</a>
                        </div>
                    </div>
                </div>
                <!-- End Load More BTn -->
            </div>
        </div>
    </section>
    <!-- End Product annocement -->
    <!-- Start Blog Area -->
    <section class="htc__blog__area bg__white pb--130" style="padding-top: 10%">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title section__title--2 text-center">
                        <h2 class="title__line">Latest News</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog__wrap clearfix mt--60 xmt-30">
                    <!-- Start Single Blog -->
                    @foreach(App\Blog::orderBy('created_at','desc')->take(3)->get() as $blog)
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="blog foo">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <a href="blog-details/{{$blog->id}}">
                                        <img src="storage/{{$blog->image}}" alt="blog images">
                                    </a>
                                    <div class="blog__post__time">
                                        <div class="post__time--inner">
                                            <span class="date">{{$blog->created_at->format('d')}}</span>
                                            <span class="month">{{$blog->created_at->format('M')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__hover__info">
                                    <div class="blog__hover__action">
                                        <p class="blog__des"><a href="blog-details/{{$blog->id}}">{{$blog->title}}</a></p>
                                        <ul class="bl__meta">
                                            <li>By :<a href="#">Admin</a></li>
                                            <li>Product</li>
                                        </ul>
                                        <div class="blog__btn">
                                            <a class="read__more__btn" href="blog-details/{{$blog->id}}">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection