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



    <!--service list section start-->
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
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 pb--60 pb-lg-0 pr_lg--40">
                    <div class="row">

                        @if($blogs)
                            @foreach($blogs as $blog)
                        <div class="col-md-6 col-lg-6" >
                            <div class="post-item flip-style">
                                <div class="post-thumb">
                                    <a href="/blog/{{$blog->id}}/view"><img src="{{$blog->ImagePath}}" alt="thumb"></a>
                                    <div class="post-content">
                                        <div class="flip-card post-content-inner" >
                                            <div class="front" wire:ignore.self>
                                                <ul class="meta-post line-style">
                                                    <li>{{$blog->created_at->format('M d, Y')}}</li>
                                                </ul>
                                                <h6 class="title"><a href="/blog/{{$blog->id}}/view">{{Str::limit($blog->title, 54, $end='...') }}</a></h6>
                                            </div>
                                            <div class="back" wire:ignore.self>
                                                <a href="/blog/{{$blog->id}}/view" class="read-more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach

                        @endif



                    </div>
                    {{ $blogs->links('components.user.pagination-links') /* For pagination links */}}

                </div>

                <!--sidebar-->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget">
                            <form action="#" class="search-form">
                                <input type="text" name="search" placeholder="Search...">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>

                        <div class="widget">
                            <h6 class="widget-title">Catagories</h6>
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="select form-control" wire:model="category" tabindex="-1" aria-hidden="true">
                                    <option value="">All Category</option>
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
                            <ul class="list-unstyled pl-0 cata-post-list">
                                <li><a href="#"><span>Software Dev</span> <span>{{$softDevNo}}</span></a></li>
                                <li><a href="#"><span>Entrepreneurship</span> <span>{{$entNo}}</span></a></li>
                                <li><a href="#"><span>Collaboration</span> <span>{{$collNo}}</span></a></li>
                                <li><a href="#"><span>Marketing</span> <span>{{$markNo}}</span></a></li>
                                <li><a href="#"><span>Seminars</span> <span>{{$semNo}}</span></a></li>
                                <li><a href="#"><span>E-learning</span> <span>{{$eleNo}}</span></a></li>
                                <li><a href="#"><span>Freelancing</span> <span>{{$freNo}}</span></a></li>
                                <li><a href="#"><span>Business</span> <span>{{$busNo}}</span></a></li>
                            </ul>
                        </div>


{{--                        <div class="widget">--}}
{{--                            <h6 class="widget-title">Tags</h6>--}}
{{--                            <ul class="list-unstyled pl-0 tag-list">--}}
{{--                                <li><a href="#">Web Design</a></li>--}}
{{--                                <li><a href="#">Marketing</a></li>--}}
{{--                                <li><a href="#">UI/UX</a></li>--}}
{{--                                <li><a href="#">Developement</a></li>--}}
{{--                                <li><a href="#">Photography</a></li>--}}
{{--                                <li><a href="#">E-commerce</a></li>--}}
{{--                                <li><a href="#">WordPress</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}


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
                                                    <a href="/blog/{{$blog->id}}/view"><img src="{{$blog->ImagePath}}" alt="thumb"></a>
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
