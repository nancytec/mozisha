<div>
    <!-- page header start -->
    <section class="page-header">
        <div class="page-header-content">
            <div class="container">
                <div class="page-header-text">
                    <h2>Blog section</h2>
                    <p>Browse through our content filled blog</p>
                </div>
            </div>
        </div>
    </section>
    <!-- page header end-->



    <section class="inner-page about-page borderbottom pb--60 pb_lg--80">
        <div class="container p-0">
            <div class="section-header">
                <h2 class="title">Latest<br>from the blog</h2>
                <p class="desc mb-0">
                    Partnership Programmes: Mozisha works with government, private and
                    international development actors to develop and implement programmes that expand opportunities for youth
                    across Africa.

                    Partnership Programmes	Partnership Programmes: Mozisha works with government, private and
                    international development actors to develop and implement programmes that expand opportunities for youth
                    across Africa.


                </p>
                <div class="entry-footer d-flex flex-wrap align-items-center justify-content-between align-items-center">
                    <ul class="tags list-unstyled pl-0 d-flex flex-wrap align-items-center mb-5 mb-lg-0">
                        <li>Cats:</li>
                        <li><a href="#">Software Dev <span style="color: maroon;">{{$softDevNo}}</span></a></li>
                        <li><a href="#">Entrepreneurship <span style="color: maroon;">{{$entNo}}</span></a></li>
                        <li><a href="#">Collaboration <span style="color: maroon;">{{$collNo}}</span></a></li>
                        <li><a href="#">Marketing <span style="color: maroon;">{{$markNo}}</span></a></li>
                        <li><a href="#">Seminars <span style="color: maroon;">{{$semNo}}</span></a></li>
                        <li><a href="#">E-learning <span style="color: maroon;">{{$eleNo}}</span></a></li>
                        <li><a href="#">Freelancing <span style="color: maroon;">{{$freNo}}</span></a></li>
                        <li><a href="#">Business <span style="color: maroon;">{{$busNo}}</span></a></li>
                    </ul>
                    <div class="form-group">


                    </div>
                    <ul class="like-share list-unstyled pl-0 d-flex flex-wrap align-items-center m-0">
                        <div class="form-group">

                            <select class="select form-control" wire:model="category" tabindex="-1" aria-hidden="true">
                                <option value="">Categories</option>
                                <option value="Software_development">Software Development</option>
                                <option value="Entrepreneurship">Entrepreneurship</option>
                                <option value="Seminars">Seminars</option>
                                <option value="Collaboration">Collaboration</option>
                                <option value="Marketing">Marketing</option>
                                <option value="E-learning">E-learning</option>
                                <option value="Freelancing">Freelancing</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">



            <div class="row">

                @if($blogs)
                    @foreach($blogs as $blog)
                <div class="col-lg-6">
                    <div class="post-item style2">
                        <div class="post-thumb">
                            <a href="#"><img src="{{$blog->ImagePath}}" alt="thumb"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">

                                <h6 class="title"><a href="/blog/{{$blog->slug}}">{{Str::limit($blog->title, 54, $end='...') }}</a></h6>
                                <ul class="meta-post border-style d-flex flex-wrap list-unstyled">
                                    <li>By <a class="admin" href="/blog/{{$blog->slug}}">{{$blog->creator->name}}</a></li>
                                    <li>{{$blog->created_at->format('M d, Y')}}</li>
                                    <li><a href="#">{{$blog->view}} views</a></li>
                                </ul>
                                <p class="excerpt">{{Str::limit($blog->content, 250, $end='...') }}</p>
                                <a href="/blog/{{$blog->slug}}" class="btn-transparent">Learn More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

                @endif


            </div>

                {{ $blogs->links('components.user.pagination-links') /* For pagination links */}}

        </div>

    </section>
    <!--service list section end-->


    <section class="inner-page about-page borderbottom pb--60 pb_lg--80">



        <!--sidebar-->
        <div class="col-lg-6">
            <div class="sidebar">

                <div class="widget">
                    <h6 class="widget-title">Recent Post</h6>
                    <div class="recent-post">
                        <div class="recent-post-container">
                            <div class="swiper-wrapper">
                                @if($randBlogs)
                                    @foreach($randBlogs as $blog)
                                        <div class="swiper-slide">
                                            <div class="post-item">
                                                <div class="post-thumb">
                                                    <a href="/blog/{{$blog->slug}}"><img src="{{$blog->ImagePath}}" alt="thumb"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="recent-post-next-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="recent-post-prev-btn"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service list section end-->




    <!--  acton section start -->
    <section class="bz-action-section pt--80 pb--80 pt_lg--120 pb_lg--120" style="background-color: #420175 !important;">
        <div class="col-11 col-lg-5 m-auto">
            <div class="action-content text-center text-lg-left">
                <p class="subtitle  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">So What's Next</p>
                <h2 class="title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Get Started Now!  <a href="{{route('user.account')}}" class="da-custom-btn btn-border-radius40"><span>Get started</span></a></h2>
            </div>
        </div>
    </section>
    <!--  acton section end  -->

</div>
