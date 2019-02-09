@extends('master')
@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('assets/img/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Blog Details</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">right sidebar</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Our Blog Area -->
    <section class="blog-details-wrap ptb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="blog-details-left-sidebar">
                        <div class="blog-details-top">
                            <!--Start Blog Thumb -->
                            <div class="blog-details-thumb-wrap">
                                <div class="blog-details-thumb">
                                    <img src="{{asset('assets/img/products/product1.jpg')}}" alt="blog images">
                                </div>
                                <div class="upcoming-date">
                                    14<span class="upc-mth">Sep,2017</span>
                                </div>
                            </div>
                            <!--End Blog Thumb -->
                            <h2>It is a long established fact that a reader will</h2>
                            <div class="blog-admin-and-comment">
                                <p>BY : <a href="#">ADMIN</a></p>
                                <p class="separator">|</p>
                                <p>3 COMMENTS</p>
                            </div>
                            <!-- Start Blog Pra -->
                            <div class="blog-details-pra">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>

                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore d aliqua. Ut enim ad minim veniam, </blockquote>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol orea magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                            </div>
                            <!-- End Blog Pra -->
                            <!-- Start Blog Tags -->
                            <div class="postandshare">
                                <div class="post">
                                    <p>TAGS :</p>
                                </div>
                                <div class="blog-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Blog Tags -->
                            <!-- Start Blog Comment Area -->
                            <div class="our-blog-comment mt--20">
                                <div class="blog-comment-inner">
                                    <h2 class="section-title-2">COMMENTS (03)</h2>
                                    <!-- Start Single Comment -->
                                    <div class="single-blog-comment">
                                        <div class="blog-comment-thumb">
                                            <img src="images/comment/1.jpg" alt="comment images">
                                        </div>
                                        <div class="blog-comment-details">
                                            <div class="comment-title-date">
                                                <h2><a href="#">Martin Payet</a></h2>
                                                <div class="reply">
                                                    <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Start Single Comment -->
                                    <div class="single-blog-comment comment-reply">
                                        <div class="blog-comment-thumb">
                                            <img src="images/comment/2.jpg" alt="comment images">
                                        </div>
                                        <div class="blog-comment-details">
                                            <div class="comment-title-date">
                                                <h2><a href="#">Martin Payet</a></h2>
                                                <div class="reply">
                                                    <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Start Single Comment -->
                                    <div class="single-blog-comment">
                                        <div class="blog-comment-thumb">
                                            <img src="images/comment/3.jpg" alt="comment images">
                                        </div>
                                        <div class="blog-comment-details">
                                            <div class="comment-title-date">
                                                <h2><a href="#">Martin Payet</a></h2>
                                                <div class="reply">
                                                    <p>14 Sep 2017 / <a href="#">REPLY</a></p>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                </div>
                            </div>
                            <!-- End Blog Comment Area -->
                            <!-- Start Reply Form -->
                            <div class="our-reply-form-area mt--20">
                                <h2 class="section-title-2">LEAVE A REPLY</h2>
                                <div class="reply-form-inner mt--40">
                                    <div class="reply-form-box">
                                        <div class="reply-form-box-inner">
                                            <div class="rfb-single-input">
                                                <input type="text" placeholder="Name*">
                                            </div>
                                            <div class="rfb-single-input">
                                                <input type="email" placeholder="Email*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply-form-box">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="blog__details__btn">
                                        <a class="htc__btn btn--gray" href="#">submit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Reply Form -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 smt-30 xmt-40">
                    <div class="blod-details-right-sidebar">
                        <div class="category-search-area">
                            <input placeholder="Search......" type="text">
                            <a class="srch-btn" href="#"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <!-- Start Category Area -->
                        <div class="our-category-area mt--60">
                            <h2 class="section-title-2">CATEGORY</h2>
                            <ul class="categore-menu">
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i>BLOG <span>20</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i>business <span>40</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i>DESIGN <span>60</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i>BRANDING <span>70</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-caret-right"></i>ANTHONY <span>80</span></a></li>
                            </ul>
                        </div>
                        <!-- End Category Area -->
                        <!-- Start Letaest Blog Area -->
                        <div class="our-recent-post mt--60">
                            <h2 class="section-title-2">LATEST POST</h2>
                            <div class="our-recent-post-wrap">
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/2.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="blog-details.html"><img src="images/blog/sm-img/3.jpg" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu adipisicing elit, sed do.</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>14 SEP 2017</p>
                                            <p class="separator">|</p>
                                            <p>5 : 00 PM</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                        </div>
                        <!-- End Letaest Blog Area -->
                        <!-- Start Tag -->
                        <div class="our-blog-tag">
                            <h2 class="section-title-2">TAGS</h2>
                            <ul class="tag-menu mt-40">
                                <li><a href="#">Planning</a></li>
                                <li><a href="#">Consulting</a></li>
                                <li><a href="#">Investment</a></li>
                                <li><a href="#">Investment</a></li>
                                <li><a href="#">planning</a></li>
                                <li><a href="#">Management</a></li>
                            </ul>
                        </div>
                        <!-- End Tag -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Blog Area -->
@endsection
