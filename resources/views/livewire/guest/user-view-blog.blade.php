<section class="page-header">
    <div class="page-header-content">
        <div class="container">
            <div class="page-header-text thumbnail">
                <h2>Blog Details</h2>
                <p>Authored by: {{$blog->creator->name}}</p>
            </div>
        </div>
    </div>
</section>
<!-- page header end-->



<!--service list section start-->
<section class="inner-page single-page borderbottom">
    <div class="container">
        <div class="entry-content">
            <div class="post-content">
                <h1 class="title" style="font-size: 150%;">{{$blog->title}}</h1>
                <ul class="meta-post border-style d-flex flex-wrap list-unstyled">
                    <li>By <a class="admin" href="#">{{$blog->creator->name}}</a></li>
                    <li>{{$blog->created_at->format('d M, Y')}}</li>
                    <li><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                </ul>

             </div>
            <div class="post-thumb">
                <div class="thumb-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="thumbnail" src="{{$blog->ImagePath}}" alt="thumb">
                        </div>
{{--                        <div class="swiper-slide">--}}
{{--                            <img class="thumbnail" src="{{$blog->ImagePath}}" alt="thumb">--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <img class="thumbnail" src="{{$blog->ImagePath}}" alt="thumb">--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>

            <div class="post-content">
                <p>{{$blog->content}}</p>
                <hr>
                <br>
                @if($blog->continue_image_1)
                <div class="post-thumb">
                    <div class="thumb-slider-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="thumbnail" src="{{$blog->Continue1ImagePath}}" alt="thumb">
                            </div>


                        </div>
                    </div>
                </div>
                @endif
                <br>
                <p>{{$blog->continue_1}}</p>
                <hr>
                <br>
                @if($blog->continue_image_2)
                    <div class="post-thumb">
                        <div class="thumb-slider-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="thumbnail" src="{{$blog->Continue2ImagePath}}" alt="thumb">
                                </div>


                            </div>
                        </div>
                    </div>
                @endif
                <br>
                @if($blog->quote)
                <div class="post-content">
                    <blockquote>
                        <p>"{{$blog->quote}}"</p>
                        <a href="#" class="b-au"> <span>Reference: </span> {{$blog->quote_by}}</a>
                        <i class="qoute-icon lni-quotation"></i>
                    </blockquote>
                 </div>
                @endif

                <p>{{$blog->continue_2}}</p>
                <hr>
                <br>



                <div style="color: maroon">
                    <small>Blog's link (Copy to share)</small>
                    <input type="text" value="https://mozisha.com/blog/{{$blog->slug}}" id="link" class="form-control">
                    <button type="button" style="margin-top: 5px;" class="btn btn-primary" onclick="copyText()"  >Copy Link</button>
                </div>
                <br>
                <div>
                    <a href="{{url()->previous()}}" class="da-custom-btn btn-border-radius40"><span>Go back</span></a>
                    <a href="{{route('blog')}}" class="da-custom-btn btn-border-radius40"><span>Explore More</span></a>
                </div>

{{--                <blockquote>--}}
{{--                    <p>{{$blog->quote}}</p>--}}
{{--                    <a href="#" class="b-au">Composed by <span>{{$blog->reference}}</span></a>--}}
{{--                    <i class="qoute-icon lni-quotation"></i>--}}
{{--                </blockquote>--}}
{{--                <p>{{$blog->content_2}}</p>--}}
            </div>



        </div>

{{--        <div class="mas-section">--}}
{{--            <h6 class="section-title"><span>05</span> Comments</h6>--}}
{{--            <ul class="comments-list">--}}
{{--                <li class="comments">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="assets/images/single-page/comment/01.jpg" alt="thumb">--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <div class="comment-heading">--}}
{{--                            <a class="name" href="#">Johan Miami</a> <span>Jan 18, 2017 at 05:30 AM</span>--}}
{{--                            <a href="#" class="reply">Reply</a>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat </p>--}}

{{--                    </div>--}}
{{--                </li>--}}

{{--                <li class="comments">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="assets/images/single-page/comment/02.jpg" alt="thumb">--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <div class="comment-heading">--}}
{{--                            <a class="name" href="#">Johan Miami</a> <span>Jan 18, 2017 at 05:30 AM</span>--}}
{{--                            <a href="#" class="reply">Reply</a>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat </p>--}}
{{--                    </div>--}}

{{--                    <ul class="comment-sub-list">--}}
{{--                        <li class="comments">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="assets/images/single-page/comment/03.jpg" alt="thumb">--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <div class="comment-heading">--}}
{{--                                    <a class="name" href="#">Johan Miami</a> <span>Jan 18, 2017 at 05:30 AM</span>--}}
{{--                                    <a href="#" class="reply">Reply</a>--}}
{{--                                </div>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat </p>--}}
{{--                            </div>--}}
{{--                            <ul class="comment-sub-list">--}}
{{--                                <li class="comments">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <img src="assets/images/single-page/comment/01.jpg" alt="thumb">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="comment-heading">--}}
{{--                                            <a class="name" href="#">Johan Miami</a> <span>Jan 18, 2017 at 05:30 AM</span>--}}
{{--                                            <a href="#" class="reply">Reply</a>--}}
{{--                                        </div>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="comments">--}}
{{--                    <div class="thumb">--}}
{{--                        <img src="assets/images/single-page/comment/01.jpg" alt="thumb">--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <div class="comment-heading">--}}
{{--                            <a class="name" href="#">Johan Miami</a> <span>Posted On Jan 18, 2017 at 05:30 AM</span>--}}
{{--                            <a href="#" class="reply">Reply</a>--}}
{{--                        </div>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat </p>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul><!-- /.comments-list -->--}}
{{--        </div><!-- /.ccr-section -->--}}


{{--        <div class="mas-section mb--60 mb-0">--}}
{{--            <h4 class="section-title">Leave a Comment--}}
{{--            </h4>--}}


{{--            <div class="comment-response">--}}
{{--                <form action="#">--}}
{{--                    <div class="form-input  row">--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <input type="text" class="name" name="name" placeholder="Your Name">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <input type="text" class="email" name="E-mail" placeholder="Your Email">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <input type="text" class="email" name="website" placeholder="Website">--}}
{{--                        </div>--}}



{{--                    </div>--}}
{{--                    <textarea name="massage" id="massage" placeholder="Your Massage"></textarea>--}}

{{--                    <input type="submit" value="Submit">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
<!--service list section end-->


<!--  acton section start -->
<section class="bz-action-section pt--80 pb--80 pt_lg--120 pb_lg--120" style="background-color: #420175 !important;">
    <div class="col-11 col-lg-5 m-auto">
        <div class="action-content text-center text-lg-left">
            <p class="subtitle  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">So What's Next</p>
            <h2 class="title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Get Started Now!  <a href="#" class="da-custom-btn btn-border-radius40"><span>Get started</span></a></h2>
        </div>
    </div>
</section>
<!--  acton section end  -->
<script>
    function copyText() {
        var copyText = document.getElementById("link");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");

        // Display a success toast, with a title
        toastr.success(copyText.value, 'Link copied successfully!')
    }
</script>
