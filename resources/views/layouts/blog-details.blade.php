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
                                    <img src="{{asset("storage/$blog->image")}}" alt="blog images">
                                </div>
                                <div class="upcoming-date">
                                    {{$blog->created_at->format('d')}}<span class="upc-mth"> {{$blog->created_at->format('M Y')}}</span>
                                </div>
                            </div>
                            <!--End Blog Thumb -->
                            <h2>{{$blog->title}}</h2>
                            <div class="blog-admin-and-comment">
                                <p>BY : <a href="#">ADMIN</a></p>
                                <p class="separator">|</p>
                                <p>3 COMMENTS</p>
                            </div>
                            <!-- Start Blog Pra -->
                            <div class="blog-details-pra">
                            <p>{{$blog->blog_details}}</p>
                            </div>
                            <!-- End Blog Pra -->
                            <!-- Start Blog Tags -->
                            <div class="postandshare">
                                <div class="blog-social-icon">
                                </div>
                            </div>
                            <!-- End Blog Tags -->
                            <!-- Start Blog Comment Area -->
                            <div class="our-blog-comment mt--20">
                                <div class="blog-comment-inner">
                                    <h2 class="section-title-2">COMMENTS</h2>
                                    <!-- Start Single Comment -->
                                    @foreach(App\Comment::all()->where('blog_id',$blog->id) as $comment )
                                        @foreach(App\User::all()->where('id',$comment->author_id) as $author)
                                    <div class="single-blog-comment">
                                        <div class="blog-comment-thumb">
                                            @if($author->role_id==1)
                                            <img src="{{asset('storage/users/default.png')}}" alt="comment images">
                                            @else
                                            <img src="{{$author->avatar}}" alt="comment images" style="border-radius: 50%">
                                            @endif
                                        </div>
                                        <div class="blog-comment-details">
                                            <div class="comment-title-date">
                                                <h2><a href="#">{{$author->name}} </a> </h2>
                                                @endforeach
                                                <div class="reply" >
                                                    <p>{{$comment->created_at->format('d M Y')}} / <button type="button" id="btn1">REPLY</button></p>
                                                </div>
                                            </div>
                                            <p>{{$comment->content}}</p>
                                        </div>
                                    </div>
                                            @foreach(App\Reply::all()->where('comment_id',$comment->id) as $reply)
                                                @if($reply->count()>0)
                                                    @foreach(App\User::all()->where('id',$reply->author_id) as $author)
                                                <div class="single-blog-comment comment-reply">
                                                    <div class="blog-comment-thumb">
                                                        @if($author->role_id==1)
                                                            <img src="{{asset('storage/users/default.png')}}" alt="comment images">
                                                        @else
                                                            <img src="{{$author->avatar}}" alt="comment images" style="border-radius: 50%">
                                                        @endif
                                                    </div>
                                                    <div class="blog-comment-details">
                                                        <div class="comment-title-date">
                                                            <h2><a href="#">{{$author->name}}</a></h2>
                                                            @endforeach
                                                            <div class="reply">
                                                                <p>{{$reply->created_at->format('d M Y')}}</p>
                                                            </div>
                                                        </div>
                                                        <p>{{$reply->content}}</p>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                             @auth()
                                              <script>
                                               $(document).ready(function(){
                                               $("#bnt1").click(function(){
                                                $("#2").toggle();
                                               });
                                               });
                                              </script>
                                             <div class="row">
                                                 <div id="2" class="our-reply-form-area mt--20 col-md-8" style="margin-left:10%; display: none">
                                                     <form id="reply-form" action="/blog-details/{{$blog->id}}" method="POST">
                                                         {{ csrf_field() }}
                                                         <input type="hidden"  name="user" value="{{Auth::user()->id}}" />
                                                         <div class="reply-form-inner mt--40">
                                                             <div class="reply-form-box">
                                                                 <textarea name="message" placeholder="Message"></textarea>
                                                             </div>
                                                             <div class="blog__details__btn">
                                                                 <a class="htc__btn btn--gray" href="#" id="submit-reply">
                                                                     submit
                                                                 </a>
                                                                 <script>
                                                                     document.getElementById("submit-reply").onclick = function() {
                                                                         document.getElementById("reply-form").submit();
                                                                     }
                                                                 </script>
                                                             </div>
                                                         </div>
                                                     </form>
                                                 </div>
                                             </div>
                                             @elseauth()
                                             @endauth
                                    @endforeach
                                    <!-- End Single Comment -->
                                    <!-- Start Single Comment -->
                                    <!-- End Single Comment -->
                                </div>
                            </div>
                            <!-- End Blog Comment Area -->
                            <!-- Start Reply Form -->
                            @auth()
                            <div class="our-reply-form-area mt--20">
                                <form id="reply-form" action="/blog-details/{{$blog->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden"  name="user" value="{{Auth::user()->id}}" />
                                <h2 class="section-title-2">LEAVE A COMMENT</h2>
                                <div class="reply-form-inner mt--40">
                                    <div class="reply-form-box">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="blog__details__btn">
                                        <a class="htc__btn btn--gray" href="#" id="submit-reply">
                                            submit
                                        </a>
                                        <script>
                                            document.getElementById("submit-reply").onclick = function() {
                                                document.getElementById("reply-form").submit();
                                            }
                                        </script>
                                    </div>
                                </div>
                                </form>
                            </div>
                            @elseauth()
                            @endauth
                            <!-- End Reply Form -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 smt-30 xmt-40">
                    <div class="blod-details-right-sidebar">
                        <!-- Start Category Area -->
                        <div class="our-category-area mt--60">
                            <h2 class="section-title-2">CATEGORY</h2>
                            <ul class="categore-menu">
                                @foreach(App\SuperCategory::all() as $super_category)
                                      <li><a href=""><i class="zmdi zmdi-caret-right"></i>{{$super_category->name}}<span>{{$all_blog->where('super_category_id',$super_category->id)->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Category Area -->
                        <!-- Start Letaest Blog Area -->
                        <div class="our-recent-post mt--60">
                            <h2 class="section-title-2">LATEST POST</h2>
                            @foreach(App\Blog::orderBy('created_at','desc')->take(5)->get() as $blog)
                            <div class="our-recent-post-wrap">
                                <!-- Start Single Post -->
                                <div class="single-recent-post">
                                    <div class="recent-thumb">
                                        <a href="/blog-details/{{$blog->id}}"><img src="{{asset("storage/$blog->image")}}" alt="post images"></a>
                                    </div>
                                    <div class="recent-details">
                                        <div class="recent-post-dtl">
                                            <h6><a href="/blog-details/{{$blog->id}}">{{$blog->title}}</a></h6>
                                        </div>
                                        <div class="recent-post-time">
                                            <p>{{$blog->created_at->format('d M Y')}}</p>
                                            <p class="separator">|</p>
                                            <p>{{$blog->created_at->format('h:i')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                                @endforeach
                        </div>
                        <!-- End Letaest Blog Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Blog Area -->
@endsection
